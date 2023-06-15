<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Hi Keu!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('hikeu/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('hikeu/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('hikeu/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('hikeu/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('hikeu/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('hikeu/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('hikeu/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('hikeu/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('hikeu/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('hikeu/assets/css/style.css')}}" rel="stylesheet">

  @yield('css_fe')

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('Frontend.Layouts.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->

  @include('Frontend.Layouts.hero')
  
  <!-- End Hero -->

  <main id="main">

   @yield('content')

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- @include('Frontend.Layouts.footer') --}}
  <!-- End Footer -->

  @include('Frontend.Layouts.preloader')

  <!-- Vendor JS Files -->
  <script src="{{asset('hikeu/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('hikeu/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('hikeu/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('hikeu/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('hikeu/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('hikeu/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('hikeu/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('hikeu/assets/js/main.js')}}"></script>

  @yield('script_fe')

</body>

</html>