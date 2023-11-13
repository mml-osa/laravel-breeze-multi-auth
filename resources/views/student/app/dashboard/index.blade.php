<x-student.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">Dashboard</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								{{--                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>--}}
								<li class="breadcrumb-item active">Student Dashboard</li>
							</ol>
						</div>
					
					</div>
				</div>
			</div>
			<!-- end page title -->
			
			<div class="row">
				<div class="col">
					
					<div class="h-100">
						<div class="row mb-3 pb-1">
							<div class="col-12">
								<div class="d-flex align-items-lg-center flex-lg-row flex-column">
									<div class="flex-grow-1">
										<h4 class="fs-16 mb-1">@include('layouts.student.greetings'), {{Auth::user()->studentProfile['first_name']}}!</h4>
										<p class="text-muted mb-0">Welcome to your admissions checker portal!</p>
									</div>
									<div class="mt-3 mt-lg-0">
										<form action="javascript:void(0);">
											<div class="row g-3 mb-0 align-items-center">
												<div class="col-auto">
													<button type="button" class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn">
														<i class="ri-pulse-line"></i></button>
												</div>
												<!--end col-->
											</div>
											<!--end row-->
										</form>
									</div>
								</div><!-- end card header -->
							</div>
							<!--end col-->
						</div>
						<!--end row-->
						
						<div class="row">
							
							<div class="col-sm-6 col-xl-3">
								<a href="{{route('student.profile')}}">
								<!-- Simple card -->
								<div class="card module-hover">
									<img class="card-img-top img-fluid module-img p-4" src="{{asset('app/assets/icons/user_icon_male.png')}}" alt="Card image cap" height="20">
									<div class="card-body">
										<h4 class="card-title text-center mb-2">My Profile</h4>
										<p class="card-text">Manage your account profile details and other settings here</p>
										<div class="text-end"></div>
									</div>
								</div><!-- end card -->
								</a>
							</div><!-- end col -->
							
							
							<div class="col-sm-6 col-xl-3">
								<!-- Simple card -->
								<a href="{{route('student.university.check-code')}}">
								<div class="card module-hover">
									<img class="card-img-top img-fluid module-img p-4" src="{{asset('app/assets/icons/university-3.png')}}" alt="Card image cap" height="20">
									<div class="card-body">
										<h4 class="card-title text-center mb-2">Find My University</h4>
										<p class="card-text">Find a university that matches your current student profile</p>
										<div class="text-end"></div>
									</div>
								</div><!-- end card -->
								</a>
							</div><!-- end col -->
							
							<div class="col-sm-6 col-xl-3">
								<!-- Simple card -->
								<a href="{{route('student.university.application')}}">
								<div class="card module-hover">
									<img class="card-img-top img-fluid module-img p-4" src="{{asset('app/assets/icons/university-apply.png')}}" alt="Card image cap" height="20">
									<div class="card-body">
										<h4 class="card-title text-center mb-2">Apply To A University</h4>
										<p class="card-text">Apply directly to the university of your choice online</p>
										<div class="text-end"></div>
									</div>
								</div><!-- end card -->
								</a>
							</div><!-- end col -->
							
							<div class="col-sm-6 col-xl-3">
								<a href="{{route('student.help')}}">
								<!-- Simple card -->
								<div class="card module-hover">
									<img class="card-img-top img-fluid module-img p-4" src="{{asset('app/assets/icons/help.png')}}" alt="Card image cap" height="20">
									<div class="card-body">
										<h4 class="card-title text-center mb-2">Help Me!</h4>
										<p class="card-text">Get assisted with any issues you are facing using the platform</p>
										<div class="text-end"></div>
									</div>
								</div><!-- end card -->
								</a>
							</div><!-- end col -->
							
						</div><!-- end row -->
						
						<!-- dashboard Content Section -->
					
					</div> <!-- end .h-100-->
				
				</div> <!-- end col -->
				
				<div class="col-auto layout-rightside-col">
					<div class="overlay"></div>
					<div class="layout-rightside">
						<div class="card h-100 rounded-0">
							<div class="card-body p-0">
								<div class="p-3">
									<h6 class="text-muted mb-0 text-uppercase fw-semibold">Recent Activity</h6>
								</div>
								<div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
									<div class="acitivity-timeline acitivity-main">
										<div class="acitivity-item d-flex">
											<div class="flex-shrink-0 avatar-xs acitivity-avatar">
												<div class="avatar-title bg-soft-success text-success rounded-circle">
													<i class="ri-stack-fill"></i>
												</div>
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="mb-1 lh-base">No activity recorded</h6>
												{{--                                                <p class="text-muted mb-1">Product noise evolve smartwatch </p>--}}
												{{--                                                <small class="mb-0 text-muted">02:14 PM Today</small>--}}
											</div>
										</div>
									</div>
								</div>
								
								<div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
									<div class="card-body">
										<img src="{{asset('public/app/assets/images/giftbox.png')}}" alt="">
										<div class="mt-4">
											<h5>Invite A Friend</h5>
											<p class="text-muted lh-base">Refer a friend to use this platform and earn ¢5 per referral.</p>
											<button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i>Invite Now</button>
										</div>
									</div>
								</div>
							
							</div>
						</div> <!-- end card-->
					</div> <!-- end .rightbar-->
				
				</div> <!-- end col -->
			</div>
		
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->

</x-student.app-layout>
