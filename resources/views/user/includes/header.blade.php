 <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('frontend.index') }}">
              <h2>Sixteen <em>Clothing</em> </h2>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('frontend.index') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.products') }}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.contact') }}">Contact Us</a>
              </li>

                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.viewCart') }}">
                        <i class="fa fa-shopping-cart"></i>
                        Cart {{ $item_nums }}
                    </a>
                  </li>

                <li class="AuthMenu">
                    <x-app-layout >

                    </x-app-layout>
                </li>


                @else
                 <li class="nav-item">
                     <a href="{{ route('login') }}"
                     class="nav-link">
                     Log in
                    </a>
                 </li>

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}"
                        class="nav-link">
                        Register</a>
                      </li>

                     @endif
                @endauth

                @endif




            </ul>
          </div>
        </div>
      </nav>
    </header>
