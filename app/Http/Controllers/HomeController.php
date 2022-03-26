<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            $products = Product::all();
            return view('user.home',compact(['products',$products]));
        }
    }
    public function index(){
         if(Auth::id())
         {
            return redirect('redirect');
         }
        else{
             $products = Product::all();
             return view('user.home',compact(['products',$products]));
        }
    }
    public function about(){
        return view('user.about');
    }
    public function products(){
        return view('user.products');
    }
    public function contact(){
        return view('user.contact');
    }
    public function search(Request $request){
        $search = $request->search;
        $products = Product::where('title','like','%'.$search.'%')->get();
        return view('user.home',compact(['products',$products]));
    }
    public function addToCart(){

    }
    public function myCart(){
        $usertype = Auth::user()->usertype;
        return var_dump($usertype );
    }
}
