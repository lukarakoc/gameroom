<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Igraonica 1.6</title>
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
</head>
<body>

<!--================================
       1. NAVIGATION AND BANNER
====================================-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" style="color: white; font-family: 'Roboto'; font-size: 25px;" href="#"><img src="assets/images/logo.png" alt="" width="100" height="60"></a>
    <button class="navbar-toggler" style="color: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#">Početna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#about">O Nama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#news">Novosti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#news">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#tour">Turniri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#rez">Rezervacija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white; font-family: 'Kanit'; font-size: 20px;" href="#contact">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<!--================================
       10.FOOTER
====================================-->

<footer class="ftco-footer" id="contact">
    <div class="container">

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="footer-widget">
                    <img src="assets/images/logo.png" alt="">
                    <p>Vrhunska gejmerska oprema, ambijent i kolektiv. Prava atmosfera za ljubitelje gejminga. Cekamo Vas!</p>
                </div>
            </div>
            <div class="foot-tm col-md-4">
                <div class="footer-widget">
                    <h3 class="mb-4">Radno Vrijeme</h3>
                    <p>Pon - Ned od 12 - 00 h</p>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="footer-widget">
                    <h3>Zapratite</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://www.facebook.com/igraonica1.6/"><span class="fab fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/1.6igraonica/"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="foot-cop row">
            <div class="col-md-12 text-center">
                <p>&copy; Copyright 2019. All Rights Reserved.  Designed &amp; Developed by Aleksandar Milaković | Luka Rakočević</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

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
            slideShadows : true,
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

