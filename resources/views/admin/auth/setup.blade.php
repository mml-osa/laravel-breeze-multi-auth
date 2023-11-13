<x-admin.guest-layout>
	
	<title>Admin Account Setup || Admissions Checker</title>
	
	<div class="col-lg-12">
		<div class="p-lg-5 p-4">
			<div>
				<h5 class="text-primary">Account Setup</h5>
				<p class="text-muted">Complete the details below to set up your account</p>
			</div>
			
			<div class="mt-4">
				<form method="POST" action="{{ route('admin.account.setup.store') }}">
					@csrf
					
					<div class="mb-3">
						<x-input-label class="form-label" for="username" :value="__('Username')"/>
						<span class="text-danger">*</span>
						<x-text-input id="username" class="block mt-1 w-full form-control" type="text" name="username"
													:value="old('username')" placeholder="Enter Username" required autofocus
													autocomplete="username"/>
						<x-input-error :messages="$errors->get('username')" class="mt-2"/>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="first_name" :value="__('First Name')"/>
						<span class="text-danger">*</span>
						<x-text-input id="first_name" class="block mt-1 w-full form-control" type="text" name="first_name"
													:value="old('first_name')" placeholder="Enter First Name" required autocomplete="first_name"/>
						<x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="last_name" :value="__('Last Name')"/>
						<span class="text-danger">*</span>
						<x-text-input id="last_name" class="block mt-1 w-full form-control" type="text" name="last_name"
													:value="old('first_name')" placeholder="Enter Last Name" required autocomplete="last_name"/>
						<x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="other_name" :value="__('Other Name')"/>
						<span class="text-danger">*</span>
						<x-text-input id="other_name" class="block mt-1 w-full form-control" type="text" name="other_name"
													:value="old('other_name')" placeholder="Enter Other Name" required autocomplete="other_name"/>
						<x-input-error :messages="$errors->get('other_name')" class="mt-2"/>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="phone" :value="__('Phone Number')"/>
						<span class="text-danger">*</span>
						<x-text-input id="phone" class="block mt-1 w-full form-control" type="text" name="phone"
													:value="old('phone')" placeholder="Enter Phone Number" required autocomplete="phone"/>
						<x-input-error :messages="$errors->get('phone')" class="mt-2"/>
					</div>
					
					<div class="mb-3">
						<x-input-label class="form-label" for="password" :value="__('New Password')"/>
						<div class="position-relative auth-pass-inputgroup">
							<x-text-input id="password" class="block mt-1 w-full form-control pe-5 password-input" type="password"
														name="password" aria-describedby="passwordInput"
														pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onpaste="return false"
														placeholder="Enter New Password" required autocomplete="new-password"/>
							<x-input-error :messages="$errors->get('password')" class="mt-2"/>
							<button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
											type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
						</div>
					</div>
					
					<div class="mb-6">
						<x-input-label class="form-label" for="password_confirmation" :value="__('Confirm Password')"/>
						<div class="position-relative auth-pass-inputgroup">
							<x-text-input id="password_confirmation" class="form-control pe-5 password-input block mt-1 w-full"
														type="password" name="password_confirmation" aria-describedby="passwordInput"
														pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onpaste="return false"
														placeholder="Re-Enter Password" required autocomplete="new-password"/>
							<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
							<button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
											type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
						</div>
					</div>
					
					<input type="hidden" name="account" id="account" value="Web">
					
					<div class="mb-4 mt-4">
						<div class="p-3 bg-light mb-2 rounded">
							<h5 class="fs-13">Password must contain:</h5>
							<p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
							<p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
							<p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
							<p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
						</div>
					</div>
					
					<div class="mt-4">
						<button class="btn btn-success w-100" type="submit">Submit</button>
					</div>
				
				</form>
			</div>
		
		</div>
	</div>
</x-admin.guest-layout>
