<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header--><a href="index.html" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">1.6</strong><strong>Admin</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">1.6</strong><strong>A</strong>
                        </div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                </div>
                <div class="right-menu list-inline no-margin-bottom">
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="content"><strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="content"><strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="content"><strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="content"><strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div>
                            </a><a href="#" class="dropdown-item text-center message"> <strong>Više <i class="fa fa-angle-right"></i></strong></a></div>
                    </div>
                    <!-- Log out-->
                    <div class="list-inline-item logout"><a id="logout" class='nav-link' href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                            <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">

                <div class="title">
                    <h1 class="h5">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Meni</span>
            <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Po&ccaron;etna </a></li>
                <li><a href="blog.html"><i class="fa fa-copy"></i>Blog </a></li>
                <li><a href="addBlog.html"> <i class="fa fa-edit"></i>Dodaj/ Uredi Blog </a></li>
                <li><a href="tournaments.html"> <i class="fa fa-gamepad"></i>Turniri </a></li>
                <li><a href="addTournaments.html"> <i class="fa fa-edit"></i>Dodaj/ Uredi Turnir </a></li>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dobrodošli</h2>
                </div>
            </div>

            @yield('content')
        </div>

        <footer class="footer">
            <div class="footer__block block no-margin-bottom">
                <div class="container-fluid text-center">
                    <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    <p class="no-margin-bottom">2019 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/charts-home.js')}}"></script>
    <script src="{{asset('assets/js/front.js')}}"></script>
</body>

</html>