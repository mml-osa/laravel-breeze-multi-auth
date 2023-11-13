<x-student.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
{{--			<div class="profile-foreground position-relative mx-n4 mt-n4">--}}
{{--				<div class="profile-wid-bg">--}}
{{--					<img src="{{asset('app/assets/images/profile-bg.jpg')}}" alt="" class="profile-wid-img"/>--}}
{{--				</div>--}}
{{--			</div>--}}
			
{{--			<div class="pt-4 mb-4 mb-lg-3 pb-lg-4">--}}
{{--				<div class="row g-4">--}}
{{--					<div class="col-auto">--}}
{{--						<div class="avatar-lg">--}}
{{--							<img src="{{asset('app/assets/images/users/avatar-1.jpg')}}" alt="user-img"--}}
{{--									 class="img-thumbnail rounded-circle"/>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<!--end col-->--}}
{{--					<div class="col">--}}
{{--						<div class="p-2">--}}
{{--							<h3 class="text-white mb-1">{{Auth::user()->studentProfile['first_name'].' '.Auth::user()->studentProfile['last_name']}}</h3>--}}
{{--							<p class="text-white-75">@if(Auth::user()->is_student)--}}
{{--									Student--}}
{{--								@endif</p>--}}
{{--							<div class="hstack text-white-50 gap-1">--}}
{{--								<div class="me-2"><i--}}
{{--											class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{Auth::user()->studentProfile['residential_address'].' - '.\Lwwcas\LaravelCountries\Models\Country::where('uuid',Auth::user()->studentProfile['nationality_id'])->first()->official_name}}--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<!--end col-->--}}
{{--					<div class="col-12 col-lg-auto order-last order-lg-0">--}}
{{--						<div class="row text text-white-50 text-center">--}}
{{--							<div class="col-lg-12 col-12">--}}
{{--								<div class="p-2">--}}
{{--									<h4 class="text-white mb-1">Last Login</h4>--}}
{{--									<p class="fs-14 mb-0">{{now()}}</p>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<!--end col-->--}}
{{--				--}}
{{--				</div>--}}
{{--				<!--end row-->--}}
{{--			</div>--}}
			
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">My Profile!</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								{{--                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>--}}
								<li class="breadcrumb-item active">Student Dashboard</li>
							</ol>
						</div>
					
					</div>
					
{{--					<div class="row mb-3 pb-1">--}}
{{--						<div class="col-12">--}}
{{--							<div class="d-flex align-items-lg-center flex-lg-row flex-column">--}}
{{--								--}}
{{--								<div class="flex-grow-1">--}}
{{--									--}}{{--									<h4 class="fs-16 mb-1">@include('layouts.student.greetings'), {{Auth::user()->studentProfile['first_name']}}!</h4>--}}
{{--									<p class="text-muted mb-0">View and update your profile details!</p>--}}
{{--								</div>--}}
{{--							--}}
{{--							</div><!-- end card header -->--}}
{{--						</div>--}}
{{--						<!--end col-->--}}
{{--					</div>--}}
					<!--end row-->
				
				
				</div>
			</div>
			<!-- end page title -->
			
			<div class="row">
				<div class="col-lg-12">
					
					<div class="card rounded-0 bg-soft-info border-top">
						<div class="px-4">
							<div class="row">
								<div class="col-xxl-5 align-self-center">
									<div class="py-4">
										<h4 class="display-6 coming-soon-text">My Profile</h4>
										<p class="text-info fs-15 mt-3">View and update your profile details!</p>
										<div class="hstack flex-wrap gap-2">
{{--											<button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>--}}
											{{--											<button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us Tweet</button>--}}
										</div>
									</div>
								</div>
								<div class="col-xxl-3 ms-auto">
									<div class="mb-n5 pb-1 faq-img d-none d-xxl-block">
										<img src="{{asset('app/assets/images/faq-img.png')}}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<!-- end card body -->
					</div>
					<!-- end card -->
					
					
					<div>
						<div class="d-flex">
							<!-- Nav tabs -->
							<ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
								<li class="nav-item">
									<a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
										<i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
										<i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Documents</span>
									</a>
								</li>
							</ul>
							{{--                            <div class="flex-shrink-0">--}}
							{{--                                <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>--}}
							{{--                            </div>--}}
						</div>
						<!-- Tab panes -->
						<div class="tab-content pt-4 text-muted">
							<div class="tab-pane active" id="overview-tab" role="tabpanel">
								<div class="row">
									<div class="col-xxl-3">
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title mb-3">Student Info</h3>
												<div class="table-responsive">
													<table class="table table-borderless mb-0">
														<tbody>
														<tr>
															<th class="ps-0" scope="row">Full Name :</th>
															<td class="text-muted">{{Auth::user()->studentProfile['first_name'].' '.Auth::user()->studentProfile['last_name'].' '.Auth::user()->studentProfile['other_name'] ?? null}}</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Mobile :</th>
															<td class="text-muted">{{Auth::user()->studentProfile['phone_primary'] ?? null}} | {{Auth::user()->studentProfile['phone_alternative'] ?? null}}</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">E-mail :</th>
															<td class="text-muted">{{Auth::user()->email ?? null}}</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Location :</th>
															<td class="text-muted">{{Auth::user()->studentProfile['residential_address'].', '.Auth::user()->studentProfile->profileCity['name'] ?? null}}</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Region :</th>
															<td class="text-muted">{{Auth::user()->studentProfile->profileRegion['name'] ?? null}}</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Nationality :</th>
															<td class="text-muted">{{Auth::user()->studentProfile->profileNational['official_name'] ?? null}}</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Joining Date</th>
															<td class="text-muted">{{Auth::user()->created_at->toDayDateTimeString() ?? null}}</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div><!-- end card body -->
										</div>
										<!-- end card -->
										
										<!--end card-->
									</div>
									<!--end col-->
									
									<div class="col-xxl-9">
										<div class="card">
											<div class="card-header">
												<ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
															<i class="fas fa-home"></i> Personal Details
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#academic" role="tab">
															<i class="far fa-envelope"></i> Academic Details
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
															<i class="far fa-user"></i> Change Password
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
															<i class="far fa-envelope"></i> Account Settings
														</a>
													</li>
												</ul>
											</div>
											
											<div class="card-body p-4">
												<div class="tab-content">
													<div class="tab-pane active" id="personalDetails" role="tabpanel">
														<form action="javascript:void(0);">
															<div class="row">
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="firstnameInput" class="form-label">First Name</label>
																		<input type="text" class="form-control" id="firstnameInput"
																					 placeholder="Enter your firstname"
																					 value="{{Auth::user()->studentProfile['first_name']}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="lastnameInput" class="form-label">Last Name</label>
																		<input type="text" class="form-control" id="lastnameInput"
																					 placeholder="Enter your lastname"
																					 value="{{Auth::user()->studentProfile['last_name']}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="lastnameInput" class="form-label">Other Name</label>
																		<input type="text" class="form-control" id="lastnameInput"
																					 placeholder="Enter your lastname"
																					 value="{{Auth::user()->studentProfile['other_name']}}" readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="phonenumberInput" class="form-label">Phone Number (Primary)</label>
																		<input type="text" class="form-control" id="phonenumberInput"
																					 placeholder="Enter your phone number"
																					 value="{{Auth::user()->studentProfile['phone_primary']}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="phonenumberInput" class="form-label">Phone Number (Alternative)</label>
																		<input type="text" class="form-control" id="phonenumberInput"
																					 placeholder="Enter your phone number"
																					 value="{{Auth::user()->studentProfile['phone_alternative']}}" readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="emailInput" class="form-label">Email Address</label>
																		<input type="email" class="form-control" id="emailInput"
																					 placeholder="Enter your email" value="{{Auth::user()->email}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																{{--                                                                <div class="col-lg-12">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="JoiningdatInput" class="form-label">Joining Date</label>--}}
																{{--                                                                        <input type="text" class="form-control" data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" data-deafult-date="24 Nov, 2021" placeholder="Select date" />--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																<!--end col-->
																{{--                                                                <div class="col-lg-12">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="skillsInput" class="form-label">Skills</label>--}}
																{{--                                                                        <select class="form-control" name="skillsInput" data-choices data-choices-text-unique-true multiple id="skillsInput">--}}
																{{--                                                                            <option value="illustrator">Illustrator</option>--}}
																{{--                                                                            <option value="photoshop">Photoshop</option>--}}
																{{--                                                                            <option value="css">CSS</option>--}}
																{{--                                                                            <option value="html">HTML</option>--}}
																{{--                                                                            <option value="javascript" selected>Javascript</option>--}}
																{{--                                                                            <option value="python">Python</option>--}}
																{{--                                                                            <option value="php">PHP</option>--}}
																{{--                                                                        </select>--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																<!--end col-->
																{{--                                                                <div class="col-lg-6">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="designationInput" class="form-label">Designation</label>--}}
																{{--                                                                        <input type="text" class="form-control" id="designationInput" placeholder="Designation" value="Lead Designer / Developer">--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																{{--                                                                <!--end col-->--}}
																{{--                                                                <div class="col-lg-6">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="websiteInput1" class="form-label">Website</label>--}}
																{{--                                                                        <input type="text" class="form-control" id="websiteInput1" placeholder="www.example.com" value="www.velzon.com" />--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="city_id" class="form-label">City/Township</label>
																	{{--											<input name="city" type="text" class="form-control" id="city" required placeholder="Enter Your CityTown of Residence">--}}
																	<select name="city_id" id="city_id" class="form-control" required readonly="">
																		<option value="{{Auth::user()->studentProfile->profileCity['id']}}" selected hidden>{{Auth::user()->studentProfile->profileCity['name']}}</option>
																		<?php
																		$cities = \App\Models\Setups\Location\CityTown::all()
																		?>
																		@foreach($cities as $city)
																			<option value="{{$city->id}}">{{$city->name}}</option>
																		@endforeach
																	</select>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="nationality_id" class="form-label">Nationality</label>
																		<select name="nationality_id" id="nationality_id" class="form-control" required readonly="">
																			<option value="{{Auth::user()->studentProfile->profileNational['uuid']}}" selected
																							hidden>{{Auth::user()->studentProfile->profileNational['official_name']}}</option>
																			<?php
																			$countries = \Lwwcas\LaravelCountries\Models\Country::all()
																			?>
																			@foreach($countries as $country)
																				<option value="{{$country->uuid}}">{{$country->name}}</option>
																			@endforeach
																		</select>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-12">
																	<div class="hstack gap-2 justify-content-end">
																		<button type="button" class="btn btn-primary">Request Edit</button>
{{--																		<button type="submit" class="btn btn-primary">Update</button>--}}
																	</div>
																</div>
																<!--end col-->
															</div>
															<!--end row-->
														</form>
													</div>
													<!--end tab-pane-->
													
													<div class="tab-pane" id="academic" role="tabpanel">
														<form action="javascript:void(0);">
															<div class="row">
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="firstnameInput" class="form-label">Your School</label>
																		<input type="text" class="form-control" id="firstnameInput"
																					 placeholder="Enter your firstname"
																					 value="{{Auth::user()->studentAcademic->academicSHS['name'] ?? null}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="lastnameInput" class="form-label">Last Name</label>
																		<input type="text" class="form-control" id="lastnameInput"
																					 placeholder="Enter your lastname"
																					 value="{{Auth::user()->studentProfile['last_name']}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="lastnameInput" class="form-label">Other Name</label>
																		<input type="text" class="form-control" id="lastnameInput"
																					 placeholder="Enter your lastname"
																					 value="{{Auth::user()->studentProfile['other_name']}}" readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="phonenumberInput" class="form-label">Phone Number (Primary)</label>
																		<input type="text" class="form-control" id="phonenumberInput"
																					 placeholder="Enter your phone number"
																					 value="{{Auth::user()->studentProfile['phone_primary']}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="phonenumberInput" class="form-label">Phone Number (Alternative)</label>
																		<input type="text" class="form-control" id="phonenumberInput"
																					 placeholder="Enter your phone number"
																					 value="{{Auth::user()->studentProfile['phone_alternative']}}" readonly>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="emailInput" class="form-label">Email Address</label>
																		<input type="email" class="form-control" id="emailInput"
																					 placeholder="Enter your email" value="{{Auth::user()->email}}" required readonly>
																	</div>
																</div>
																<!--end col-->
																{{--                                                                <div class="col-lg-12">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="JoiningdatInput" class="form-label">Joining Date</label>--}}
																{{--                                                                        <input type="text" class="form-control" data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" data-deafult-date="24 Nov, 2021" placeholder="Select date" />--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																<!--end col-->
																{{--                                                                <div class="col-lg-12">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="skillsInput" class="form-label">Skills</label>--}}
																{{--                                                                        <select class="form-control" name="skillsInput" data-choices data-choices-text-unique-true multiple id="skillsInput">--}}
																{{--                                                                            <option value="illustrator">Illustrator</option>--}}
																{{--                                                                            <option value="photoshop">Photoshop</option>--}}
																{{--                                                                            <option value="css">CSS</option>--}}
																{{--                                                                            <option value="html">HTML</option>--}}
																{{--                                                                            <option value="javascript" selected>Javascript</option>--}}
																{{--                                                                            <option value="python">Python</option>--}}
																{{--                                                                            <option value="php">PHP</option>--}}
																{{--                                                                        </select>--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																<!--end col-->
																{{--                                                                <div class="col-lg-6">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="designationInput" class="form-label">Designation</label>--}}
																{{--                                                                        <input type="text" class="form-control" id="designationInput" placeholder="Designation" value="Lead Designer / Developer">--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																{{--                                                                <!--end col-->--}}
																{{--                                                                <div class="col-lg-6">--}}
																{{--                                                                    <div class="mb-3">--}}
																{{--                                                                        <label for="websiteInput1" class="form-label">Website</label>--}}
																{{--                                                                        <input type="text" class="form-control" id="websiteInput1" placeholder="www.example.com" value="www.velzon.com" />--}}
																{{--                                                                    </div>--}}
																{{--                                                                </div>--}}
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="city_id" class="form-label">City/Township</label>
																		{{--											<input name="city" type="text" class="form-control" id="city" required placeholder="Enter Your CityTown of Residence">--}}
																		<select name="city_id" id="city_id" class="form-control" required readonly="">
																			<option value="{{Auth::user()->studentProfile->profileCity['id']}}" selected hidden>{{Auth::user()->studentProfile->profileCity['name']}}</option>
																			<?php
																			$cities = \App\Models\Setups\Location\CityTown::all()
																			?>
																			@foreach($cities as $city)
																				<option value="{{$city->id}}">{{$city->name}}</option>
																			@endforeach
																		</select>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div class="mb-3">
																		<label for="nationality_id" class="form-label">Nationality</label>
																		<select name="nationality_id" id="nationality_id" class="form-control" required readonly="">
																			<option value="{{Auth::user()->studentProfile->profileNational['uuid']}}" selected
																							hidden>{{Auth::user()->studentProfile->profileNational['official_name']}}</option>
																			<?php
																			$countries = \Lwwcas\LaravelCountries\Models\Country::all()
																			?>
																			@foreach($countries as $country)
																				<option value="{{$country->uuid}}">{{$country->name}}</option>
																			@endforeach
																		</select>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-12">
																	<div class="hstack gap-2 justify-content-end">
																		<button type="button" class="btn btn-primary">Request Edit</button>
																		{{--																		<button type="submit" class="btn btn-primary">Update</button>--}}
																	</div>
																</div>
																<!--end col-->
															</div>
															<!--end row-->
														</form>
													</div>
													<!--end tab-pane-->
													
													<div class="tab-pane" id="changePassword" role="tabpanel">
														<form action="javascript:void(0);">
															<div class="row g-2">
																<div class="col-lg-4">
																	<div>
																		<label for="oldpasswordInput" class="form-label">Old Password*</label>
																		<input type="password" class="form-control" id="oldpasswordInput"
																					 placeholder="Enter current password">
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div>
																		<label for="newpasswordInput" class="form-label">New Password*</label>
																		<input type="password" class="form-control" id="newpasswordInput"
																					 placeholder="Enter new password">
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-4">
																	<div>
																		<label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
																		<input type="password" class="form-control" id="confirmpasswordInput"
																					 placeholder="Confirm password">
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-12">
																	<div class="mb-3">
																		<a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot
																			Password ?</a>
																	</div>
																</div>
																<!--end col-->
																<div class="col-lg-12">
																	<div class="text-end">
																		<button type="submit" class="btn btn-success">Change Password</button>
																	</div>
																</div>
																<!--end col-->
															</div>
															<!--end row-->
														</form>
														<div class="mt-4 mb-3 border-bottom pb-2">
															<div class="float-end">
																<a href="javascript:void(0);" class="link-primary">All Logout</a>
															</div>
															<h5 class="card-title">Login History</h5>
														</div>
														<div class="d-flex align-items-center mb-3">
															<div class="flex-shrink-0 avatar-sm">
																<div class="avatar-title bg-light text-primary rounded-3 fs-18 shadow">
																	<i class="ri-smartphone-line"></i>
																</div>
															</div>
															<div class="flex-grow-1 ms-3">
																<h6>iPhone 12 Pro</h6>
																<p class="text-muted mb-0">Los Angeles, United States - March 16 at 2:47PM</p>
															</div>
															<div>
																<a href="javascript:void(0);">Logout</a>
															</div>
														</div>
														<div class="d-flex align-items-center mb-3">
															<div class="flex-shrink-0 avatar-sm">
																<div class="avatar-title bg-light text-primary rounded-3 fs-18 shadow">
																	<i class="ri-tablet-line"></i>
																</div>
															</div>
															<div class="flex-grow-1 ms-3">
																<h6>Apple iPad Pro</h6>
																<p class="text-muted mb-0">Washington, United States - November 06 at 10:43AM</p>
															</div>
															<div>
																<a href="javascript:void(0);">Logout</a>
															</div>
														</div>
														<div class="d-flex align-items-center mb-3">
															<div class="flex-shrink-0 avatar-sm">
																<div class="avatar-title bg-light text-primary rounded-3 fs-18 shadow">
																	<i class="ri-smartphone-line"></i>
																</div>
															</div>
															<div class="flex-grow-1 ms-3">
																<h6>Galaxy S21 Ultra 5G</h6>
																<p class="text-muted mb-0">Conneticut, United States - June 12 at 3:24PM</p>
															</div>
															<div>
																<a href="javascript:void(0);">Logout</a>
															</div>
														</div>
														<div class="d-flex align-items-center">
															<div class="flex-shrink-0 avatar-sm">
																<div class="avatar-title bg-light text-primary rounded-3 fs-18 shadow">
																	<i class="ri-macbook-line"></i>
																</div>
															</div>
															<div class="flex-grow-1 ms-3">
																<h6>Dell Inspiron 14</h6>
																<p class="text-muted mb-0">Phoenix, United States - July 26 at 8:10AM</p>
															</div>
															<div>
																<a href="javascript:void(0);">Logout</a>
															</div>
														</div>
													</div>
													<!--end tab-pane-->
													<div class="tab-pane" id="settings" role="tabpanel">
														{{--                                                        <div class="mb-4 pb-2">--}}
														{{--                                                            <h5 class="card-title text-decoration-underline mb-3">Security:</h5>--}}
														{{--                                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">--}}
														{{--                                                                <div class="flex-grow-1">--}}
														{{--                                                                    <h6 class="fs-14 mb-1">Two-factor Authentication</h6>--}}
														{{--                                                                    <p class="text-muted">Two-factor authentication is an enhanced security meansur. Once enabled, you'll be required to give two types of identification when you log into Google Authentication and SMS are Supported.</p>--}}
														{{--                                                                </div>--}}
														{{--                                                                <div class="flex-shrink-0 ms-sm-3">--}}
														{{--                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor Authentication</a>--}}
														{{--                                                                </div>--}}
														{{--                                                            </div>--}}
														{{--                                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">--}}
														{{--                                                                <div class="flex-grow-1">--}}
														{{--                                                                    <h6 class="fs-14 mb-1">Secondary Verification</h6>--}}
														{{--                                                                    <p class="text-muted">The first factor is a password and the second commonly includes a text with a code sent to your smartphone, or biometrics using your fingerprint, face, or retina.</p>--}}
														{{--                                                                </div>--}}
														{{--                                                                <div class="flex-shrink-0 ms-sm-3">--}}
														{{--                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up secondary method</a>--}}
														{{--                                                                </div>--}}
														{{--                                                            </div>--}}
														{{--                                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">--}}
														{{--                                                                <div class="flex-grow-1">--}}
														{{--                                                                    <h6 class="fs-14 mb-1">Backup Codes</h6>--}}
														{{--                                                                    <p class="text-muted mb-sm-0">A backup code is automatically generated for you when you turn on two-factor authentication through your iOS or Android Twitter app. You can also generate a backup code on twitter.com.</p>--}}
														{{--                                                                </div>--}}
														{{--                                                                <div class="flex-shrink-0 ms-sm-3">--}}
														{{--                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</a>--}}
														{{--                                                                </div>--}}
														{{--                                                            </div>--}}
														{{--                                                        </div>--}}
														{{--                                                        <div class="mb-3">--}}
														{{--                                                            <h5 class="card-title text-decoration-underline mb-3">Application Notifications:</h5>--}}
														{{--                                                            <ul class="list-unstyled mb-0">--}}
														{{--                                                                <li class="d-flex">--}}
														{{--                                                                    <div class="flex-grow-1">--}}
														{{--                                                                        <label for="directMessage" class="form-check-label fs-14">Direct messages</label>--}}
														{{--                                                                        <p class="text-muted">Messages from people you follow</p>--}}
														{{--                                                                    </div>--}}
														{{--                                                                    <div class="flex-shrink-0">--}}
														{{--                                                                        <div class="form-check form-switch">--}}
														{{--                                                                            <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked />--}}
														{{--                                                                        </div>--}}
														{{--                                                                    </div>--}}
														{{--                                                                </li>--}}
														{{--                                                                <li class="d-flex mt-2">--}}
														{{--                                                                    <div class="flex-grow-1">--}}
														{{--                                                                        <label class="form-check-label fs-14" for="desktopNotification">--}}
														{{--                                                                            Show desktop notifications--}}
														{{--                                                                        </label>--}}
														{{--                                                                        <p class="text-muted">Choose the option you want as your default setting. Block a site: Next to "Not allowed to send notifications," click Add.</p>--}}
														{{--                                                                    </div>--}}
														{{--                                                                    <div class="flex-shrink-0">--}}
														{{--                                                                        <div class="form-check form-switch">--}}
														{{--                                                                            <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked />--}}
														{{--                                                                        </div>--}}
														{{--                                                                    </div>--}}
														{{--                                                                </li>--}}
														{{--                                                                <li class="d-flex mt-2">--}}
														{{--                                                                    <div class="flex-grow-1">--}}
														{{--                                                                        <label class="form-check-label fs-14" for="emailNotification">--}}
														{{--                                                                            Show email notifications--}}
														{{--                                                                        </label>--}}
														{{--                                                                        <p class="text-muted"> Under Settings, choose Notifications. Under Select an account, choose the account to enable notifications for. </p>--}}
														{{--                                                                    </div>--}}
														{{--                                                                    <div class="flex-shrink-0">--}}
														{{--                                                                        <div class="form-check form-switch">--}}
														{{--                                                                            <input class="form-check-input" type="checkbox" role="switch" id="emailNotification" />--}}
														{{--                                                                        </div>--}}
														{{--                                                                    </div>--}}
														{{--                                                                </li>--}}
														{{--                                                                <li class="d-flex mt-2">--}}
														{{--                                                                    <div class="flex-grow-1">--}}
														{{--                                                                        <label class="form-check-label fs-14" for="chatNotification">--}}
														{{--                                                                            Show chat notifications--}}
														{{--                                                                        </label>--}}
														{{--                                                                        <p class="text-muted">To prevent duplicate mobile notifications from the Gmail and Chat apps, in settings, turn off Chat notifications.</p>--}}
														{{--                                                                    </div>--}}
														{{--                                                                    <div class="flex-shrink-0">--}}
														{{--                                                                        <div class="form-check form-switch">--}}
														{{--                                                                            <input class="form-check-input" type="checkbox" role="switch" id="chatNotification" />--}}
														{{--                                                                        </div>--}}
														{{--                                                                    </div>--}}
														{{--                                                                </li>--}}
														{{--                                                                <li class="d-flex mt-2">--}}
														{{--                                                                    <div class="flex-grow-1">--}}
														{{--                                                                        <label class="form-check-label fs-14" for="purchaesNotification">--}}
														{{--                                                                            Show purchase notifications--}}
														{{--                                                                        </label>--}}
														{{--                                                                        <p class="text-muted">Get real-time purchase alerts to protect yourself from fraudulent charges.</p>--}}
														{{--                                                                    </div>--}}
														{{--                                                                    <div class="flex-shrink-0">--}}
														{{--                                                                        <div class="form-check form-switch">--}}
														{{--                                                                            <input class="form-check-input" type="checkbox" role="switch" id="purchaesNotification" />--}}
														{{--                                                                        </div>--}}
														{{--                                                                    </div>--}}
														{{--                                                                </li>--}}
														{{--                                                            </ul>--}}
														{{--                                                        </div>--}}
														<div>
															<h5 class="card-title text-decoration-underline mb-3">Delete This Account:</h5>
															<p class="text-muted">Go to the Data & Privacy section of your profile Account. Scroll to
																"Your data & privacy options." Delete your Profile Account. Follow the instructions to
																delete your account :</p>
															<div>
																<input type="password" class="form-control" id="passwordInput"
																			 placeholder="Enter your password" value="make@321654987"
																			 style="max-width: 265px;">
															</div>
															<div class="hstack gap-2 mt-3">
																<a href="javascript:void(0);" class="btn btn-soft-danger">Close & Delete This
																	Account</a>
																<a href="javascript:void(0);" class="btn btn-light">Cancel</a>
															</div>
														</div>
													</div>
													<!--end tab-pane-->
												</div>
											</div>
											
										</div>
									</div>
									<!--end col-->
								
								</div>
								<!--end row-->
							</div>
							
							<!--end tab-pane-->
							<div class="tab-pane fade" id="documents" role="tabpanel">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center mb-4">
											<h5 class="card-title flex-grow-1 mb-0">Documents</h5>
											<div class="flex-shrink-0">
												<input class="form-control d-none" type="file" id="formFile">
												<label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i>
													Upload File</label>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="table-responsive">
													<table class="table table-borderless align-middle mb-0">
														<thead class="table-light">
														<tr>
															<th scope="col">File Name</th>
															<th scope="col">Type</th>
															<th scope="col">Size</th>
															<th scope="col">Upload Date</th>
															<th scope="col">Action</th>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="avatar-sm">
																		<div class="avatar-title bg-soft-danger text-danger rounded fs-20">
																			<i class="ri-file-pdf-fill"></i>
																		</div>
																	</div>
																	<div class="ms-3 flex-grow-1">
																		<h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank Management System</a></h6>
																	</div>
																</div>
															</td>
															<td>PDF File</td>
															<td>8.89 MB</td>
															<td>24 Nov 2021</td>
															<td>
																<div class="dropdown">
																	<a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3"
																		 data-bs-toggle="dropdown" aria-expanded="true">
																		<i class="ri-equalizer-fill"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
																		<li><a class="dropdown-item" href="javascript:void(0);"><i
																						class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
																		<li><a class="dropdown-item" href="javascript:void(0);"><i
																						class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
																		</li>
																		<li class="dropdown-divider"></li>
																		<li><a class="dropdown-item" href="javascript:void(0);"><i
																						class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="avatar-sm">
																		<div class="avatar-title bg-soft-success text-success rounded fs-20">
																			<i class="ri-file-excel-fill"></i>
																		</div>
																	</div>
																	<div class="ms-3 flex-grow-1">
																		<h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a></h6>
																	</div>
																</div>
															</td>
															<td>XSL File</td>
															<td>2.38 KB</td>
															<td>14 Nov 2021</td>
															<td>
																<div class="dropdown">
																	<a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5"
																		 data-bs-toggle="dropdown" aria-expanded="true">
																		<i class="ri-equalizer-fill"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
																		<li><a class="dropdown-item" href="javascript:void(0);"><i
																						class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
																		<li><a class="dropdown-item" href="javascript:void(0);"><i
																						class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
																		</li>
																		<li class="dropdown-divider"></li>
																		<li><a class="dropdown-item" href="javascript:void(0);"><i
																						class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</td>
														</tr>
														</tbody>
													</table>
												</div>
												{{--                                                <div class="text-center mt-3">--}}
												{{--                                                    <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>--}}
												{{--                                                </div>--}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
						<!--end tab-content-->
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		
		</div><!-- container-fluid -->
	</div><!-- End Page-content -->

</x-student.app-layout>
