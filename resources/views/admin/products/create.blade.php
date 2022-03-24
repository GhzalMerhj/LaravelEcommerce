
@extends('admin.master')
@section('content')
@push('css')
<style type="text/css"> 
    
   </style>
@endpush

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
    
            <form class="forms-sample" action="{{ route('backend.products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group row">
                <label for="title" class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="title" 
                  placeholder="Product Ttile" name="title">
                </div>
              </div>
              <div class="form-group row">
                <label for="price" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="price" 
                  placeholder="Product Price" name="price" >
                </div>
              </div>
              <div class="form-group row">
                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="quantity" placeholder="Product Quantity"
                 name="quantity">
                </div>
              </div>
              <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                  <textarea  class="form-control" id="description" rows="10" 
                  placeholder="Product Description" name="description" >
                    
                  </textarea>
                </div>
              </div>
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
