<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SEO;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    //

    public function AdminDashboard(){

        return view('backend.index');

    }

    public function AdminLogout(){

        Auth::guard('web')->logout();

      

        return redirect()->route('login');
    }



    public function AdminProfile(){

       $admin = Auth::guard('web')->user();

       return view('auth.profile.profile_view',compact('admin'));

    }


    public function AdminEdit($id){
      $admin =  User::findOrFail($id);
      return view('auth.profile.profile_edit',compact('admin'));
    }

    public function AdminUpdate(Request $request,$id){

      $admin =  User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;

        if($request->hasFile('image')){
            
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(170,170)->save(public_path('backend/image/'.$name_gen, 250));
            // $location = 'backend/brand_images'.$name_gen;
            $admin->image = $name_gen;
        }else{
            $admin->image = $request->old_image;
        }
        
        
           $admin->save();
        
       

        // Auth::guard('web')->logout();

      

        return redirect()->back();


    }


    public function AdminPassword($id){
      $admin = User::findOrFail($id);
      return view('auth.profile.change_password',compact('admin'));

    }

    

    
public function AdminPasswordUpdate(Request $request,$id){

    $request->validate([
        'old_password' => 'required',
        'password' => 'required|confirmed',

    ]);
    

    $hash_password =  User::findOrFail($id)->password;

    if (Hash::check($request->old_password , $hash_password)) {

       $admin = User::findOrFail($id);
       $admin->password = Hash::make($request->password) ;
       $admin->save();

       Auth::guard('web')->logout();
       
       return redirect()->route('login');
      
    }else{

        $notification = array(
            'message' => 'Your Current Password Is Incorrect.',
            'alert-type' => 'error',
        );

        return redirect()->back()->with($notification);
    }
}


    public function manage(){
       $home = SEO::findOrFail(1);
       return view('backend.seo.manage',compact('home'));
    }



    public function update(Request $request,$id){
        $home = SEO::findOrFail($id);
        $home->title = $request->title;
         $home->keywords = $request->keywords;
         $home->description = $request->description;
         $home->google_analytics = $request->google_analytics;
        
    
    
        if($request->hasFile('icon')){
          
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            // Image::make($image)->resize(300,300)->save('backend/brand_images'.$name_gen);
            Image::make($image)->resize(1920,1280)->save(public_path('backend/icons/'.$name_gen, 250));
            // $location = 'backend/brand_images'.$name_gen;
            $home->icon = $name_gen;
        }else{
            $home->icon = $request->old_icons;
        }

        $home->save();

        return redirect()->back();
  
    }
}
