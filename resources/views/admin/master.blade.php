<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backendTemp/assets/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('backendTemp/assets/css/bootstrap.min.css') }}" />

    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backendTemp/assets/css/myStyle.css') }}" />
    @stack('backendcss')
  </head>
  <body>
    <div class="container-scroller">
     {{-- start  sidebar   --}}
     @include('admin.includes.sidebar')
     {{--  end sidebar  --}}

     @include('admin.includes.navbar')
     <div class="container-fluid page-body-wrapper">
     @yield('content')
     </div>
    </div>
     {{--  start including jquery and bootstrap   --}}
     <script src="{{ asset('backendTemp/assets/js/jquery-3.6.0.min.js') }}" ></script>
     <script src="{{ asset('backendTemp/assets/js/bootstrap.min.js') }}" ></script>
     {{--  end including jquery and bootstrap   --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backendTemp/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backendTemp/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>



    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backendTemp/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/js/misc.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/js/settings.js') }}"></script>
    <script src="{{ asset('backendTemp/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backendTemp/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>

