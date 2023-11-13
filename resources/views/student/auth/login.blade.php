<x-student.guest-layout>
	<title>Student Login || Admissions Checker</title>
	<!-- Session Status -->
	<x-auth-session-status class="mb-4" :status="session('status')"/>
	
	<div id="main-wrapper" class="oxyy-login-register bg-dark">
		<div class="container">
			<div class="row g-0 min-vh-100 py-4 py-md-5">
				<!-- Welcome Text
				========================= -->
				<div class="col-lg-7 shadow-lg">
					<div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
						<div class="hero-mask opacity-9 bg-primary"></div>
						<div class="hero-bg hero-bg-scroll"
								 style="background-image:url('{{asset('student/auth/assets/img/auth/auth.png')}}');"></div>
						<div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
							<div class="row g-0">
								<div class="col-11 col-lg-10 mx-auto">
									<div class="logo mt-5 mb-5 mb-lg-0"><a href="{{route('login')}}" title="Oxyy"><img
													src="{{asset('logo.png')}}" alt="Admissions Checker"></a></div>
								</div>
							</div>
							<div class="row g-0 my-auto">
								<div class="col-11 col-lg-10 mx-auto">
									<h1 class="text-11 text-white mb-3">{{ __('Admissions Checker') }}</h1>
									<p class="text-5 text-white lh-base mb-4">{{ __('Many institutions are looking for you, find out who!') }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Welcome Text End -->
				
				<!-- Login Form
				========================= -->
				<div class="col-lg-5 shadow-lg d-flex align-items-center rounded-3 rounded-start-0 bg-dark">
					<div class="container my-auto py-5">
						<div class="row">
							<div class="col-11 col-lg-10 mx-auto">
								<h3 class="text-white text-center mb-4">Account Login</h3>
								<form method="POST" class="form-dark" action="{{ route('login') }}">
									@csrf
									<div class="mb-3">
										<label class="form-label text-light" for="username">{{ __('Email or Username') }}</label>
										<input name="username" id="username" type="text"
													 class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"
													 required placeholder="Enter your email or username" autocomplete="username" autofocus>
										@error('email')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										@error('username')<span class="error-feedback text-danger"
																						role="alert"><strong>{{ $message }}</strong></span>@enderror
										@error('active')<span class="error-feedback text-danger"
																					role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="mb-3">
										<label class="form-label text-light" for="password">{{ __('Password') }}</label>
										<input name="password" id="password" type="password"
													 class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
													 required placeholder="Enter your password" autocomplete="current-password">
										@error('password')<span class="invalid-feedback"
																						role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="row mt-4">
										<div class="col">
											<div class="form-check text-2">
												<input id="remember" name="remember" class="form-check-input"
															 type="checkbox" {{ old('remember') ? 'checked' : '' }}>
												<label class="form-check-label text-light" for="remember">{{ __('Remember Me') }}</label>
											</div>
										</div>
										@if (Route::has('password.request'))
											<div class="col-sm text-2 text-end"><a
														href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
											</div>
										@endif
									</div>
									<div class="d-grid my-4">
										<button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
									</div>
								</form>
								@if (Route::has('register'))
									<p class="text-2 text-center text-light mb-0">{{ __('Don\'t have an account?') }} <a
												href="{{ route('register') }}">{{ __('Create An Account') }}</a></p>
								@endif
							</div>
						</div>
					</div>
				</div>
				<!-- Login Form End -->
			</div>
		</div>
	</div>
</x-student.guest-layout>
