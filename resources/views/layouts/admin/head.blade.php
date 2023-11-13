<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="{{asset('logo.png')}}">
	
	<!--datatable css-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
	<!--datatable responsive css-->
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
	
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
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