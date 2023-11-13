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

    <title>Contact Us - Admissions Checker</title>
    <!-- Bootstrap SeniorHighCoreSubject CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}">

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/responsive.css')}}">

    <!-- Color Switcher css -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('home/css/color-switcher.css')}}">--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Strat Header Section -->
<header class="edu-herader">
    <!-- Header top start -->
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 full-wd-600">
                    <div class="header-topbar-col center767">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone"></i></li>
                            <li><a href="#">+123 012 034 056</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 full-wd-600">
                    <div class="header-topbar-col center767">
                        <ul class="list-inline">
                            <li><i class="fa fa-envelope-o"></i></li>
                            <li><a href="#">support@admissionschecker.com</a></li>
                        </ul>
                        <p class="res-mb-10">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top end -->

    <!-- Header navbar start -->
    <div class="header-navbar" id="navbar-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('home/images/logo/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
                             data-animations="fadeInUp">
                            <ul class="nav navbar-nav navbar-right">
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
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
</header>
<!-- End Header Section -->

{{--<!-- Strat Banner Section -->--}}
{{--<div class="edu-map">--}}
{{--    <div id="map"></div>--}}
{{--</div>--}}
{{--<!-- End Banner Section -->--}}

<!-- Strat Contact Form -->
<div class="edu-contacts">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h2>Get In Touch</h2>

                <form id="ajax-contact" class="contact-from" action="#" method="post">
                    <div class="input-field col-sm-6">
                        <input class="set-input validate" name="name" placeholder="First Name" id="name" type="text">
                    </div>
                    <div class="input-field col-sm-6">
                        <input class="set-input validate" name="last_name" placeholder="Last Name" id="last_name" type="text">
                    </div>
                    <div class="input-field col-sm-6">
                        <input class="set-input validate" name="phone" placeholder="Phone" id="phone" type="text">
                    </div>
                    <div class="input-field col-sm-6">
                        <input class="set-input validate" name="email" placeholder="Email" id="email" type="text">
                    </div>
                    <div class="input-field col-sm-12">
                        <input class="set-input validate" name="subject" placeholder="Subject" id="subject" type="text">
                    </div>
                    <div class="input-field col-sm-12">
                        <textarea class="set-input-textarea" id="message" name="message" placeholder="Write Here" rows="7"></textarea>
                    </div>

                    <div class="input-field col-sm-12">
                        <button class="btn more-link" id="send">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-4">
                <h2>Contact</h2>

                <div class="address">
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-phone"></i>+233 0123 4567</li>
                        <li><i class="fa-li fa fa-mobile"></i>+233 0123 4567</li>
                        <li><i class="fa-li fa fa-envelope-o"></i>support@admissionschecker.com</li>
                        <li><i class="fa-li fa fa-map-marker"></i>http://admissionschecker.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form -->

<!-- Strat Partners Section -->
<section class="partners-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="text-center mar-btm-50">
                    <div class="sec-title">
                        <h2>Our Partners</h2>
{{--                        <p>Deserunt quia ducimus ut illum optio cum eum voluptate <br> corrupti numquam.</p>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="partenr">
                <div class="item"><img src="{{asset('home/images/partner/1.png')}}" alt="Partenr Images"></div>
                <div class="item"><img src="{{asset('home/images/partner/2.png')}}" alt="Partenr Images"></div>
                <div class="item"><img src="{{asset('home/images/partner/3.png')}}" alt="Partenr Images"></div>
                <div class="item"><img src="{{asset('home/images/partner/4.png')}}" alt="Partenr Images"></div>
                <div class="item"><img src="{{asset('home/images/partner/5.png')}}" alt="Partenr Images"></div>
                <div class="item"><img src="{{asset('home/images/partner/6.png')}}" alt="Partenr Images"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Partners Section -->

<!-- Strat Footer Section -->
<footer class="footer clearfix">
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-col text-center">
                        <p>©{{date('Y')}}. Admissions Checker. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->

<a href="#" class="scrollup">
    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</a>

<!-- Import Jquery Min Js -->
<script type="text/javascript" src="{{asset('home/js/jquery.min.js')}}"></script>
<!-- Import Bootstrap Min Js -->
<script type="text/javascript" src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- Owl Catousel Mi Js -->
<script type="text/javascript" src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<!-- Import Custom JS -->
<script type="text/javascript" src="{{asset('home/js/script.js')}}"></script>

</body>
</html>
