<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> Ecommerce Website </title>



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontendTemp/assets/css/fontawesome.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontendTemp/assets/css/templatemo-sixteen.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontendTemp/assets/css/owl.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontendTemp/vendor/bootstrap/css/bootstrap.min.css')  }}"
    rel="stylesheet">
    @stack('frontcss')
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    {{--  start including the  Header blade file  --}}
    @include('user/includes/header')

    {{--  end  including the  Header blade file  --}}

    <!-- Page Content -->
        @yield('content')
    <!-- /page content -->



   {{--  start including footer blade  --}}
   @include('user/includes/footer')
   {{--  end including footer blade  --}}

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('frontendTemp/vendor/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('frontendTemp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('frontendTemp/assets/js/custom.js') }}"></script>
    <script src="{{ asset('frontendTemp/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontendTemp/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontendTemp/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontendTemp/assets/js/accordions.js') }}"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

    @stack('frontjs')

  </body>

</html>
