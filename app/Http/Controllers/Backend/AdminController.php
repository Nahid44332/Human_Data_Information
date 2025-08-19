<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HumanData;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminDashboard()
    {
        $humans = HumanData::get();
        $humanscount = $humans->count();
        return view('backend.admin-dashboard', compact('humans', 'humanscount'));
    }
    public function humanList()
    {
        $humans = HumanData::get();
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
}
