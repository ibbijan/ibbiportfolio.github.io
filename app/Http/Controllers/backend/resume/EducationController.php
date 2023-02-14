<?php

namespace App\Http\Controllers\backend\resume;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //

    public function create(){
        return view('backend.resume.education_create');
    }

    public function store(Request $request){
        $edu = new Education();
        $edu->home_id = $request->home_id;
        $edu->degree_name = $request->degree_name;
        $edu->degree_since = $request->degree_since;
        $edu->uni_name = $request->uni_name;
        $edu->description = $request->description;
        $edu->save();

       
 
        return redirect()->route('admin_dashboard');
    }
}
