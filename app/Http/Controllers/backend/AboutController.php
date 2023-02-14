<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function create($id){
      $about = About::findOrFail($id);

        return view('backend.about.create',compact('about'));
    }

    public function update(Request $request,$id){
      $about = About::findOrFail($id);
       $about->heading = $request->heading;
       $about->description = $request->description;

       $about->desrcription2 = $request->desrcription2;
       $about->website = $request->website;
       $about->phone = $request->phone;
       $about->city = $request->city;
       $about->degree = $request->degree;
       $about->email = $request->email;
       $about->birthday = Carbon::parse($request->birthday)->format('d F Y');
       $about->save();

       return redirect()->route('admin_dashboard');



    }


    public function manage(){

        $about =  About::latest()->get();
        return view('backend.about.manage',compact('about'));
      }
  
}
