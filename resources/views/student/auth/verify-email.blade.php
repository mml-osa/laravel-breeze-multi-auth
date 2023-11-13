<x-student.guest-layout>
	<title>Verify Your Email || Admissions Checker</title>
	
	<div id="main-wrapper" class="oxyy-login-register bg-dark">
		<div class="container">
			<div class="row g-0 min-vh-100 py-4 py-md-5">
				<!-- Welcome Text
				========================= -->
				<div class="col-lg-7 shadow-lg">
					<div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
						<div class="hero-mask opacity-9 bg-primary"></div>
						<div class="hero-bg hero-bg-scroll"
								 style="background-image:url('{{asset('student/auth/assets/img/auth/auth-verify-2.png')}}');"></div>
						<div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
							<div class="row g-0">
								<div class="col-11 col-lg-10 mx-auto">
									<div class="logo mt-5 mb-5 mb-lg-0"><a href="{{route('login')}}" title="Oxyy"><img
													src="{{asset('logo.png')}}" alt="Oxyy"></a></div>
								</div>
							</div>
							<div class="row g-0 my-auto">
								<div class="col-11 col-lg-10 mx-auto">
									<h1 class="text-11 text-white mb-3">Check Your Email Address!</h1>
									<p class="text-5 text-white lh-base mb-4">We have sent a verification link to the email address you
										provided. Click on the link to verify your email.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Welcome Text End -->
				
				<!-- Forgot password Form
				========================= -->
				<div class="col-lg-5 shadow-lg d-flex align-items-center rounded-3 rounded-start-0 bg-dark">
					<div class="container my-auto py-5">
						<div class="row">
							<div class="col-11 col-lg-10 mx-auto">
								<h3 class="text-white text-center mb-4">{{ __('Verify Your Email Address') }}</h3>
								<p class="text-muted text-center mb-4">{{ __('Before proceeding, please check your email for a verification link.') }}
									{{ __('If you did not receive the email') }},</p>
								@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
								@endif
								<form method="POST" class="form-dark" action="{{ route('verification.send') }}">
									@csrf
									<div class="d-grid my-4">
										<button class="btn btn-primary" type="submit">{{ __('Click Here To Request Another') }}</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Forgot password Form End -->
			</div>
		</div>
	</div>
</x-student.guest-layout>
