<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    //
    public function create(){

        return view('backend.home.create');
    }

    public function store(Request $request)
    {
       $home = new Home();
       $home->name = $request->name;
       $home->skills = $request->skills;
       $home->facebook = $request->facebook;
       $home->instagram = $request->instagram;
       $home->twitter = $request->twitter;


       if ($request->hasFile('home_image')) {
        $file = $request->file('home_image');
        $name = date('YmdHi').'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(1920,1280)->save(public_path('backend/home_image/'.$name, 250));
        $home['home_image'] = $name;
     }

     
     if ($request->hasFile('profile_image')) {
      $file = $request->file('profile_image');
      $name =date('YmdHi').'.'.$file->getClientOriginalExtension();
      Image::make($file)->resize(600,600)->save(public_path('backend/profile_image/'.$name, 250));
      $home['profile_image'] = $name;
   }
     $home->save();
    

     return redirect()->route('admin_home_manage');

    }



    public function manage(){

      $home =  Home::latest()->get();
      return view('backend.home.manage',compact('home'));
    }


    public function edit($id){
     $home = Home::findOrFail($id);
     return view('backend.home.edit',compact('home'));
    }



    public function update(Request $request,$id){
      $home = Home::findOrFail($id);
      $home->name = $request->name;
       $home->skills = $request->skills;
       $home->facebook = $request->facebook;
       $home->instagram = $request->instagram;
       $home->twitter = $request->twitter;
  
  
      if($request->hasFile('home_image')){
        //   $old_home_image = $request->old_home_image;
        //   $location = public_path('backend/home_image/').$old_home_image;
        //   unlink($location);
          $image = $request->file('home_image');
          $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          // Image::make($image)->resize(300,300)->save('backend/brand_images'.$name_gen);
          Image::make($image)->resize(1920,1280)->save(public_path('backend/home_image/'.$name_gen, 250));
          // $location = 'backend/brand_images'.$name_gen;
          $home->home_image = $name_gen;
      }else{
          $home->home_image = $request->old_home_image;
      }


      if($request->hasFile('profile_image')){
        // $old_profile_image = $request->old_profile_image;
        // $location = public_path('backend/profile_image/').$old_profile_image;
        // unlink($location);
        $image = $request->file('profile_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        // Image::make($image)->resize(300,300)->save('backend/brand_images'.$name_gen);
        Image::make($image)->resize(600,600)->save(public_path('backend/profile_image/'.$name_gen, 250));
        // $location = 'backend/brand_images'.$name_gen;
        $home->profile_image = $name_gen;
    }else{
        $home->profile_image = $request->old_profile_image;
    }

    $home->save();

    return redirect()->route('admin_home_manage');
     
    }



    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $old_home_image = $home->home_image;
        $location = public_path('backend/home_image/').$old_home_image;
        unlink($location);

         $old_profile_image = $home->profile_image;
        $location = public_path('backend/profile_image/').$old_profile_image;
        unlink($location);
        $home->delete();

      
        return redirect()->route('admin_home_manage');
    
        
    }
}
