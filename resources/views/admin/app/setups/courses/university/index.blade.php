<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">Senior High Core Subjects</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Setups</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Courses</a></li>
								<li class="breadcrumb-item active">Senior High</li>
							</ol>
						</div>
					
					</div>
				</div>
			</div>
			<!-- end page title -->
			
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0" style="float: left">Senior High Core Subjects</h5>
							<button type="button" class="btn btn-soft-info" data-bs-toggle="modal" data-bs-target="#createCourse"
											style="float: right"><i class="ri-add-circle-line align-middle me-1"></i> Add New
							</button>
							<!--end col-->
						</div>
						
						<div class="card-body">
							<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
										 style="width:100%">
								<thead>
								<tr>
									<th data-ordering="false">Course</th>
									<th data-ordering="false">Description</th>
									<th data-ordering="false">Active</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($universityCourses as $universityCourse)
									<tr>
										<td>{{$universityCourse->name ?? null}}</td>
										<td>{{$universityCourse->description ?? null}}</td>
										<td class="m-auto" style="margin: auto">@if($universityCourse->active)
												<button type="button" class="btn rounded-pill btn-success btn-xs">Yes</button>
											@else
												<button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">No</button>
											@endif
										</td>
										<td>
											<button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editAdmin{{$universityCourse->id}}"><i class="ri-pencil-line"></i></button>
											<button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteAdmin{{$universityCourse->id}}"><i class="ri-delete-bin-line"></i></button>
											
											<!--  Extra Large modal example -->
											<div class="modal fade" id="editAdmin{{$universityCourse->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityCourse->adminProfile['first_name']}} {{$universityCourse->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-success">
																			<h4 class="card-title mb-0 m-auto text-white">University Details
																				- {{$universityCourse->name['first_name'] ?? null}} </h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Username</label>
																							<input name="email" type="text" class="form-control" id="placeholderInput"
																										 placeholder="Enter Username"
																										 value="{{$universityCourse->name ?? null}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Email Address</label>
																							<input name="email" type="text" class="form-control" id="placeholderInput"
																										 placeholder="Enter Email Address"
																										 value="{{$universityCourse->description ?? null}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Date Added</label>
																							<input type="text" class="form-control"
																										 value="{{$universityCourse->created_at->toDayDateTimeString() ?? null}}" readonly disabled required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="input" class="form-label">Last Updated</label>
																							<input type="text" class="form-control"
																										 value="{{$universityCourse->updated_at->toDayDateTimeString() ?? null}}" readonly disabled required>
																						</div>
																					</div>
																					<!--end col-->
																				</div>
																				<!--end row-->
																			</div>
																		
																		</div>
																	</div>
																</div>
																<!--end col-->
															</div>
															<!--end row-->
															
															<div class="modal-footer">
																<a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
																	 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
																<button type="button" class="btn btn-success ">Update University Record</button>
															</div>
														
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Extra Large modal example -->
											<div class="modal fade" id="deleteAdmin{{$universityCourse->id}}" tabindex="-1" role="dialog"
													 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityCourse->adminProfile['first_name']}} {{$universityCourse->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal"
																			aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-danger">
																			<h4 class="card-title mb-0 m-auto text-white">Delete University Record - {{$universityCourse->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5 class="mt-5">Are you sure you want to delete this account. <span
																								class="text-danger">THIS CANNOT BE UNDONE!!!</span></h5>
																				
																				</div>
																				<!--end row-->
																			</div>
																		
																		</div>
																	</div>
																</div>
																<!--end col-->
															</div>
															<!--end row-->
														
														</div>
														<div class="modal-footer">
															<a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
																 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
															<a href="{{route('admin.setups.senior-high-cores.destroy',$universityCourse->id)}}" class="btn btn-danger">Delete Account</a>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							
							<!--  Extra Large modal example -->
							<div class="modal fade" id="createCourse" tabindex="-1" role="dialog"
									 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityCourse->adminProfile['first_name']}} {{$universityCourse->adminProfile['last_name']}}]</h5>--}}
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											
											<form method="POST" action="{{route('admin.setups.senior-high-cores.store')}}">
												@csrf
												<div class="row">
													<div class="col-lg-12">
														<div class="card">
															<div class="card-header align-items-center d-flex bg-primary">
																<h4 class="card-title mb-0 m-auto text-white">Add New Course</h4>
															</div><!-- end card header -->
															
															<div class="card-body">
																<div class="live-preview">
																	<div class="row gy-4">
																		
																		<div class="col-xxl-12 col-md-12">
																			<div>
																				<label for="name" class="form-label">Name of School</label>
																				<input name="name" type="text" class="form-control" id="name" placeholder="Enter Course Name" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-12 col-md-12">
																			<div>
																				<label for="description" class="form-label">Description</label>
																				<textarea class="form-control" name="description" id="description" rows="10" placeholder="Enter Description"></textarea>
																			</div>
																		</div>
																		<!--end col-->
																	
																	</div>
																	<!--end row-->
																</div>
															</div>
															<!--end row-->
															
															<div class="modal-footer">
																<a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
																	 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
																<button type="submit" class="btn btn-primary ">Save</button>
															</div>
														
														</div>
													</div>
													<!--end col-->
												</div>
												<!--end row-->
											</form>
										
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						
						</div>
					
					</div>
				</div><!--end col-->
			</div><!--end row-->
		
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->

</x-admin.app-layout>