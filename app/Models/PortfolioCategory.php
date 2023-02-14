<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PortfolioCategory extends Model
{
    use HasFactory;

    public function create(){
        return view('backend.portfolio_category.create');
    }

    public function store(Request $request){
      $cat =  new PortfolioCategory();
      $cat->category_name = $request->category_name;
      $cat->save();

      return redirect()->back();
    }
}
