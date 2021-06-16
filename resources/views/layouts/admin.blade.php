<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Igraonica 1.6</title>
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">    
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Righteous|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
</head>
<body>

<style>
body, html {
    height: 100%;
}
#app {
    background: black;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: left top;
    height: 100%;
}
.main {
    height: 80%;
    align-items:center;
    display:flex;
    justify-content:center;
}
</style>

<!--================================
       1. NAVIGATION AND BANNER
====================================-->
<div id="app">
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
       <a class="navbar-brand" style="color: white; font-family: 'Roboto'; font-size: 25px;" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" width="100" height="60"></a>
     <button class="navbar-toggler" style="color: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="fas fa-bars"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
         @guest
                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: white; font-family: 'Roboto'; font-size: 20px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: white; font-family: 'Roboto'; font-size: 20px;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
       </ul>
     </div>
</nav>

<main class="py-4 main">
            @yield('content')
        </main>

</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

 

</body>
</html>
