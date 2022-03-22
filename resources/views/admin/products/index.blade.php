
@extends('admin.master')
@section('content')
@push('css')
   <style type="text/css">
    .message-div{
        margin-bottom: 10px;
        margin-top: 10px;
        width: 50%;
    }
    .message-div button  {
    background-color: #fc424a;
    border: 1px solid #fc424a;
    }
   </style> 
@endpush
<div class="container">
    <div class="row">
        {{--  <h1  class="col-lg-12" >  --}}
            <div class="col-md-12  text-right">
                    {{--  style="float: right"  --}}
             <a class="btn btn-primary" href="{{ route('backend.products.create') }}" > add product </a>
            </div>

        {{--  </h1>  --}}
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success message-div">
         {{--  <button type="button" class="close" data-dismiss="alert">x</button>  --}}
    {{ session()->get('message') }}
    </div>
   
    @endif

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Products </h4>
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Price.</th>
                      <th>Quantity</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($products as $product)
                     <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            @if($product->image)
                            <img src="{{  asset('images/products/'.$product->image) }}">
                            @else
                             ---
                            @endif
                        </td>
                       <td>
                           <a class="btn btn-danger">delete</a>
                           <a class="btn btn-success">edit</a>
                       </td>
                      </tr>
                     @endforeach 
                  
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         </div>
      </div>

</div>



@endsection
