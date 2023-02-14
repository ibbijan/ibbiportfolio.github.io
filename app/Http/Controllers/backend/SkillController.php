<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function create(){
        return view('backend.skills.create');
    }


    public function store(Request $request){

       $skill = new Skill();
       $skill->skill = $request->skill;
       $skill->percentage = $request->percentage;

    
       $skill->save();

       return redirect()->route('admin_dashboard');

    }
}
