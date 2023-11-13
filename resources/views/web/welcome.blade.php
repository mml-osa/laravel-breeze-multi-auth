<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('home/images/apple-favicon.png')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('home/images/favicon.png')}}">

    <title>Welcome - Admissions Checker</title>
    <!-- Bootstrap SeniorHighCoreSubject CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}">

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/responsive.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Strat Header Section -->
<header class="header-two">
    <!-- Header navbar start -->
    <div class="header-navbar header-navbar-two">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-col">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{route('student.dashboard')}}">
                                    <img class="logo-1" src="{{asset('logo.png')}}" alt="">
                                    <img class="logo-2" src="{{asset('logo.png')}}" alt="">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
                                <ul class="nav navbar-nav navbar-right">

                                    @if (Route::has('login'))
                                        @auth
                                            <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Log in</a></li>

                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                        @endauth
                                    @endif
                                    <li><a href="#">|</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Slider Start -->
<section class="main-slider-area slider-area-two">
    <div class="main-container">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            {{--            <ol class="carousel-indicators">--}}
            {{--                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
            {{--                <li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
            {{--                <li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
            {{--            </ol>--}}
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item active slide-1">
                    <div class="carousel-caption">
                        <p data-animation="animated fadeInDown">Admissions Checker</p>
                        <h3 data-animation="animated fadeInUp"> Education For The <span>Creatives</span></h3>
                        <button class="btns" data-animation="animated zoomIn" onclick="event.preventDefault(); document.getElementById('login-form').submit();">Get Started</button>
                        <form id="login-form" action="{{ route('login') }}" method="GET" style="display: none;"></form>
                    </div>
                </div>
                <!-- /.item -->
            </div>
            <!-- /.carousel-inner -->
            <!-- Controls -->
            {{--            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
            {{--                <span class="ion-arrow-left-c root"></span>--}}
            {{--            </a>--}}
            {{--            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
            {{--                <span class="ion-arrow-right-c root"></span>--}}
            {{--            </a>--}}
        </div>
        <!-- /.carousel -->
    </div>
</section>
<!-- Slider End -->


<a href="#" class="scrollup">
    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</a>

<!-- Import Jquery Min Js -->
<script type="text/javascript" src="{{asset('home/js/jquery.min.js')}}"></script>
<!-- Import Bootstrap Min Js -->
<script type="text/javascript" src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- Import Custom JS -->
<script type="text/javascript" src="{{asset('home/js/script.js')}}"></script>

</body>
</html>
