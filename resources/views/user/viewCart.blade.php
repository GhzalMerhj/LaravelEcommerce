@extends('user.master')
@section('content')
@push('frontcss')
<style type="text/css">
    th, td {
        padding:20px;
        background-color: #e1e1e1
    }
</style>

@endpush
<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">

          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container">
 <div class="row">
    <div class="col-md-12" align="center" style="margin: 10px">

        @if(session()->has('message'))
        <div class="alert alert-danger">
           <button class="close" data-dismiss="alert" type="button">
           x
           </button>
           {{  session()->get('message') }}
        </div>
        @endif

        <table class="text-center" style=" border: 1px solid black">
            <tr>
                <th> Product Name</th>
                <th> Quantity</th>
                <th> Product Pice </th>
                <th> Total Products Price </th>
                <th> Ation </th>
            </tr>


            <form>
            @foreach($cart as $cart_item)
            <tr style="border_bottom: 1px solid black">
                <td>{{ $cart_item->product->title }}</td>
                <td>{{ $cart_item->quantity }}</td>
                <td>{{ $cart_item->product->price }}</td>
                <td>{{ $cart_item->p_t_price }}</td>
                <td> <a class="btn btn-danger"
                    href="{{ route('frontend.deleteCartItem',$cart_item->id) }}">Delete</a></td>
            </tr>
            @endforeach
            <tr>
               <td>
               <span style="color:red ">Cart Total Price :  </span>
                <b>${{  $cart_total_price }}</b>
               </td>
               <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br>
         @if(count($cart) !== 0)
        <a  href="{{ route('frontend.confirmOrder') }}"
         class="btn" style="background-color: #e1e1e1;">
            <b>Confirm Order </b>

        </a>
        @endif
    </form>

    </div>
 </div>
</div>



@endsection
