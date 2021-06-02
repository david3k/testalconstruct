<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{-- Base Meta Tags --}}
    {{-- Title --}}
    <title>
        @yield('title', config('testalConstruct.title'))
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>

    <meta name="description" content="Testal Sanierung & Innenausbau Bauunternehmen Polen" />
    <meta name="keywords" content="bauunternehmen,testal,polen,innenausbau,sanierung,dachsanierung,bau,polska" />
    <meta name="robots" content="index">
    <meta name="author" content="Testal-Bau"/>

    {{--CSS--}}
    <link rel="shortcut icon" href="{{ asset(config('testalConstruct.path_img') . 'ftco-32x32.png') }}">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_fonts') . 'icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_fonts').'flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'aos.css') }}">
    <link rel="stylesheet" href="{{asset(config('testalConstruct.path_lib')   .'lightbox/css/lightbox.min.css')}}" >
    <link rel="stylesheet" href="{{asset(config('testalConstruct.path_lib')   .'backtotop/css/style.css')}}" >
    <link rel="stylesheet" href="{{asset(config('testalConstruct.path_lib')   .'fontawesome-free-5.15.2-web/css/all.min.css')}}" >
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_lib'). 'qtyp/jquery.qtip.css') }}" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset(config('testalConstruct.path_css') . 'style.css') }}">

    @yield('custom_css')

</head>

{{-- HTML Body --}}
<body>
<div class="site-wrap" id="home-section">
@yield('body')
    <a href="#" class="cd-top text-replace js-cd-top">Top</a>
</div>
</body>
</html>
<!-- JavaScript Libraries -->
<script src="{{ asset(config('testalConstruct.path_js'). 'jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'popper.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'bootstrap.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'owl.carousel.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'jquery.sticky.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'jquery.waypoints.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'jquery.fancybox.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'jquery.easing.1.3.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_js'). 'aos.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_lib'). 'lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_lib'). 'fontawesome-free-5.15.2-web/js/all.min.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_lib'). 'qtyp/jquery.qtip.js') }}"></script>



<script src="{{ asset(config('testalConstruct.path_lib'). 'backtotop/js/util.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_lib'). 'backtotop/js/main.js') }}"></script>
<script src="{{ asset(config('testalConstruct.path_lib'). 'isotope/isotope.pkgd.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset(config('testalConstruct.path_js'). 'main.js') }}"></script>

<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 30) {
            $('.site-logo img').attr('width',100);
            $('.site-logo img').attr('height',30);
            $('.site-logo h6').hide();
            $('.site-navbar').addClass('p-0');
        } else {
            $('.site-logo img').attr('width',200);
            $('.site-logo img').attr('height',60);
            $('.site-logo h6').show();
            $('.site-navbar').removeClass('p-0');
        }
    });

    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function(){

        $(this).addClass('transition');
    }, function(){

        $(this).removeClass('transition');
    });

    $('#l1').qtip({
        content: 'BADRENOVIERUNG',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        },
    });
    $('#l2').qtip({
        content: 'MALER- UND LACKIERERARBEITEN',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l3').qtip({
        content: 'TROCKENBAU',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l4').qtip({
        content: 'VERPUTZARBEITEN',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l5').qtip({
        content: 'FASSADENBAU',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l6').qtip({
        content: 'DACHDECKEREI',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l7').qtip({
        content: 'BODENVERLEGUNG',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l8').qtip({
        content: 'MONTAGE FENSTER- UND TÜREN',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });
    $('#l9').qtip({
        content: 'ELEKTRO- UND SANITÄRINSTALLATIONEN',
        style: {
            classes: 'qtip-cluetip'
        },
        position: {
            at: 'top right',
        }
    });

    // Navigation active state on scroll
    var nav_sections = $('.service-section');
    var main_nav = $('.sidenav');

    $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop() + 200;

        nav_sections.each(function() {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                if (cur_pos <= bottom) {
                    main_nav.find('a').removeClass('active');
                }
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
            if (cur_pos < 300) {
                $(".nav-menu ul:first li:first").addClass('active');
            }
        });
    });

</script>


