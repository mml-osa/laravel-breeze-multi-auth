<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">City/Town Setup Data</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Setups</a></li>
								<li class="breadcrumb-item active">City/Town</li>
							</ol>
						</div>
					
					</div>
				</div>
			</div>
			<!-- end page title -->
			
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header p-3">
							<h5 class="card-title mb-0" style="float: left">City/Town Record Table</h5>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create" style="float: right"><i class="ri-add-circle-line align-middle me-1"></i> Add New</button>
							<!--end col-->
						</div>
						
						<div class="card-body">
							<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width:100%">
								<thead>
								<tr>
									<th data-ordering="false">City/Town Name</th>
									<th data-ordering="false">Active</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($cityTowns as $cityTown)
									<tr>
										<td>{{$cityTown->name ?? null}}</td>
										<td class="m-auto" style="margin: auto">@if($cityTown->active)
												<button type="button" class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#active{{$cityTown->id}}">Yes</button>
											@else
												<button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#active{{$cityTown->id}}">No</button>
											@endif
										</td>
										<td>
											<button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#update{{$cityTown->id}}"><i class="ri-pencil-line"></i></button>
											<button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{$cityTown->id}}"><i class="ri-delete-bin-line"></i></button>
											
											<!--  Update Record Modal -->
											<div class="modal fade" id="update{{$cityTown->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$cityTown->adminProfile['first_name']}} {{$cityTown->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<form method="POST" action="{{route('admin.setups.city-town.update',$cityTown->id)}}">
																@csrf
																
																<div class="row">
																	<div class="col-lg-12">
																		<div class="card">
																			<div class="card-header align-items-center d-flex bg-success">
																				<h4 class="card-title mb-0 m-auto text-white">Record Details - {{$cityTown->name ?? null}} </h4>
																			</div><!-- end card header -->
																			<div class="card-body">
																				<div class="live-preview">
																					<div class="row gy-4">
																						
																						<div class="col-xxl-12 col-md-12">
																							<div>
																								<label for="name" class="form-label">City/Town Name</label>
																								<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter City" value="{{ $cityTown->name ?? old($cityTown->name) ?? null}}" required>
																								@error('name')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
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
																	<a href="javascript:void(0);" class="btn btn-light fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cancel</a>
																	<button type="submit" class="btn btn-success ">Update Record</button>
																</div>
															
															</form>
														
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Activate Record Modal -->
											<div class="modal fade" id="active{{$cityTown->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$cityTown->adminProfile['first_name']}} {{$cityTown->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex @if(!$cityTown->active) bg-warning @else bg-info @endif">
																			<h4 class="card-title mb-0 m-auto text-white">@if(!$cityTown->active) Activate @else Deactivate @endif Record - {{$cityTown->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5 class="mt-5">Are you sure you want to @if(!$cityTown->active) activate @else deactivate @endif this record.</h5>
																				
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
															<form class="form-horizontal" method="post" action="{{ route('admin.setups.city-town.active',$cityTown->id) }}">
																@csrf
																@if($cityTown->active) <input type="hidden" name="active" value="0"> @else <input type="hidden" name="active" value="1"> @endif
																<a href="javascript:void(0);" class="btn btn-light fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> No</a>
																<button class="btn @if(!$cityTown->active) btn-warning @else btn-info @endif" type="submit">Yes</button>
															</form>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Delete Record Modal -->
											<div class="modal fade" id="delete{{$cityTown->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$cityTown->adminProfile['first_name']}} {{$cityTown->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-danger">
																			<h4 class="card-title mb-0 m-auto text-white">Delete Record - {{$cityTown->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5 class="mt-5">Are you sure you want to delete this record. <span class="text-danger"><p>THIS CANNOT BE UNDONE!!!</p></span></h5>
																				
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
															<form class="form-horizontal" method="post" action="{{ route('admin.setups.city-town.destroy',$cityTown->id) }}">
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
							
							<!--  Add New Modal -->
							<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$cityTown->adminProfile['first_name']}} {{$cityTown->adminProfile['last_name']}}]</h5>--}}
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											
											{{--											<iframe style="overflow: hidden" src="{{route('admin.setups.gender.create')}}" frameborder="0" width="100%" height="520"></iframe>--}}
											<form method="POST" action="{{route('admin.setups.city-town.store')}}">
												@csrf
												
												<div class="row">
													<div class="col-lg-12">
														<div class="card">
															<div class="card-header align-items-center d-flex bg-primary">
																<h4 class="card-title mb-0 m-auto text-white">Add New</h4>
															</div><!-- end card header -->
															
															<div class="card-body">
																<div class="live-preview">
																	<div class="row gy-4">
																		
																		<div class="col-xxl-12 col-md-12">
																			<div>
																				<label for="name" class="form-label">City/Town Name</label>
																				<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Gender" required>
																				@error('name')<span class="error-feedback text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
																			</div>
																		</div>
																		<!--end col-->
																	
																	</div>
																	<!--end row-->
																</div>
															</div>
															<!--end row-->
															
															<div class="modal-footer">
																<a href="javascript:void(0);" class="btn btn-light fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cancel</a>
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