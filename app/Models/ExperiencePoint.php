<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperiencePoint extends Model
{
    use HasFactory;

      public function home(){
        return $this->belongsTo(Home::class,'home_id','id');
    }


    public function experience(){
        return $this->belongsTo(Experience::class,'experience_id','id');
    }
}
