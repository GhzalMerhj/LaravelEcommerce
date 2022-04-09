@extends('user.master')
@push('frontcss')
<style type="text/css">
    input[name="search-btn"]{
        background: seagreen
    }
    input[name="add-cart-btn"]{
        background: #007bff
    }
</style>

@endpush
@section('content')
<div class="right_col" role="main">

    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="{{ route('frontend.products') }}">view all products <i class="fa fa-angle-right"></i></a>

              <form action="{{ route('frontend.search') }}" method="get" class="form-inline" style="float: right ; padding:10px">
                @csrf
                 <input class="form-control" type="search" name="search" placeholder="Search">
                 <input type="submit" class="btn btn-success" value="Search" name="search-btn">
              </form>
            </div>
          </div>
          @foreach($products as $product)

          <div class="col-md-4" style="overflow: hidden">
            <div class="product-item" >
              <a href="#" >
                  <img class="img-responsive"
                src="{{  asset('images/products/'.$product->image)  }}" alt="">
               </a>
              <div class="down-content">
                <a><h4>{{ $product->title }}</h4></a>
                <h6>${{ $product->price }}</h6>
                <p> {{ $product->description }}</p>
                {{--  <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>  --}}


                <form action="{{ route('frontend.addToCart',$product->id) }}" method="post" >
                    @csrf
                  <input type="number" value="1" min="1" name="quantity" class="form-control"
                  style="width: 25%; margin:10px">
                  @if($product->inUserCart())
                  <a class="btn btn-success" style="
                   background-color:#f33f3f !important;
                   border:none !important;
                   color:white;
                   " href="{{ route('frontend.viewCart') }}">
                    Product In Cart  </a>
                    @else
                  <input type="submit" class="btn btn-primary"
                  value="Add To Cart" name="add-cart-btn">
                  @endif
                </form>


              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing"
                target="_parent">This template
            </a> is free to use for your business websites. However,
             you have no permission to redistribute the downloadable ZIP file
             on any template collection website. <a rel="nofollow"
              href="">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{ asset('frontendTemp/assets/images/feature-image.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
