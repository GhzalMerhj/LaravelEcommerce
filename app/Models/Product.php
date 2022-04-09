<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    public $fillable =['title','price','quantity','description','image'];

    public function inUserCart(){
        $auth_user = Auth::user();
        if(! $auth_user)
        return false;
        else{
            $user_id = $auth_user->id;
             $in_cart = Cart::where('product_id',$this->id)
                             ->where('user_id',$user_id)
                             ->where('status',0)
                             ->first();
             if($in_cart)
             return true;
             else
             return false;
        }

    }
}
