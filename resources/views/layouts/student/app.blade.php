<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-layout-style="detached" data-layout-position="fixed" data-topbar="dark" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('logo.png')}}">

        <!-- jsvectormap css -->
        <link href="{{asset('app/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="{{asset('app/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Layout config Js -->
        <script src="{{asset('app/assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('app/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('app/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('app/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('app/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

    <body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.student.header')

        @include('layouts.student.navbar')

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <div class="main-content">

            <main>
                {{ $slot }}
            </main>
            <!-- End Page-content -->

            @include('layouts.student.footer')

        </div>

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('app/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('app/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('app/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('app/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('app/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('app/assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('app/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- dashboard init -->
    <!-- Vector map-->
    <script src="{{asset('app/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('app/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset('app/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- dashboard init -->
    <script src="{{asset('app/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('app/assets/js/app.js')}}"></script>

    <script src="{{asset('app/assets/js/pages/two-step-verification.init.js')}}"></script>
    </body>
</html>
