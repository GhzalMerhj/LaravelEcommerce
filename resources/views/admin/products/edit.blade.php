
@extends('admin.master')
@section('content')
@push('css')
<style type="text/css"> 
    input{
       color: white
    }
   
   </style>
@endpush



<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <form class="forms-sample" action="{{ route('backend.products.edit',$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="title" value="{{ $product->title }}"
              placeholder="Product Ttile" name="title" style="color:white">
            </div>
          </div>
          <div class="form-group row">
            <label for="price" class="col-sm-3 col-form-label">Price</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="price" value="{{ $product->price }}"
              placeholder="Product Price" name="price" style="color:white">
            </div>
          </div>
          <div class="form-group row">
            <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" value="{{ $product->quantity }}"
              id="quantity" placeholder="Product Quantity"
               style="color:white" name="quantity">
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-9">
              <textarea  class="form-control" id="description" rows="10" 
              placeholder="Product Description" name="description" style="color:white">
             {{ $product->description }}
              </textarea>
            </div>
          </div>
          @if($product->image != null)
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Product Image</label>
            <div class="col-sm-9">
             <img src="/images/products/{{ $product->image }}">
            </div>
          </div>
          @endif
          <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="image" name="image">
              
            </div>
          </div>
        
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>


  @endsection
