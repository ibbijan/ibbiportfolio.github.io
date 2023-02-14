<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use App\Models\PortfolioProject;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
        return view('frontend.index');
    }


    public function PortfolioProjectDetail($id){

      $project =  PortfolioProject::findOrFail($id);
      $multi = MultiImage::where('portfolio_project_id',$id)->latest()->get();

      return view('frontend.content.project_detail',compact('project','multi'));

    }
}
