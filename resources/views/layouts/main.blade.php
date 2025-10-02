<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Trucking')</title>
    <meta name="description"
          content="@yield('description', 'Trucking is transportation and Logistics website template')">
    <meta name="author" content="pixel-industry">
    <meta name="keywords"
          content="transportation, logistics, transportation template, logistics template, cargo, business">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('masterslider/style/masterslider.css')}}"/>
    <link rel="stylesheet" href="{{asset('masterslider/skins/default/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel='stylesheet' href='{{asset('owl-carousel/owl.carousel.css')}}'/>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/color-blue.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/retina.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>

    @stack('styles')

    <!-- Google Web fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600'
          rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="{{ asset('icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css') }}"/>

    @stack('styles') {{-- sayfa bazlı ekstra css eklemek için --}}
</head>
<body style="position: relative;">
{{-- header --}}
@include('partials.header')

{{-- content --}}

@yield('content')


{{-- footer --}}
@include('partials.footer')

<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script><!-- jQuery library -->
<script src="{{asset('js/bootstrap.min.js')}}"></script><!-- .bootstrap script -->
<script src="{{asset('js/jquery.srcipts.min.js')}}"></script><!-- modernizr, retina, stellar for parallax -->
<script src="{{asset('owl-carousel/owl.carousel.min.js')}}"></script><!-- Carousels script -->
<script src="{{asset('masterslider/masterslider.min.js')}}"></script><!-- Master slider main js -->
<script src="{{asset('js/jquery.matchHeight-min.js')}}"></script><!-- for columns with background image -->
<script src="{{asset('js/jquery.dlmenu.min.js')}}"></script><!-- for responsive menu -->
<script src="{{asset('js/include.js')}}"></script><!-- custom js functions -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> <!-- google maps -->
<script src="js/jquery.ui.map.full.min.js"></script><!-- google maps -->
<script>
    /* <![CDATA[ */
    $(document).ready(function () {

        'use strict';

        function equalHeight() {
            $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                var maxHeight = $(this).outerHeight();
                $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
            });
        }

        $(document).ready(equalHeight);
        $(window).resize(equalHeight);

        // MASTER SLIDER START
        var slider = new MasterSlider();
        slider.setup('masterslider', {
            width: 1140, // slider standard width
            height: 854, // slider standard height
            space: 0,
            speed: 50,
            layout: "fullwidth",
            centerControls: false,
            loop: true,
            autoplay: true
            // more slider options goes here...
            // check slider options section in documentation for more options.
        });
        // adds Arrows navigation control to the slider.
        slider.control('arrows');

        // CLIENTS CAROUSEL START
        $('#client-carousel').owlCarousel({
            items: 6,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                600: {
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true
                }
            }
        });

        // TESTIMONIAL CAROUSELS START
        $('#testimonial-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: false,
            autoheight: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    autoHeight: true
                },
                600: {
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    autoHeight: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true,
                    autoHeight: true
                }
            }
        });
    });
    /* ]]> */
</script>
@stack('scripts') {{-- sayfa bazlı js eklemek için --}}
</body>
</html>
