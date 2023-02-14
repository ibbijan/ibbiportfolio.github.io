<?php

namespace App\Http\Controllers\backend\resume;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\ExperiencePoint;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
    //

    public function create(){
        return view('backend.resume.experience_create');
    }


    public function store(Request $request){

      $experience_id =  Experience::insertGetId([
            'home_id' => $request->home_id,
            'profession_name' => $request->profession_name,
            'profession_since' => $request->profession_since,
            'location' => $request->location,
            'created_at' => Carbon::now(),

        ]);


       

       return redirect()->route('admin_dashboard');



    }



    public function PointStore(Request $request){

       $ex = new ExperiencePoint();

       $ex->home_id = $request->home_id;
       $ex->experience_id = $request->experience_id;
       $ex->p1 = $request->p1;
       $ex->save();

       return redirect()->route('admin_resume_experience_create');


    }
}
