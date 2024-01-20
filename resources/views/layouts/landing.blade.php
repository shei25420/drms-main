<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>{{ env('APP_NAME') }}</title>
    <!-- shortcut icon-->
    <link rel="shortcut icon" href="{{ asset(Storage::url('upload/logo')) . '/favicon.png' }}" type="image/x-icon">
    <!-- Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font awesome -->
    <link href="{{ asset('assets/css/vendor/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor/icoicon/icoicon.css') }}" rel="stylesheet">
    <!-- animat css-->
    <link href="{{ asset('assets/css/vendor/animate.css') }}" rel="stylesheet">
    <!-- Bootstrap css-->
    <link href="{{ asset('assets/css/vendor/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom css-->

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header start-->
    @include("home.header")
    
    <!-- intro start-->
    @include("home.intro")
    
    <!-- features start-->
    @include('home.features')

    <!-- access banner 1 start-->
    @include('home.access_banner_1')

    <!-- access banner 2 start-->
    @include('home.access_banner_2')

    <!-- Pricing Section -->
    @include('home.pricing')

    <!-- Call to Action (CTA) Section -->
    @include('home.cta')

    <!-- Contact Section -->
    @include('home.contact')

    <!-- footer start-->
    @include('home.footer')

    <!-- footer end-->
    <!-- tap to top start-->
    <div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
    <!-- tap to top end-->
    <!-- main jquery-->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- Feather iocns js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.js') }}"></script>
    <!-- Wow js-->
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script>
        //*** Header Js ***//
        $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
                $('header').addClass('sticky');
            } else {
                $('header').removeClass('sticky');
            }
        });

        //*** Menu Js ***//
        $(document).on("click", '.menu-action', function() {
            $('.menu-list').toggleClass('open');
        });
        $(document).on("click", '.close-menu', function() {
            $('.menu-list').removeClass('open');
        });

        //*** BACK TO TOP START ***//
        $(window).scroll(function() {
            if ($(window).scrollTop() > 450) {
                $('.scroll-top').addClass('show');
            } else {
                $('.scroll-top').removeClass('show');
            }
        });
        $(document).ready(function() {
            $(document).on("click", '.scroll-top', function() {
                $('html, body').animate({
                    scrollTop: 0
                }, '450');
            });
        });

        //*** WOW Js ***//
        new WOW().init();
    </script>
</body>

</html>
