<x-admin.guest-layout>
	<!-- Session Status -->
	<x-auth-session-status class="mb-4" :status="session('status')"/>
	
	<title>Admin Login || Admissions Checker</title>
	
	<div class="col-lg-12">
		<div class="p-lg-5 p-4">
			<div>
				<h5 class="text-primary">Welcome!</h5>
				<p class="text-muted">Sign in to continue to your admin portal.</p>
			</div>
			
			<div class="mt-4">
				<form method="POST" action="{{ route('admin.login') }}" role="form">
					@csrf
					
					<div class="mb-4">
						<x-input-label class="form-label" for="username" :value="__('Admin Email or Username')"/>
						<x-text-input id="username" class="block mt-1 w-full form-control" type="text" name="username" :value="old('username')" placeholder="Enter username or email" required autofocus autocomplete="username"/>
						@error('email')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
						@error('username')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
						@error('active')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
					</div>
					
					<div class="mb-3">
						<div class="float-end">
							@if (Route::has('admin.password.request'))
								<a class="text-muted underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
									 href="{{ route('admin.password.request') }}">
									{{ __('Forgot your password?') }}
								</a>
							@endif
						</div>
						
						<x-input-label class="form-label" for="password" :value="__('Admin Password')"/>
						<div class="position-relative auth-pass-inputgroup mb-3">
							<x-text-input id="password" class="block mt-1 w-full form-control pe-5" type="password" name="password" placeholder="Enter password" required />
							@error('password')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
							<button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
						</div>
					</div>
					
					<div class="form-check">
						<label for="remember_me" class="form-check-label inline-flex items-center">
							<input id="remember_me" type="checkbox" class="form-check-input rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
							<span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
						</label>
					</div>
					
					<div class="mt-4">
						<button class="btn btn-success w-100" type="submit">Sign In</button>
					</div>
				
				</form>
			</div>
		</div>
	</div>
	<!-- end col -->

</x-admin.guest-layout>
