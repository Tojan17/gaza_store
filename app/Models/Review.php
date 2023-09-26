<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    function user(){
        return $this->belongTo(User::class)
 ->withDefault();
   }

    function product(){
        return $this->belongTo(Product::class)
 ->withDefault();
   }
}
