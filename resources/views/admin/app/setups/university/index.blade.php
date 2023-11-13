<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">GH Universities</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Setups</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Schools</a></li>
								<li class="breadcrumb-item active">Universities</li>
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
							<h5 class="card-title mb-0" style="float: left">Universities Datatable</h5>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"
											style="float: right"><i class="ri-add-circle-line align-middle me-1"></i> Add New
							</button>
							<!--end col-->
						</div>
						
						<div class="card-body">
							<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
										 style="width:100%">
								<thead>
								<tr>
									<th data-ordering="false">School</th>
									<th data-ordering="false">Category</th>
									<th data-ordering="false">Location</th>
									<th data-ordering="false">Email</th>
									<th data-ordering="false">Phone</th>
									<th data-ordering="false">Active</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($universities as $university)
									<tr>
										<td>{{$university->name ?? null}}</td>
										<td>{{$university->name ?? null}}</td>
										<td>{{$university->address ?? null}} {{$university->adminProfile['other_name'] ?? null}}</td>
										<td>{{$university->email ?? null}}</td>
										<td>{{$university->phone ?? null}}</td>
										<td class="m-auto" style="margin: auto">@if($university->active)
												<button type="button" class="btn rounded-pill btn-success btn-xs">Yes</button>
											@else
												<button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">No</button>
											@endif
										</td>
										<td>
											<button type="button" class="btn btn-success " data-bs-toggle="modal"
															data-bs-target="#editAdmin{{$university->id}}"><i class="ri-pencil-line"></i></button>
											<button type="button" class="btn btn-danger " data-bs-toggle="modal"
															data-bs-target="#deleteAdmin{{$university->id}}"><i class="ri-delete-bin-line"></i>
											</button>
											
											<!--  Extra Large modal example -->
											<div class="modal fade" id="editAdmin{{$university->id}}" tabindex="-1" role="dialog"
													 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$university->adminProfile['first_name']}} {{$university->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal"
																			aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-success">
																			<h4 class="card-title mb-0 m-auto text-white">University Details
																				- {{$university->adminProfile['first_name'] ?? null}} {{$university->adminProfile['last_name'] ?? null}}
																				[{{$university->email ?? null}}]</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Username</label>
																							<input name="email" type="text" class="form-control" id="placeholderInput"
																										 placeholder="Enter Username"
																										 value="{{$university->username ?? null}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Email Address</label>
																							<input name="email" type="text" class="form-control" id="placeholderInput"
																										 placeholder="Enter Email Address"
																										 value="{{$university->email ?? null}}"
																										 required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-4 col-md-4">
																						<div>
																							<label for="first_name" class="form-label">First Name</label>
																							<input name="first_name" type="text" class="form-control" id="first_name"
																										 placeholder="Enter First Name"
																										 value="{{$university->adminProfile['first_name'] ?? null}}"
																										 required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-4 col-md-4">
																						<div>
																							<label for="labelInput" class="form-label">Last Name</label>
																							<input name="last_name" type="text" class="form-control" id="labelInput"
																										 placeholder="Enter Last Name"
																										 value="{{$university->adminProfile['last_name'] ?? null}}"
																										 required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-4 col-md-4">
																						<div>
																							<label for="placeholderInput" class="form-label">Other Name(s)</label>
																							<input name="other_name" type="text" class="form-control"
																										 id="placeholderInput" placeholder="Enter Other Name"
																										 value="{{$university->adminProfile['other_name'] ?? null}}"
																										 required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Phone Number</label>
																							<input name="phone" type="text" class="form-control" id="placeholderInput"
																										 placeholder="Enter Phone Number"
																										 value="{{$university->adminProfile['phone'] ?? null}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">User Role</label>
																							<input name="role" type="text" class="form-control" id="placeholderInput"
																										 placeholder="Enter User Role" value="{{$university->role ?? null}}"
																										 required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Date Added</label>
																							<input type="text" class="form-control"
																										 value="{{$university->created_at->toDayDateTimeString() ?? null}}"
																										 readonly
																										 disabled required>
																						</div>
																					</div>
																					<!--end col-->
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="input" class="form-label">Last Updated</label>
																							<input type="text" class="form-control"
																										 value="{{$university->updated_at->toDayDateTimeString() ?? null}}"
																										 readonly
																										 disabled required>
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
											<div class="modal fade" id="deleteAdmin{{$university->id}}" tabindex="-1" role="dialog"
													 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$university->adminProfile['first_name']}} {{$university->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal"
																			aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-danger">
																			<h4 class="card-title mb-0 m-auto text-white">Delete University Record
																				- {{$university->adminProfile['first_name'] ?? null}} {{$university->adminProfile['last_name'] ?? null}}
																				[{{$university->email ?? null}}]</h4>
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
															<a href="{{route('admin.users.destroy',$university->id)}}" class="btn btn-danger">Delete
																Account</a>
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
							<div class="modal fade" id="create" tabindex="-1" role="dialog"
									 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content">
										<div class="modal-header">
											{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$university->adminProfile['first_name']}} {{$university->adminProfile['last_name']}}]</h5>--}}
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											
											<form method="POST" action="{{route('admin.setups.university.store')}}">
												@csrf
												<div class="row">
													<div class="col-lg-12">
														<div class="card">
															<div class="card-header align-items-center d-flex bg-primary">
																<h4 class="card-title mb-0 m-auto text-white">Add New School</h4>
															</div><!-- end card header -->
															
															<div class="card-body">
																<div class="live-preview">
																	<div class="row gy-4">
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="name" class="form-label">Name of School</label>
																				<input name="name" type="text" class="form-control" id="name"
																							 placeholder="Enter School Name" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<label for="category_id" class="form-label">School Category</label>
																			<select name="category_id" id="category_id" class="form-control" required>
																				<option value="" selected hidden>Select...</option>
																				<?php
																				$uniCategories = \App\Models\Setups\University\UniversityCategory::all()
																				?>
																				@foreach($uniCategories as $uniCategory)
																					<option value="{{$uniCategory->id}}">{{$uniCategory->name}}</option>
																				@endforeach
																			</select>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="address" class="form-label">Address</label>
																				<input name="address" type="text" class="form-control" id="address" placeholder="Enter School Address" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<label for="city_id" class="form-label">School City/Township</label>
																			<select name="city_id" id="city_id" class="form-control" required>
																				<option value="" selected hidden>Select...</option>
																				<?php
																				$cities = \App\Models\Setups\Location\CityTown::all()
																				?>
																				@foreach($cities as $city)
																					<option value="{{$city->id}}">{{$city->name}}</option>
																				@endforeach
																			</select>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<label for="region_id" class="form-label">School Region</label>
																			<select name="region_id" id="region_id" class="form-control" required>
																				<option value="" selected hidden>Select...</option>
																				<?php
																				$regions = \App\Models\Setups\Location\RegionNew::all()
																				?>
																				@foreach($regions as $region)
																					<option value="{{$region->id}}">{{$region->name}}</option>
																				@endforeach
																			</select>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="placeholderInput" class="form-label">Email Address</label>
																				<input name="email" type="text" class="form-control" id="placeholderInput"
																							 placeholder="Enter Email Address" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="phone" class="form-label">Phone Number</label>
																				<input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone Number" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="contact_name" class="form-label">Contact Name</label>
																				<input name="contact_name" type="text" class="form-control" id="contact_name"
																							 placeholder="Enter Contact Name" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="contact_email" class="form-label">Contact Email Address</label>
																				<input name="contact_email" type="text" class="form-control" id="contact_email"
																							 placeholder="Enter Contact Email Address" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="contact_phone" class="form-label">Contact Phone Number</label>
																				<input name="contact_phone" type="text" class="form-control" id="contact_phone"
																							 placeholder="Enter Contact Phone Number" required>
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