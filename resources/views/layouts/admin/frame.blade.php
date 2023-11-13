<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-layout-style="detached"
			data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">

@include('layouts.admin.head')

<body>

<!-- Begin page -->
<div id="layout-wrapper">
	
	<div class="main-content">
		
		<main>
			{{ $slot }}
		</main>
		<!-- End Page-content -->
	
	</div>
	
	<!--start back-to-top-->
	<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
		<i class="ri-arrow-up-line"></i>
	</button>
	<!--end back-to-top-->

</div>

@include('layouts.admin.scripts')

</body>
</html>
