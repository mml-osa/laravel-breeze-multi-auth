<x-admin.guest-layout>
	
	<title>Admin Account Setup || Admissions Checker</title>
	
	<div class="col-lg-12">
		<div class="p-lg-5 p-4">
			<div>
				<h5 class="text-primary">Register Account</h5>
				<p class="text-muted">Get your Free Velzon account now.</p>
			</div>
			
			<div class="mt-4">
				<form method="POST" action="{{ route('admin.register') }}">
					@csrf
					
					<div class="mb-3">
						<x-input-label class="form-label" for="username" :value="__('Admin Name')"/>
						<span class="text-danger">*</span>
						<x-text-input id="username" class="block mt-1 w-full form-control" type="text" name="username"
													:value="old('username')" placeholder="Enter email address" required autofocus
													autocomplete="username"/>
						<x-input-error :messages="$errors->get('username')" class="mt-2"/>
					</div>
					<div class="mb-3">
						<x-input-label class="form-label" for="email" :value="__('Admin Email')"/>
						<span class="text-danger">*</span>
						<x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
													:value="old('email')" placeholder="Enter username" required autocomplete="username"/>
						<x-input-error :messages="$errors->get('email')" class="mt-2"/>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="password" :value="__('Admin Password')"/>
						<div class="position-relative auth-pass-inputgroup">
							<x-text-input id="password" class="block mt-1 w-full form-control pe-5 password-input" type="password"
														name="password" aria-describedby="passwordInput"
														pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onpaste="return false"
														placeholder="Enter password" required autocomplete="new-password"/>
							<x-input-error :messages="$errors->get('password')" class="mt-2"/>
							<button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
											type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
						</div>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="password_confirmation" :value="__('Confirm Admin Password')"/>
						<div class="position-relative auth-pass-inputgroup">
							<x-text-input id="password_confirmation" class="form-control pe-5 password-input block mt-1 w-full"
														type="password" name="password_confirmation" aria-describedby="passwordInput"
														pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onpaste="return false"
														placeholder="Enter password" required autocomplete="new-password"/>
							<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
							<button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
											type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
						</div>
					</div>
					
					<div class="mb-4">
						<p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#"
																																																	class="text-primary text-decoration-underline fst-normal fw-medium">Terms
								of Use</a></p>
					</div>
					
					<div class="p-3 bg-light mb-2 rounded">
						<h5 class="fs-13">Password must contain:</h5>
						<p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
						<p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
						<p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
						<p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
					</div>
					
					<div class="mt-4">
						<button class="btn btn-success w-100" type="submit">Sign Up</button>
					</div>
				
				</form>
			</div>
			
			<div class="mt-5 text-center">
				<p class="mb-0">Already have an account ? <a href="{{route('admin.login')}}"
																										 class="fw-semibold text-primary text-decoration-underline"> Sign
						In</a></p>
			</div>
		</div>
	</div>
</x-admin.guest-layout>
