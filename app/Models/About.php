<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    public function home(){
        return $this->belongsTo(Home::class,'home_id','id');
    }
}
