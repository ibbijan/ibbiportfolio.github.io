<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function create(){
        return view('backend.service.create');
    }

    public function store(Request $request){

      $service =  new Service();
      $service->heading = $request->heading;
      $service->icons = $request->icons;
      $service->description = $request->description;
      $service->home_id = $request->home_id;

      $service->save();

      return redirect()->back();


    }
}
