<x-student.guest-layout>
	<title>Forgot Password || Admissions Checker</title>
	
	<div id="main-wrapper" class="oxyy-login-register bg-dark">
		<div class="container">
			<div class="row g-0 min-vh-100 py-4 py-md-5">
				<!-- Welcome Text
				========================= -->
				<div class="col-lg-7 shadow-lg">
					<div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
						<div class="hero-mask opacity-9 bg-primary"></div>
						<div class="hero-bg hero-bg-scroll"
								 style="background-image:url('{{asset('student/auth/assets/img/auth/reset-password-icon-29.jpg')}}');"></div>
						<div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
							<div class="row g-0">
								<div class="col-11 col-lg-10 mx-auto">
									<div class="logo mt-5 mb-5 mb-lg-0"><a href="{{route('login')}}" title="Oxyy"><img
													src="{{asset('logo.png')}}" alt="Admissions Checker"></a></div>
								</div>
							</div>
							<div class="row g-0 my-auto">
								<div class="col-11 col-lg-10 mx-auto">
									<h1 class="text-11 text-white mb-3">{{ __('Forgot My Password!') }}</h1>
									<p class="text-5 text-white lh-base mb-4">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
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
								<h3 class="text-white text-center mb-4">Forgot Password?</h3>
								<form method="POST" class="form-dark" action="{{ route('password.email') }}">
									@csrf
									<div class="mb-3">
										<label class="form-label text-light" for="email">{{ __('Email') }}</label>
										<input name="email" id="email" type="text"
													 class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
													 required placeholder="Enter your emal address" autocomplete="email" autofocus>
										@error('email')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="d-grid my-4">
										<button class="btn btn-primary" type="submit">{{ __('Email Password Reset Link') }}</button>
									</div>
								</form>
								@if (Route::has('register'))
									<p class="text-2 text-center text-light mb-0">{{ __('Oh, I remember my password now!') }} <a
												href="{{ route('login') }}">{{ __('Login') }}</a></p>
								@endif
							</div>
						</div>
					</div>
				</div>
				<!-- Login Form End -->
			</div>
		</div>
	</div>
	
	<div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
		{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
	</div>
	
	<!-- Session Status -->
	<x-auth-session-status class="mb-4" :status="session('status')"/>
	
	<form method="POST" action="{{ route('password.email') }}">
		@csrf
		
		<!-- Email Address -->
		<div>
			<x-input-label for="email" :value="__('Email')"/>
			<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
										autofocus/>
			<x-input-error :messages="$errors->get('email')" class="mt-2"/>
		</div>
		
		<div class="flex items-center justify-end mt-4">
			<x-primary-button>
				{{ __('Email Password Reset Link') }}
			</x-primary-button>
		</div>
	</form>
</x-student.guest-layout>
