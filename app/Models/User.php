<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function cartProductsNum(){
        $product_total_num = 0;
        $cart_item_num = count($this->cart);
        if($cart_item_num){
            for($i =0 ; $i< $cart_item_num; $i ++){
              $product_total_num += $this->cart[$i]->quantity;
            }
        }
        return $product_total_num;

    }
    public function cartTotalPrice(){
          $product_total_price = 0;
          $cart_item_num = count($this->cart);
          if($cart_item_num){
            for($i =0 ; $i< $cart_item_num; $i ++){
               if($this->cart[$i]->status == 0)
               $product_total_price += $this->cart[$i]->p_t_price;
            }
        }
        return $product_total_price;
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function lastOrder(){
        return $this->hasMany(Order::class)->get();
    }
}
//
// $cart->map( function ($cart_item ) use ($product_total_num) {
//     return $product_total_num += $cart_item->quantity;
// });
