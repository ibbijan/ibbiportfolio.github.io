<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use App\Models\PortfolioProject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class PortfolioProjectController extends Controller
{
    //
    public function create(){
        return view('backend.portfolio_project.create');
    }
    
    public function store(Request $request)
    {
       

        if ($request->hasFile('project_image')) {
            $file = $request->file('project_image');
            $product_name = date('YmdHi').'.'.$file->getClientOriginalExtension();
           $product_image = Image::make($file)->resize(800,600)->save(public_path('backend/project_image/'.$product_name,80));
            
         }
        

       $product_id = PortfolioProject::insertGetId([
            'portfolio_category_id' => $request->portfolio_category_id,
            'project_image' => $product_name,
            'client_name' => $request->client_name,
            'project_date' => Carbon::parse($request->project_date)->format('d F Y') ,
            'project_url' => $request->project_url,
            'project_heading' => $request->project_heading,
            'project_description' => $request->project_description,

            'created_at' => Carbon::now(),


        ]);


      
            $images = $request->file('multiImage');

            foreach ($images as $img) {
                
                $name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                $product_image = Image::make($img)->resize(800,600)->save(public_path('backend/project_image/multi_images/'.$name, 80));

                MultiImage::insert([

                    'portfolio_project_id' => $product_id,
                    'multiImage' => $name,
                    'created_at' => Carbon::now(),


                ]);

            }

            $notification = array(
                'message' => 'Product Is Added Successfully.',
                'alert-type' => 'success'
             );
     


         
       

         return redirect()->back();

      
    }

}
