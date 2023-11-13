<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			<div class="profile-foreground position-relative mx-n4 mt-n4">
				<div class="profile-wid-bg">
					<img src="{{asset('app/assets/images/profile-bg.jpg')}}" alt="" class="profile-wid-img" />
				</div>
			</div>
			<div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
				<div class="row g-4">
					<div class="col-auto">
						<div class="avatar-lg">
							<img src="{{asset('app/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-thumbnail rounded-circle" />
						</div>
					</div>
					<!--end col-->
					<div class="col">
						<div class="p-2">
							<h3 class="text-white mb-1">{{Auth::user()->adminProfile['first_name'] ?? null}} {{Auth::user()->adminProfile['last_name'] ?? null}}</h3>
							<p class="text-white-75">Administrator</p>
						</div>
					</div>
					<!--end col-->
					<div class="col-12 col-lg-auto order-last order-lg-0">
						<div class="row text text-white-50 text-center">
							<div class="col-lg-12 col-4">
								<div class="p-2">
									<h4 class="text-white mb-1">Last Login</h4>
									<p class="fs-14 mb-0">{{now()}}</p>
								</div>
							</div>
						</div>
					</div>
					<!--end col-->
				
				</div>
				<!--end row-->
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div>
			
						<!-- Tab panes -->
						<div class="tab-content pt-4 text-muted">
							<div class="tab-pane active" id="overview-tab" role="tabpanel">
								<div class="row">
									<div class="col-xxl-3">
							
										
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-3">Info</h5>
												<div class="table-responsive">
													<table class="table table-borderless mb-0">
														<tbody>
														<tr>
															<th class="ps-0" scope="row">Full Name :</th>
															<td class="text-muted">Anna Adame</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Mobile :</th>
															<td class="text-muted">+(1) 987 6543</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">E-mail :</th>
															<td class="text-muted">daveadame@velzon.com</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Location :</th>
															<td class="text-muted">California, United States
															</td>
														</tr>
														<tr>
															<th class="ps-0" scope="row">Joining Date</th>
															<td class="text-muted">24 Nov 2021</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div><!-- end card body -->
										</div><!-- end card -->
										
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Portfolio</h5>
												<div class="d-flex flex-wrap gap-2">
													<div>
														<a href="javascript:void(0);" class="avatar-xs d-block">
                                                                    <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                                        <i class="ri-github-fill"></i>
                                                                    </span>
														</a>
													</div>
													<div>
														<a href="javascript:void(0);" class="avatar-xs d-block">
                                                                    <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                                        <i class="ri-global-fill"></i>
                                                                    </span>
														</a>
													</div>
													<div>
														<a href="javascript:void(0);" class="avatar-xs d-block">
                                                                    <span class="avatar-title rounded-circle fs-16 bg-success">
                                                                        <i class="ri-dribbble-fill"></i>
                                                                    </span>
														</a>
													</div>
													<div>
														<a href="javascript:void(0);" class="avatar-xs d-block">
                                                                    <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                                        <i class="ri-pinterest-fill"></i>
                                                                    </span>
														</a>
													</div>
												</div>
											</div><!-- end card body -->
										</div><!-- end card -->
							
									</div>
									<!--end col-->
									<div class="col-xxl-9">
				
										<div class="row">
											<div class="col-lg-12">
												
													<div class="card">
														<div class="card-header">
															<ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
																<li class="nav-item">
																	<a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
																		<i class="fas fa-home"></i> Personal Details
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
																		<i class="far fa-user"></i> Change Password
																	</a>
																</li>
																
															</ul>
														</div>
														<div class="card-body p-4">
															<div class="tab-content">
																<div class="tab-pane active" id="personalDetails" role="tabpanel">
																	<form action="javascript:void(0);">
																		<div class="row">
																			<div class="col-lg-6">
																				<div class="mb-3">
																					<label for="firstnameInput" class="form-label">First Name</label>
																					<input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="Dave">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-6">
																				<div class="mb-3">
																					<label for="lastnameInput" class="form-label">Last Name</label>
																					<input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="Adame">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-6">
																				<div class="mb-3">
																					<label for="phonenumberInput" class="form-label">Phone Number</label>
																					<input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="+(1) 987 6543">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-6">
																				<div class="mb-3">
																					<label for="emailInput" class="form-label">Email Address</label>
																					<input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="daveadame@velzon.com">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-12">
																				<div class="mb-3">
																					<label for="JoiningdatInput" class="form-label">Joining Date</label>
																					<input type="text" class="form-control" data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" data-deafult-date="24 Nov, 2021" placeholder="Select date" />
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-12">
																				<div class="mb-3">
																					<label for="skillsInput" class="form-label">Skills</label>
																					<select class="form-control" name="skillsInput" data-choices data-choices-text-unique-true multiple id="skillsInput">
																						<option value="illustrator">Illustrator</option>
																						<option value="photoshop">Photoshop</option>
																						<option value="css">CSS</option>
																						<option value="html">HTML</option>
																						<option value="javascript" selected>Javascript</option>
																						<option value="python">Python</option>
																						<option value="php">PHP</option>
																					</select>
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-6">
																				<div class="mb-3">
																					<label for="designationInput" class="form-label">Designation</label>
																					<input type="text" class="form-control" id="designationInput" placeholder="Designation" value="Lead Designer / Developer">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-6">
																				<div class="mb-3">
																					<label for="websiteInput1" class="form-label">Website</label>
																					<input type="text" class="form-control" id="websiteInput1" placeholder="www.example.com" value="www.velzon.com" />
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-4">
																				<div class="mb-3">
																					<label for="cityInput" class="form-label">City</label>
																					<input type="text" class="form-control" id="cityInput" placeholder="City" value="California" />
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-4">
																				<div class="mb-3">
																					<label for="countryInput" class="form-label">Country</label>
																					<input type="text" class="form-control" id="countryInput" placeholder="Country" value="United States" />
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-4">
																				<div class="mb-3">
																					<label for="zipcodeInput" class="form-label">Zip Code</label>
																					<input type="text" class="form-control" minlength="5" maxlength="6" id="zipcodeInput" placeholder="Enter zipcode" value="90011">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-12">
																				<div class="mb-3 pb-2">
																					<label for="exampleFormControlTextarea" class="form-label">Description</label>
																					<textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter your description" rows="3">Hi I'm Anna Adame,It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</textarea>
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-12">
																				<div class="hstack gap-2 justify-content-end">
																					<button type="submit" class="btn btn-primary">Updates</button>
																					<button type="button" class="btn btn-soft-success">Cancel</button>
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
																					<input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-4">
																				<div>
																					<label for="newpasswordInput" class="form-label">New Password*</label>
																					<input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-4">
																				<div>
																					<label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
																					<input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
																				</div>
																			</div>
																			<!--end col-->
																			<div class="col-lg-12">
																				<div class="mb-3">
																					<a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot Password ?</a>
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
																			<div class="avatar-title bg-light text-primary rounded-3 fs-18">
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
																			<div class="avatar-title bg-light text-primary rounded-3 fs-18">
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
																			<div class="avatar-title bg-light text-primary rounded-3 fs-18">
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
																			<div class="avatar-title bg-light text-primary rounded-3 fs-18">
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
															</div>
														</div>
													</div>
											
												<!--end col-->
												
											</div><!-- end col -->
										</div><!-- end row -->
									
									</div>
									<!--end col-->
								</div>
								<!--end row-->
							</div>
						
						</div>
						<!--end tab-content-->
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		
		</div><!-- container-fluid -->
	</div><!-- End Page-content -->

</x-admin.app-layout>
