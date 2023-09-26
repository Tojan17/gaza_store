<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Image;
use App\Models\Review;
use App\Models\Category;
use App\Models\OrderDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    function image()
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'main');
    }

    function gallery()
    {
        return $this->morphMany(Image::class, 'imageable')->where('type', 'gallery');
    }

    function reviews(){
        return $this->hasMany(Review::class);
    }

    function carts(){
        return $this->hasMany(Cart::class);
    }

    function order_details(){
        return $this->hasMany(OrderDetails::class);
    }

}
