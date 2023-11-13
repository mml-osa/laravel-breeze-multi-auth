<x-student.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">Find My University</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								{{--                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>--}}
								<li class="breadcrumb-item active">Student Dashboard</li>
							</ol>
						</div>
					
					</div>
					
					<div class="row mb-3 pb-1">
						<div class="col-12">
							<div class="d-flex align-items-lg-center flex-lg-row flex-column">
								
								<div class="flex-grow-1">
{{--									<h4 class="fs-16 mb-1">@include('layouts.student.greetings'), {{Auth::user()->studentProfile['first_name']}}!</h4>--}}
									<p class="text-muted mb-0">Find the university that is looking for your qualification!</p>
								</div>
								
							</div><!-- end card header -->
						</div>
						<!--end col-->
					</div>
					<!--end row-->
					
					
				</div>
			</div>
			<!-- end page title -->
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4 col-xl-3">
					<div class="card mt-4">
						
						<div class="card-body p-4">
							<div class="mb-4">
								<div class="avatar-lg mx-auto">
									<div class="avatar-title bg-light text-primary display-5 rounded-circle">
										<i class="ri-mail-line"></i>
									</div>
								</div>
							</div>
							
							<div class="p-2 mt-4">
								<div class="text-muted text-center mb-4 mx-lg-3">
									<h4>Verify Your Check Code</h4>
									<p>Please enter the 6-digit check code sent to your email or phone number to continue</p>
								</div>
								
								<form>
									<div class="row">
										<div class="col-2">
											<div class="mb-3">
												<label for="digit1-input" class="visually-hidden">Dight 1</label>
												<input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(this, 2)" maxLength="1" id="digit1-input">
											</div>
										</div><!-- end col -->
										
										<div class="col-2">
											<div class="mb-3">
												<label for="digit2-input" class="visually-hidden">Dight 2</label>
												<input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(this, 3)" maxLength="1" id="digit2-input">
											</div>
										</div><!-- end col -->
										
										<div class="col-2">
											<div class="mb-3">
												<label for="digit3-input" class="visually-hidden">Dight 3</label>
												<input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(this, 4)" maxLength="1" id="digit3-input">
											</div>
										</div><!-- end col -->
										
										<div class="col-2">
											<div class="mb-3">
												<label for="digit4-input" class="visually-hidden">Dight 4</label>
												<input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(this, 5)" maxLength="1" id="digit4-input">
											</div>
										</div><!-- end col -->
										
										<div class="col-2">
											<div class="mb-3">
												<label for="digit5-input" class="visually-hidden">Dight 5</label>
												<input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(this, 6)" maxLength="1" id="digit5-input">
											</div>
										</div><!-- end col -->
										
										<div class="col-2">
											<div class="mb-3">
												<label for="digit6-input" class="visually-hidden">Dight 6</label>
												<input type="text" class="form-control form-control-lg bg-light border-light text-center" onkeyup="moveToNext(this, 6)" maxLength="1" id="digit6-input">
											</div>
										</div><!-- end col -->
									</div>
								</form><!-- end form -->
								
								<div class="mt-3">
									<button type="button" class="btn btn-success w-100">Confirm</button>
								</div>
							</div>
						</div>
						<!-- end card body -->
					</div>
					<!-- end card -->
					
					<div class="mt-4 text-center">
						<p class="mb-0">Don't have a check code? <a href="#." class="fw-semibold text-primary text-decoration-underline">Get one now</a> </p>
					</div>
				
				</div>
			</div>
			<!-- end row -->
			
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->

</x-student.app-layout>