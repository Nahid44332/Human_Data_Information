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
}
