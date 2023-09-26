<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\OrderDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


    function user(){
        return $this->belongTo(User::class)
 ->withDefault();
   }

   function order_details(){
    return $this->hasMany(OrderDetails::class);
}

   function payment(){
    return $this->hasOne(Payment::class);
}


}
