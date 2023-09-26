<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];


    function user(){
        return $this->belongTo(User::class)
 ->withDefault();
   }

}
