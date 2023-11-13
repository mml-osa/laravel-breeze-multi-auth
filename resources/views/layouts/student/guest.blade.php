<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon"/>
{{--    <title>Login || Admissions Checker</title>--}}
    <meta name="description" content="Admissions Checker">
    <meta name="author" content="Mastermind">

    <!-- Web Fonts
    ========================= -->
    {{--    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>--}}

    <!-- Stylesheet
    ========================= -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('student/auth/assets/vendor/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="{{asset('student/auth/assets/css/stylesheet.css')}}"/>
    <!-- Colors Css -->
</head>
<body class="font-sans text-gray-900 antialiased">

<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->

{{ $slot }}

<!-- Script -->
<script src="{{asset('student/auth/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('student/auth/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Style Switcher -->
<script src="{{asset('student/auth/assets/js/switcher.min.js')}}"></script>
<script src="{{asset('student/auth/assets/js/theme.js')}}"></script>

</body>
</html>
