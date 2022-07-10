<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('vendor/landing/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/landing/css/aos.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/landing/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/landing/css/main.css') }}" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


    <title>Our Blog | {{ $title }}</title>
  </head>
  <body>
    @include('partials.navbar')

      @yield('container')

    @include('partials.footer')
    <script src="{{ asset('vendor/landing/js/bootstrap.min.js') }}"></script><!-- Bootstrap framework -->
    <script src="{{ asset('vendor/landing/js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('vendor/landing/js/swiper.min.js') }}"></script><!-- Swiper for image and text sliders -->
    <script src="{{ asset('vendor/landing/js/aos.js') }}"></script><!-- AOS on Animation Scroll -->
    <script src="{{ asset('vendor/landing/js/script.js') }}"></script>  <!-- Custom scripts -->

  </body>
</html>