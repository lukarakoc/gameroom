<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="igraonica 1.6, igraonica, 1.6">
    <meta name="description" content="igraonica, igraonica 1.6, igraonica1.6, 1.6">
    <title>Igraonica 1.6</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}" />
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!--Swiper JS Stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!--Font Awesome Stylesheet-->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">--}}
    <!-- flat icon  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!--Venobox Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/venobox.css')}}">
    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    {{--    Font Aweseome CDN --}}


    <!--Modanizr JS-->
    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
</head>

<body class="body-class index_1 home1">
<!--Start Preloader-->
<div class="site-preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--End Preloader-->

<!--Start Body Wrap-->

<!--========================================
1. NAVIGATION
============================================-->
<!--Start Header-->
<header id="mainHeader" class="header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo-dark" src="{{asset('assets/img/logo.png')}}" alt="">
                <img class="logo-light" src="{{asset('assets/img/logo.png')}}" alt="" width="20%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="navbarDropdown2">Početna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ab-link" href="#onama">O Nama</a>
                    </li>
                    <li class="nav-item" style="">
                        <a class="nav-link" href="#rez">Rezervacija</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Novosti</a>
                    </li>
                    <li class="nav-item" style="">
                        <a class="nav-link" href="#turniri">Turniri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link con-link" href="#kontakt">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>
</header>
<!--End Header-->

@yield('content')


<!--Start Footer Bottom-->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-text">
                    <p class="color-white">Copyright &copy; 2019 All Rights Reserved. Created and Developed by
                        Aleksandar Milakovic | Luka Rakocevic</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Footer Bottom-->

<!--Start ClickToTop-->
<div class="totop">
    <a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>
<!--End ClickToTop-->
</footer>
<!--End Footer-->

</div>
<!--End Body Wrap-->

<!--jQuery JS-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--Bootstrap JS-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--Isotope JS-->
<script src="{{asset('assets/js/isotope.min.js')}}"></script>
<!--Image Loded JS-->
<script src="{{asset('assets/js/images-loded.min.js')}}"></script>
<!--Owl Carousel JS-->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!--coundown timer JS-->
<script src="{{asset('assets/js/countdown-timer.js')}}"></script>
<!-- Venobox JS-->
<script src="{{asset('assets/js/venobox.min.js')}}"></script>
<!--Main-->
<script src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/swiper.min.js')}}"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 60,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>

</body>
@include('modals.successModal')
@include('modals.errorModal')
</html>
