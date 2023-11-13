<x-student.guest-layout>
	
	<title>Student Account Setup || Admissions Checker</title>
	
	<div id="main-wrapper" class="oxyy-login-register">
		<div class="container-fluid px-0">
			<div class="row g-0 min-vh-100">
				<!-- Welcome Text
				========================= -->
				<div class="col-md-4">
					<div class="hero-wrap h-100">
						<div class="hero-mask opacity-5 bg-dark"></div>
						<div class="hero-bg hero-bg-scroll" style="background-image:url('{{asset('student/auth/assets/img/auth/auth-setup.png')}}');"></div>
						<div class="hero-content mx-auto w-100 h-100">
							<div class="container d-flex flex-column h-100">
								<div class="row g-0">
									<div class="col-11 col-lg-9 mx-auto">
										<div class="logo mt-5 mb-5"><a class="d-flex" href="{{route('student.dashboard')}}" title="Logo"><img src="{{asset('logo.png')}}" alt="Logo"></a></div>
									</div>
								</div>
								<div class="row g-0 mt-3">
									<div class="col-11 col-lg-9 mx-auto">
										<h1 class="text-9 text-white fw-300 mb-5"><span class="fw-500">Welcome</span>, You're almost done with your registration!</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Welcome Text End -->
				
				<!-- Register Form
				========================= -->
				<div class="col-md-8 d-flex flex-column align-items-center bg-dark">
					<div class="container my-auto py-5">
						
						<form id="registerForm" class="form-dark" method="post" action="{{route('student.account.setup.store')}}">
							@csrf
							<div class="row g-0">
								<div class="col-6 col-md-12 col-lg-7 col-xl-6 p-3">
									{{--								<p class="text-2 text-light">Continue your registration</p>--}}
									<h3 class="text-white mb-4">Personal Details!</h3>
									
									{{--                                    <button type="button" class="btn btn-primary fw-400 rounded-3 shadow-none"><span class="mx-3">JHS</span></button>--}}
									{{--                                    <button type="button" class="btn btn-primary fw-400 rounded-3 shadow-none"><span class="mx-3">SHS</span></button>--}}
									{{--                                    <button type="button" class="btn btn-primary fw-400 rounded-3 shadow-none"><span class="mx-3">Tertiary</span></button>--}}
									
									
									{{--								<style>--}}
									{{--									.radio-toolbar {--}}
									{{--										margin: 10px;--}}
									{{--									}--}}
									{{--									--}}
									{{--									.radio-toolbar input[type="radio"] {--}}
									{{--										opacity: 0;--}}
									{{--										position: fixed;--}}
									{{--										width: 0;--}}
									{{--									}--}}
									{{--									--}}
									{{--									.radio-toolbar label {--}}
									{{--										display: inline-block;--}}
									{{--										background-color: #0d6efd;--}}
									{{--										padding: 15px 25px;--}}
									{{--										font-family: sans-serif, Arial;--}}
									{{--										font-size: 16px;--}}
									{{--										/*border: 2px solid #444;*/--}}
									{{--										border-radius: 4px;--}}
									{{--										color: #fff;--}}
									{{--										cursor: pointer;--}}
									{{--									}--}}
									{{--									--}}
									{{--									.radio-toolbar label:hover {--}}
									{{--										background-color: #0a4fb6;--}}
									{{--									}--}}
									{{--									--}}
									{{--									.radio-toolbar input[type="radio"]:checked + label {--}}
									{{--										background-color: #0a4fb6;--}}
									{{--										/*border-color: #4c4;*/--}}
									{{--									}--}}
									{{--								</style>--}}
									
									
									{{--								<div class="radio-toolbar">--}}
									{{--									<input type="radio" id="radioJhs" name="radioEducation" value="jhs">--}}
									{{--									<label for="radioJhs">Junior High Institute</label>--}}
									{{--									--}}
									{{--									<input type="radio" id="radioShs" name="radioEducation" value="shs">--}}
									{{--									<label for="radioShs">Senior high Institute</label>--}}
									{{--								</div>--}}
									{{--								--}}
									
									<div class="d-flex align-items-center my-4">
										<hr class="col-1 bg-dark-4">
										<span class="mx-3 text-2 text-muted">ENTER YOUR PERSONAL DETAILS HERE</span>
										<hr class="flex-grow-1 bg-dark-4">
									</div>
									
									<div class="row">
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="first_name">First Name</label>
											<input name="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" id="first_name" required placeholder="Enter Your First Name" autocomplete="first_name" autofocus autocapitalize="on">
											@error('first_name')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="last_name">Last Name</label>
											<input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" id="last_name" required placeholder="Enter Your Last Name" autocomplete="last_name" autocapitalize="on">
											@error('last_name')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										<div class="mb-3">
											<label class="form-label text-light" for="other_name">Other Name(s)</label>
											<input name="other_name" type="text" class="form-control @error('other_name') is-invalid @enderror" value="{{ old('other_name') }}" id="other_name" required placeholder="Enter Your Other Name" autocomplete="other_name" autocapitalize="on">
											@error('other_name')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="gender_id">Gender</label>
											<select name="gender_id" id="gender_id" class="form-control @error('gender_id') is-invalid @enderror" required>
												<option value="" selected hidden>Select...</option>
												<?php $genders = \App\Models\Setups\Gender\Gender::where('active',true)->get() ?>
												@foreach($genders as $gender)
													<option value="{{$gender->uuid}}">{{$gender->name}}</option>
												@endforeach
											</select>
											@error('gender_id')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
									
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="nationality_id">Nationality</label>
											<select name="nationality_id" id="nationality_id" class="form-control @error('nationality_id') is-invalid @enderror" required>
												<option value="" selected hidden>Select...</option>
												<?php $countries = \Lwwcas\LaravelCountries\Models\Country::all() ?>
												@foreach($countries as $country)
													<option value="{{$country->uuid}}">{{$country->name}}</option>
												@endforeach
											</select>
											@error('nationality_id')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										
										<div class="mb-3">
											<label class="form-label text-light" for="address">Residential Address</label>
											<input name="residential_address" type="text" class="form-control @error('residential_address') is-invalid @enderror" value="{{ old('residential_address') }}" id="address" required placeholder="Enter Your Home Residential Address">
											@error('residential_address')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										<div class="mb-3">
											<label class="form-label text-light" for="gps_code">GPS Code (optional)</label>
											<input name="gps_code" type="text" class="form-control @error('gps_code') is-invalid @enderror" value="{{ old('gps_code') }}" id="gps_code" required placeholder="Enter Your Home GPS Code">
											@error('gps_code')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="phone">Phone Number</label>
											<input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" required placeholder="Enter Your Phone Number">
											@error('phone')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
									
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="phone_2">Alternative Phone Number (Optional)</label>
											<input name="phone_2" type="text" class="form-control @error('phone_2') is-invalid @enderror" value="{{ old('phone_2') }}" id="phone_2" placeholder="Enter Your Alternative Phone Number">
											@error('phone_2')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="city_id">City/Township</label>
											{{--											<input name="city" type="text" class="form-control" id="city" required placeholder="Enter Your CityTown of Residence">--}}
											<select name="city_id" id="city_id" class="form-control @error('city_id') is-invalid @enderror" required>
												<option value="" selected hidden>Select...</option>
												<?php $cities = \App\Models\Setups\Location\CityTown::where('active',true)->get() ?>
												@foreach($cities as $city)
													<option value="{{$city->id}}">{{$city->name}}</option>
												@endforeach
											</select>
											@error('city_id')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										
										<div class="col-md-6 mb-3">
											<label class="form-label text-light" for="region_id">Region</label>
											<select name="region_id" id="region_id" class="form-control @error('region_id') is-invalid @enderror" required>
												<option value="" selected hidden>Select...</option>
												<?php $regions = \App\Models\Setups\Location\RegionNew::where('active',true)->get() ?>
												@foreach($regions as $region)
													<option value="{{$region->id}}">{{$region->name}}</option>
												@endforeach
											</select>
											@error('region_id')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
										</div>
										
									</div>
								
								</div>
								
								<div class="col-6 col-md-12 col-lg-7 col-xl-6 p-3">
									<h3 class="text-white mb-4">Academic Details!</h3>
									
									<div class="d-flex align-items-center my-4">
										<hr class="col-1 bg-dark-4">
										<span class="mx-3 text-2 text-muted">ENTER YOUR ACADEMIC DETAILS HERE</span>
										<hr class="flex-grow-1 bg-dark-4">
									</div>
									
									<div class="mb-3">
										<label class="form-label text-light" for="shs_id">Senior High School (SHS)</label>
										<select name="shs_id" id="shs_id" class="form-control @error('shs_id') is-invalid @enderror" required>
											<option value="" selected hidden>Select Your SHS...</option>
											<?php $shsSchools = \App\Models\Setups\SeniorHigh\SeniorHighSchool::where('active',true)->get() ?>
											@foreach($shsSchools as $shsSchool)
												<option value="{{$shsSchool->id}}">{{$shsSchool->name}}</option>
											@endforeach
										</select>
										@error('shs_id')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="mb-3">
										<label class="form-label text-light" for="shs_course_id">Course</label>
										<select name="shs_course_id" id="shs_course_id" class="form-control @error('shs_course_id') is-invalid @enderror" required>
											<option value="" selected hidden>Select Your Course...</option>
											<?php $shsCourses = \App\Models\Setups\SeniorHigh\SeniorHighCourse::where('active',true)->get() ?>
											@foreach($shsCourses as $shsCourse)
												<option value="{{$shsCourse->id}}">{{$shsCourse->name}}</option>
											@endforeach
										</select>
										@error('shs_course_id')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
								</div>
								
								<div class="col-12 col-md-12 col-lg-7 col-xl-6 p-3">
									<button class="btn btn-primary shadow-none my-2" type="submit">Register</button>
								</div>
							</div>
						
						</form>
					</div>
				</div>
				<!-- Register Form End -->
			</div>
		</div>
	</div>
</x-student.guest-layout>
