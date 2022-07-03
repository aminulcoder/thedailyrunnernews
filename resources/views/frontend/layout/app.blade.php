<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!------font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- silk slider cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/singlepost.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/categorypost.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/responsive.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <title>Thedailyrunnernews</title>
    @yield('OG')

    @stack('style')

</head>

<body>
    <!-- top bar section start -->
    @include('frontend.layout.topbar')
    <!-- top bar section end -->


    <!-- Menu-body section-start -->
    @include('frontend.layout.menu')
    <!-- Menu-body section-end -->

    <!-- maeque section start -->
    @include('frontend.layout.marque')

    <!-- Menu-body section-start -->

    @yield('content')


    <!-- Menu-body section-end -->


    <!-- footer area content start -->
    @include('frontend.layout.footer')
    <!-- footer area content end -->

    {{-- https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js --}}
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- silk slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend/asset/js/script.js') }}"></script>

    <script>
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '<i class="fa-solid fa-arrow-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    </script>

    @stack('script')
</body>

</html>
