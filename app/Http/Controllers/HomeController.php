<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use DateTime;
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
            $user = auth()->user();
            $item_nums = $user->cartProductsNum();
            return view('user.home',
            compact( 'products',
                     'item_nums'
            ));
        }
    }
    public function index(){
         if(Auth::id())
         {
            return redirect('redirect');
         }
        else{
             $products = Product::all();
            // $user = auth()->user();
            // $item_nums = $user->cartProducts();
             return view('user.home',compact('products'));
        }
    }
    public function about(){
         if(Auth::user() && Auth::user()->usertype !== '1'){
            $user = Auth::user() ;
            $item_nums = $user->cartProductsNum();

            return view('user.about',compact('item_nums'));
         }
        return view('user.about');

    }
    public function products(){
        if(Auth::user() && Auth::user()->usertype !== '1'){
            $user = Auth::user() ;
            $item_nums = $user->cartProductsNum();

            return view('user.products',compact('item_nums'));
         }
        return view('user.products');
    }

    public function contact(){
        if(Auth::user() && Auth::user()->usertype !== '1'){
            $user = Auth::user() ;
            $item_nums = $user->cartProductsNum();

            return view('user.contact',compact('item_nums'));
         }
        return view('user.contact');

    }
    public function search(Request $request){
        $search = $request->search;
        $products = Product::where('title','like','%'.$search.'%')->get();
        return view('user.home',compact(['products',$products]));
    }
    public function addToCart(Request $request, $id){
        if(!Auth::user())
        {
           return redirect('login');
        }
       else{
           $user = Auth::user();
           $product_price = Product::find($id)->price;

           $cart = Cart::create([
              'user_id' => $user->id,
              'product_id'=> $id,
              'quantity' => $request->quantity,
              'p_t_price' => $product_price * $request->quantity,
              'status' => 0
           ]);
           return redirect()->back();
       }
    }
    public function viewCart(){
        $user = Auth::user();
        $cart = $user->cart->where('status',0);
        $item_nums = $user->cartProductsNum();
        $cart_total_price = $user->cartTotalPrice();
        return view('user.viewCart',compact('cart','item_nums','cart_total_price'));
    }
    public function deleteCartItem($id){
        $cart_item = Cart::find($id);
        $cart_item->delete();
        return redirect()->back()->with('message','Item Removed successfuly');
    }

    public function confirmOrder(){
        $user = Auth::user();

        $cart_items = $user->cart->where('status',0);
        $cart_total_price = $user->cartTotalPrice();

        $dt = new DateTime();
        //create order record ['user_id','status','date', 'order_total']
        //update last cart items to be confirmed in status field value == 1
        $order_data = [
            'user_id'=> $user->id,
            'status' => 'not deleviered yet',
            'date' => $dt->format('Y-m-d H:i:s'),
            'order_total' => $cart_total_price
        ];
        $order = Order::create($order_data);
         //create OrderCart recordes for each product in the cart with previous order id ['cart_id']
        foreach($cart_items as $cart_item){
            $orderCart = $order->orderCarts()->create([
                'cart_id' => $cart_item->id
            ]);
            $cart_item->status = 1;
            $cart_item->save();
        }

        return redirect()->back()->with('message','Order Confirmed Successfully');;


    }



    public function testTest(){
        $user = Auth::user();
        $var = [];
        $num =0;

        $cart_items = $user->cart->where('status',0);
        foreach($cart_items as $cart_item){

         // $num += $cart_item->quantity;
         // array_push($var,$cart_item);
        }
        return $num;


        $user = Auth::user();
        $user_id = $user->id;
        $product_id = Product::where('id',3)->first();
        return $product_id->inUserCart();

        $in_cart = Cart::where('product_id',$product_id)->where('user_id',$user_id)->first();
        return $in_cart;

    }
}
