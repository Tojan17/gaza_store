<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetails extends Model
{
    use HasFactory;

    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    function product(){
        return $this->belongsTo(Product::class)->withDefault();
    }

    function order(){
        return $this->belongsTo(Order::class)->withDefault();
    }
}
