<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cart;
use App\Models\Role;
use App\Models\Image;
use App\Models\Order;
use App\Models\Review;
use App\Models\Testimonial;
use App\Models\OrderDetails;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    function role(){
        return $this->belongTo(Role::class)
 ->withDefault();
   }

   function image(){
    return $this->morphOne(Image::class, 'imageable');
   }


   function reviews(){
    return $this->hasMany(Review::class);
}

   function carts(){
    return $this->hasMany(Cart::class);
}

   function orders(){
    return $this->hasMany(Order::class);
}

function order_details(){
    return $this->hasMany(OrderDetails::class);
}

function payment(){
    return $this->hasMany(Payment::class);
}

function testimonials(){
    return $this->hasMany(Testimonial::class);
}

}
