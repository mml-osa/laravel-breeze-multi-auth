<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">Admin Accounts</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
								<li class="breadcrumb-item active">Manage</li>
							</ol>
						</div>
					
					</div>
				</div>
			</div>
			<!-- end page title -->
			
			{{--			<div class="alert alert-danger" role="alert">--}}
			{{--				This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!--}}
			{{--			</div>--}}
			
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0" style="float: left">Admin Accounts Datatable</h5>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create" style="float: right"><i class="ri-add-circle-line align-middle me-1"></i> Add New</button>
							<!--end col-->
						</div>
						
						<div class="card-body">
							<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
								<thead>
								<tr>
									<th data-ordering="false">Username</th>
									<th data-ordering="false">First Name</th>
									<th data-ordering="false">Last Name(s)</th>
									<th data-ordering="false">Phone</th>
									<th data-ordering="false">Email</th>
									<th data-ordering="false">Date Added</th>
									<th data-ordering="false">Account Setup</th>
									<th data-ordering="false">Account Status</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($admins as $admin)
									<tr>
										<td>{{$admin->username ?? null}}</td>
										<td>{{$admin->adminProfile['first_name'] ?? null}}</td>
										<td>{{$admin->adminProfile['last_name'] ?? null}} {{$admin->adminProfile['other_name'] ?? null}}</td>
										<td>{{$admin->adminProfile['phone'] ?? null}}</td>
										<td>{{$admin->email ?? null}}</td>
										<td>{{$admin->created_at->toDayDateTimeString() ?? null}}</td>
										<td class="m-auto" style="margin: auto">@if($admin->setup)
												<button type="button" class="btn rounded-pill btn-success btn-xs">Yes</button>
											@else
												<button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">No</button>
											@endif
										</td>
										<td class="m-auto" style="margin: auto">@if($admin->active)
												<button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#active{{$admin->id}}">Active</button>
											@else
												<button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#active{{$admin->id}}">Inactive
												</button>
											@endif
										</td>
										<td>
											<button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#update{{$admin->id}}"><i class="ri-pencil-line"></i></button>
											<button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{$admin->id}}"><i class="ri-delete-bin-line"></i></button>
											
											<!--  Update Record Modal -->
											<div class="modal fade" id="update{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$admin->adminProfile['first_name']}} {{$admin->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<form action="{{route('admin.users.update',$admin->id)}}" method="post">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="card">
																			<div class="card-header align-items-center d-flex bg-success">
																				<h4 class="card-title mb-0 m-auto text-white">Admin Details
																					- {{$admin->adminProfile['first_name'] ?? null}} {{$admin->adminProfile['last_name'] ?? null}}
																					[{{$admin->email ?? null}}]</h4>
																			</div><!-- end card header -->
																			<div class="card-body">
																				<div class="live-preview">
																					<div class="row gy-4">
																						
																						<div class="col-xxl-6 col-md-6">
																							<div>
																								<label for="placeholderInput" class="form-label">Username</label>
																								<input name="email" type="text" class="form-control" id="placeholderInput"
																											 placeholder="Enter Username" value="{{$admin->username ?? null}}"
																											 required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-6 col-md-6">
																							<div>
																								<label for="placeholderInput" class="form-label">Email Address</label>
																								<input name="email" type="text" class="form-control" id="placeholderInput"
																											 placeholder="Enter Email Address" value="{{$admin->email ?? null}}"
																											 required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-4 col-md-4">
																							<div>
																								<label for="first_name" class="form-label">First Name</label>
																								<input name="first_name" type="text" class="form-control" id="first_name"
																											 placeholder="Enter First Name"
																											 value="{{$admin->adminProfile['first_name'] ?? null}}" required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-4 col-md-4">
																							<div>
																								<label for="labelInput" class="form-label">Last Name</label>
																								<input name="last_name" type="text" class="form-control" id="labelInput"
																											 placeholder="Enter Last Name"
																											 value="{{$admin->adminProfile['last_name'] ?? null}}" required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-4 col-md-4">
																							<div>
																								<label for="placeholderInput" class="form-label">Other Name(s)</label>
																								<input name="other_name" type="text" class="form-control"
																											 id="placeholderInput" placeholder="Enter Other Name"
																											 value="{{$admin->adminProfile['other_name'] ?? null}}" required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-6 col-md-6">
																							<div>
																								<label for="placeholderInput" class="form-label">Phone Number</label>
																								<input name="phone" type="text" class="form-control" id="placeholderInput"
																											 placeholder="Enter Phone Number"
																											 value="{{$admin->adminProfile['phone'] ?? null}}" required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-6 col-md-6">
																							<div>
																								<label for="placeholderInput" class="form-label">User Role</label>
																								<input name="role" type="text" class="form-control" id="placeholderInput"
																											 placeholder="Enter User Role" value="{{$admin->role ?? null}}"
																											 required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-6 col-md-6">
																							<div>
																								<label for="placeholderInput" class="form-label">Date Added</label>
																								<input type="text" class="form-control"
																											 value="{{$admin->created_at->toDayDateTimeString() ?? null}}"
																											 readonly
																											 disabled required>
																							</div>
																						</div>
																						<!--end col-->
																						<div class="col-xxl-6 col-md-6">
																							<div>
																								<label for="input" class="form-label">Last Updated</label>
																								<input type="text" class="form-control"
																											 value="{{$admin->updated_at->toDayDateTimeString() ?? null}}"
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
																	<button type="submit" class="btn btn-success ">Update Account</button>
																</div>
															</form>
														
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Activate Record Modal -->
											<div class="modal fade" id="active{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$gender->adminProfile['first_name']}} {{$gender->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex @if(!$admin->active) bg-warning @else bg-info @endif">
																			<h4 class="card-title mb-0 m-auto text-white">@if(!$admin->active) Activate @else Deactivate @endif User - {{$admin->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5 class="mt-5">Are you sure you want to @if(!$admin->active) activate @else deactivate @endif this User.</h5>
																				
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
															<form class="form-horizontal" method="post" action="{{ route('admin.users.active',$admin->id) }}">
																@csrf
																@if($admin->active) <input type="hidden" name="active" value="0"> @else <input type="hidden" name="active" value="1"> @endif
																<a href="javascript:void(0);" class="btn btn-light fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> No</a>
																<button class="btn @if(!$admin->active) btn-warning @else btn-info @endif" type="submit">Yes</button>
															</form>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Delete Record Modal -->
											<div class="modal fade" id="delete{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$gender->adminProfile['first_name']}} {{$gender->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-danger">
																			<h4 class="card-title mb-0 m-auto text-white">Delete User - {{$admin->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5 class="mt-5">Are you sure you want to delete this User. <span class="text-danger"><p>THIS CANNOT BE UNDONE!!!</p></span></h5>
																				
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
															<form class="form-horizontal" method="post" action="{{ route('admin.users.destroy',$admin->id) }}">
																@csrf
																<a href="javascript:void(0);" class="btn btn-light fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>No</a>
																<button class="btn btn-danger" type="submit">Yes</button>
															</form>
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
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$admin->adminProfile['first_name']}} {{$admin->adminProfile['last_name']}}]</h5>--}}
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											
											<form method="POST" action="{{route('admin.users.create')}}">
												@csrf
												<div class="row">
													<div class="col-lg-12">
														<div class="card">
															<div class="card-header align-items-center d-flex bg-primary">
																<h4 class="card-title mb-0 m-auto text-white">New Admin Account</h4>
															</div><!-- end card header -->
															<div class="card-body">
																<div class="live-preview">
																	<div class="row gy-4">
																		
																		<div class="col-xxl-12 col-md-12">
																			<div>
																				<label for="email" class="form-label">Email Address</label>
																				<input name="email" type="email" class="form-control" id="email" required
																							 autofocus>
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
													<button type="submit" class="btn btn-primary ">Create</button>
												</div>
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
