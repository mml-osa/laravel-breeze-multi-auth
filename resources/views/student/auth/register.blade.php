<x-student.guest-layout>
	<title>Create An Account || Admissions Checker</title>
	
	<div id="main-wrapper" class="oxyy-login-register bg-dark">
		<div class="container">
			<div class="row g-0 min-vh-100 py-4 py-md-5">
				<!-- Welcome Text
				========================= -->
				<div class="col-lg-7 shadow-lg">
					<div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
						<div class="hero-mask opacity-9 bg-primary"></div>
						<div class="hero-bg hero-bg-scroll"
								 style="background-image:url('{{asset('student/auth/assets/img/auth/auth-reg.png')}}');"></div>
						<div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
							<div class="row g-0">
								<div class="col-11 col-lg-10 mx-auto">
									<div class="logo mt-5 mb-5 mb-lg-0"><a href="{{route('login')}}" title="Oxyy"><img
													src="{{asset('logo.png')}}" alt="Oxyy"></a></div>
								</div>
							</div>
							<div class="row g-0 my-auto">
								<div class="col-11 col-lg-10 mx-auto">
									<h1 class="text-11 text-white mb-3">Create an account!</h1>
									<p class="text-5 text-white lh-base mb-4">Sign up with your email, phone number and
										personal details to get started!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Welcome Text End -->
				
				<!-- Register Form
				========================= -->
				<div class="col-lg-5 shadow-lg d-flex align-items-center rounded-3 rounded-start-0 bg-dark">
					<div class="container my-auto py-5">
						<div class="row">
							<div class="col-11 col-lg-10 mx-auto">
								<h3 class="text-white text-center mb-4">Create An Account</h3>
								<form method="POST" class="form-dark" action="{{ route('register') }}">
									@csrf
									<div class="mb-3">
										<label class="form-label text-light" for="username">{{ __('Username') }}</label>
										<input id="username" type="text"
													 class="form-control @error('username') is-invalid @enderror"
													 name="username" value="{{ old('username') }}"
													 placeholder="Enter Username" required autocomplete="username" autofocus>
										@error('username')<span class="invalid-feedback"
																						role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="mb-3">
										<label class="form-label text-light"
													 for="email">{{ __('Email Address') }}</label>
										<input name="email" type="email"
													 class="form-control @error('email') is-invalid @enderror" id="email"
													 value="{{ old('email') }}" required placeholder="Enter Email Address"
													 autocomplete="email">
										@error('email')<span class="invalid-feedback"
																				 role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="mb-3">
										<label class="form-label text-light"
													 for="password">{{ __('New Password') }}</label>
										<input name="password" type="password"
													 class="form-control @error('password') is-invalid @enderror"
													 id="password" required placeholder="Enter Password"
													 autocomplete="new-password">
										@error('password')<span class="invalid-feedback"
																						role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="mb-3">
										<label class="form-label text-light"
													 for="password-confirm">{{ __('Confirm Password') }}</label>
										<input name="password_confirmation" type="password" class="form-control"
													 id="password-confirm" required placeholder="Confirm Password"
													 autocomplete="new-password">
									</div>
									<div class="mb-3 mt-4">
										<div class="form-check text-2">
											<input id="agree" name="agree" class="form-check-input" type="checkbox"
														 required>
											<label class="form-check-label text-light" for="agree">I agree to the <a
														href="#.">Terms</a> and <a href="#.">Privacy Policy</a>.</label>
										</div>
									</div>
									<div class="d-grid my-4">
										<button class="btn btn-primary" type="submit">{{ __('Register') }}</button>
									</div>
								</form>
								<p class="text-2 text-center text-light">Already have an account? <a
											href="{{ route('login') }}">{{ __('Login') }}</a></p>
							</div>
						</div>
					</div>
				</div>
				<!-- Register Form End -->
			</div>
		</div>
	</div>
	
</x-student.guest-layout>
