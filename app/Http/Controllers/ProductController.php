<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('admin.products.index',compact(['products',$products]));
    }
    public function create (){
        return view('admin.products.create');
    }
    public function store(Request $request){
        $product = Product::create($request->all());
        if($request->file('image')){
            $image = $request->file('image')->getClientOriginalExtension();
            $image_name = time().'.'.$image;
            $request->file('image')->move('images/products',$image_name);
            $product['image'] = $image_name;
            $product->save();
        }  
        return redirect()->route('backend.products')->with('message','product created successfuly');
    }

    public function delete($id)
    {
       $product_item = Product::find($id);
       $product_item->delete();
       return redirect()->back()->with('message','product deleted');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact(['product',$product]));
    }
   
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product_image = $product->image;
        if($request->file('image')){
            $image = $request->file('image')->getClientOriginalExtension();
            $image_name = time().'.'.$image;
            $request->file('image')->move('images/products',$image_name);
            $product_image = $image_name;
        } 
        $product->update($request->all());
        $product->image = $product_image; 
        $product->save();

        return redirect()->route('backend.products')->with('message','product updated successfuly');
    
    }
}
