<?php

namespace App\Http\Controllers;

use App\Models\HumanData;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function index()
    {
        return view('frontend.index');  
    }

    public function dataStore(Request $request)
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
}
