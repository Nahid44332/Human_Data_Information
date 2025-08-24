<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HumanData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function adminDashboard()
{
    $today = Carbon::today();
    $todayHuman = HumanData::whereDate('created_at', $today)->count();
    $weeklyHumans = HumanData::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
    $monthlyHumans = HumanData::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
    $humanscount = HumanData::count();
    $maleCount = HumanData::where('gender', 'male')->count();
    $femaleCount = HumanData::where('gender', 'female')->count();

    // --- Monthly Data for Chart ---
    $monthlyLabels = [];
    $monthlyData = [];
    for ($m = 1; $m <= 12; $m++) {
        $monthlyLabels[] = Carbon::create()->month($m)->format('M');
        $monthlyData[] = HumanData::whereMonth('created_at', $m)->count();
    }

    // --- Last 7 Days Data for Chart ---
    $weeklyLabels = [];
    $weeklyData = [];
    for ($i = 6; $i >= 0; $i--) {
        $date = Carbon::today()->subDays($i);
        $weeklyLabels[] = $date->format('d M');
        $weeklyData[] = HumanData::whereDate('created_at', $date)->count();
    }

    return view('backend.admin-dashboard', compact('humanscount', 'todayHuman', 'weeklyHumans', 'monthlyHumans', 'monthlyLabels', 'monthlyData', 'weeklyLabels', 'weeklyData', 'maleCount', 'femaleCount'));
    }
    public function humanList(Request $request)
    {
        if ($request->has('search') && !empty($request->search)) {
            $humans = HumanData::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('phone', 'LIKE', '%' . $request->search . '%')
                ->orWhere('blood', 'LIKE', '%' . $request->search . '%')
                ->orWhere('nid', 'LIKE', '%' . $request->search . '%')
                ->orWhere('dob', 'LIKE', '%' . $request->search . '%')
                ->orWhere('age', 'LIKE', '%' . $request->search . '%')
                ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                ->orWhere('address', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $humans = HumanData::all(); // search না থাকলে সব ডেটা দেখাবে
        }
        return view('backend.human-list', compact('humans'));
    }
    public function humanListDelete($id)
    {
        $humans = HumanData::find($id);

        $humans->delete();
        toastr()->success('Delete Successfully!');
        return redirect()->back();
    }
    public function humanListEdit(Request $request, $id)
    {
        $humans = HumanData::find($id);
        return view('backend.human-edit', compact('humans'));
    }
    public function humanListUpdate(Request $request, $id)
    {
        $humans = HumanData::find($id);

        $humans->name = $request->name;
        $humans->father_name = $request->father_name;
        $humans->mother_name = $request->mother_name;
        $humans->nid = $request->nid;
        $humans->dob = $request->dob;
        $humans->age = $request->age;
        $humans->email = $request->email;
        $humans->blood = $request->blood;
        $humans->profession = $request->profession;
        $humans->gender = $request->gender;
        $humans->address = $request->address;

        $humans->save();
        toastr()->success('Human Update Successfully');
        return redirect('/admin/human-list');
    }
    public function todayHuman()
    {
        $today = Carbon::today();

        $todayHuman = HumanData::whereDate('created_at', $today)->get();
        return view('backend.today-humans', compact('todayHuman'));
    }
    public function weeklyHumans()
    {
        $startOfWeek = Carbon::now()->startOfWeek(); // সপ্তাহের শুরু
        $endOfWeek = Carbon::now()->endOfWeek();     // সপ্তাহের শেষ

        $weeklyHumans = HumanData::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();

        return view('backend.weekly-humans', compact('weeklyHumans'));
    }

    public function monthlyHumans()
    {
        $startOfMonth = Carbon::now()->startOfMonth(); // মাসের শুরু
        $endOfMonth = Carbon::now()->endOfMonth();     // মাসের শেষ

        $monthlyHumans = HumanData::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();

        return view('backend.monthly-humans', compact('monthlyHumans'));
    }

    // add Human
    public function addHumans()
    {
        return view('backend.add-human');
    }

    public function storeHumans(Request $request)
    {
        $humanData = new HumanData();

        $humanData->name = $request->name;
        $humanData->father_name = $request->father_name;
        $humanData->mother_name = $request->mother_name;
        $humanData->nid = $request->nid;
        $humanData->dob = $request->dob;
        $humanData->age = $request->age;
        $humanData->email = $request->email;
        $humanData->blood = $request->blood;
        $humanData->phone = $request->phone;
        $humanData->address = $request->address;
        $humanData->gender = $request->gender;
        $humanData->profession = $request->profession;

        $humanData->save();
        toastr()->success('You Ragistert successfully!');
        return redirect()->back();
    }

    // reports
    public function bloodGroup(Request $request)
    {
        if ($request->has('search') && !empty($request->search)) {
            $humans = HumanData::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('phone', 'LIKE', '%' . $request->search . '%')
                ->orWhere('blood', 'LIKE', '%' . $request->search . '%')
                ->orWhere('address', 'LIKE', '%' . $request->search . '%')
                ->get();
        } else {
            $humans = HumanData::all(); // search না থাকলে সব ডেটা দেখাবে
        }

        return view('backend.blood-group', compact('humans'));
    }

    public function age()
    {
        $humans = HumanData::get();
        return view('backend.human-age', compact('humans'));
    }
    public function humanProfile($id)
    {
        $human = HumanData::find($id);
        return view('backend.human-profile', compact('human'));
    }


    // admin profile
    public function adminProfile()
    {
        return view('backend.admin-profile');
    }
    
    public function profileSettings()
    {
        return view('backend.profile-setting');
    }

   public function updateProfile(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'new_email' => 'required|email|confirmed',
        'current_password' => 'required',
        'new_password' => 'nullable|confirmed|min:6',
    ]);

    $admin = Auth::user();

    if (!Hash::check($request->current_password, $admin->password)) {
        return back()->with('error', 'Current password is incorrect!');
    }

    $admin->name = $request->name;
    $admin->email = $request->new_email;

    if ($request->new_password) {
        $admin->password = Hash::make($request->new_password);
    }

    $admin->save();

    return back()->with('success', 'Profile updated successfully!');
}

}
