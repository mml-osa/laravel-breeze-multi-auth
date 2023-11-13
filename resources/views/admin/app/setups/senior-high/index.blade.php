<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">Senior High Schools</h4>
						
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Setups</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Schools</a></li>
								<li class="breadcrumb-item active">Senior High Schools</li>
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
							<h5 class="card-title mb-0" style="float: left">Senior High Schools Datatable</h5>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create" style="float: right"><i class="ri-add-circle-line align-middle me-1"></i> Add New</button>
							<!--end col-->
						</div>
						
						<div class="card-body">
							<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
								<thead>
								<tr>
									<th data-ordering="false">School</th>
									<th data-ordering="false">Category</th>
									<th data-ordering="false">Location</th>
									<th data-ordering="false">City/Town</th>
									<th data-ordering="false">Email</th>
									<th data-ordering="false">Phone</th>
									<th data-ordering="false">Active</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($seniorHighs as $seniorHigh)
									<tr>
										<td>{{$seniorHigh->name ?? null}}</td>
										<td>{{$seniorHigh->category['name'] ?? null}}</td>
										<td>{{$seniorHigh->address ?? null}}</td>
										<td>{{$seniorHigh->city['name'] ?? null}}</td>
										<td>{{$seniorHigh->email ?? null}}</td>
										<td>{{$seniorHigh->phone ?? null}}</td>
										<td class="m-auto" style="margin: auto">@if($seniorHigh->active)
												<button type="button" class="btn btn-info waves-effect btn-xs" data-bs-toggle="modal" data-bs-target="#active{{$seniorHigh->id}}">Yes</button>
											@else
												<button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#active{{$seniorHigh->id}}">No</button>
											@endif
										</td>
										<td>
											<button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#update{{$seniorHigh->id}}"><i class="ri-pencil-line"></i></button>
											<button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{$seniorHigh->id}}"><i class="ri-delete-bin-line"></i></button>
											
											<!--  Update Record Modal -->
											<div class="modal fade" id="update{{$seniorHigh->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$seniorHigh->adminProfile['first_name']}} {{$seniorHigh->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<form method="POST" action="{{route('admin.setups.senior-high.update',$seniorHigh->id)}}">
																@csrf
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-success">
																			<h4 class="card-title mb-0 m-auto text-white">Senior High School Details - {{$seniorHigh->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5>School Details</h5>
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="name" class="form-label">Name of School</label>
																							<input name="name" type="text" class="form-control" id="name" placeholder="Enter School Name" value="{{$seniorHigh->name}}" autofocus required>
																						</div>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<label for="category_id" class="form-label">School Category</label>
																						<select name="category_id" id="category_id" class="form-control" required>
																							<option value="{{$seniorHigh->category['id']}}" selected hidden>{{$seniorHigh->category['name']}}</option>
																							<?php $shsCategories = \App\Models\Setups\SeniorHigh\SeniorHighCategory::all() ?>
																							@foreach($shsCategories as $shsCategory)
																								<option value="{{$shsCategory->id}}">{{$shsCategory->name}}</option>
																							@endforeach
																						</select>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="address" class="form-label">Address</label>
																							<input name="address" type="text" class="form-control" id="address" placeholder="Enter School Address" value="{{$seniorHigh->address}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<label for="city_id" class="form-label">School City/Township</label>
																						<select name="city_id" id="city_id" class="form-control" required>
																							<option value="{{$seniorHigh->city['id']}}" selected hidden>{{$seniorHigh->city['name']}}</option>
																							<?php $cities = \App\Models\Setups\Location\CityTown::all()?>
																							@foreach($cities as $city)
																								<option value="{{$city->id}}">{{$city->name}}</option>
																							@endforeach
																						</select>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<label for="region_id" class="form-label">School Region</label>
																						<select name="region_id" id="region_id" class="form-control" required>
																							<option value="{{$seniorHigh->region['id']}}" selected hidden>{{$seniorHigh->region['name']}}</option>
																							<?php $regions = \App\Models\Setups\Location\RegionNew::all()?>
																							@foreach($regions as $region)
																								<option value="{{$region->id}}">{{$region->name}}</option>
																							@endforeach
																						</select>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="placeholderInput" class="form-label">Email Address</label>
																							<input name="email" type="text" class="form-control" id="placeholderInput" placeholder="Enter Email Address" value="{{$seniorHigh->email}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6 mb-4">
																						<div>
																							<label for="phone" class="form-label">Phone Number</label>
																							<input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone Number" value="{{$seniorHigh->phone}}" required>
																						</div>
																					</div>
																					<!--end col-->
																					
																					<hr>
																					<h5>Contact Person Details</h5>
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="contact_name" class="form-label">Contact Name</label>
																							<input name="contact_name" type="text" class="form-control" id="contact_name" placeholder="Enter Contact Name"  value="{{$seniorHigh->contact_name}}">
																						</div>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="contact_email" class="form-label">Contact Email Address</label>
																							<input name="contact_email" type="text" class="form-control" id="contact_email" placeholder="Enter Contact Email Address"  value="{{$seniorHigh->contact_email}}">
																						</div>
																					</div>
																					<!--end col-->
																					
																					<div class="col-xxl-6 col-md-6">
																						<div>
																							<label for="contact_phone" class="form-label">Contact Phone Number</label>
																							<input name="contact_phone" type="text" class="form-control" id="contact_phone" placeholder="Enter Contact Phone Number"  value="{{$seniorHigh->contact_phone}}">
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
																<a href="javascript:void(0);" class="btn btn-light link-success fw-medium"
																	 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
																<button type="submit" class="btn btn-success ">Update Record</button>
															</div>
															
															</form>
															
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Activate Record Modal -->
											<div class="modal fade" id="active{{$seniorHigh->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$seniorHigh->adminProfile['first_name']}} {{$seniorHigh->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex @if(!$seniorHigh->active) bg-warning @else bg-info @endif">
																			<h4 class="card-title mb-0 m-auto text-white">@if(!$seniorHigh->active) Activate @else Deactivate @endif Record - {{$seniorHigh->name ?? null}}</h4>
																		</div><!-- end card header -->
																		<div class="card-body">
																			<div class="live-preview">
																				<div class="row gy-4">
																					
																					<h5 class="mt-5">Are you sure you want to @if(!$seniorHigh->active) activate @else deactivate @endif this record.</h5>
																				
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
															<form class="form-horizontal" method="post" action="{{ route('admin.setups.senior-high.active',$seniorHigh->id) }}">
																@csrf
																@if($seniorHigh->active) <input type="hidden" name="active" value="0"> @else <input type="hidden" name="active" value="1"> @endif
																<a href="javascript:void(0);" class="btn btn-light fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> No</a>
																<button class="btn @if(!$seniorHigh->active) btn-warning @else btn-info @endif" type="submit">Yes</button>
															</form>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											
											<!--  Delete Record Modal -->
											<div class="modal fade" id="delete{{$seniorHigh->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$seniorHigh->adminProfile['first_name']}} {{$seniorHigh->adminProfile['last_name']}}]</h5>--}}
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															
															<div class="row">
																<div class="col-lg-12">
																	<div class="card">
																		<div class="card-header align-items-center d-flex bg-danger">
																			<h4 class="card-title mb-0 m-auto text-white">Delete Record - {{$seniorHigh->name ?? null}}</h4>
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
															<form class="form-horizontal" method="post" action="{{ route('admin.setups.senior-high.destroy',$seniorHigh->id) }}">
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
							
							<!--  Add New School -->
							<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content">
										<div class="modal-header">
											{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$seniorHigh->adminProfile['first_name']}} {{$seniorHigh->adminProfile['last_name']}}]</h5>--}}
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											
											<form method="POST" action="{{route('admin.setups.senior-high.store')}}">
												@csrf
												<div class="row">
													<div class="col-lg-12">
														<div class="card">
															<div class="card-header align-items-center d-flex bg-primary">
																<h4 class="card-title mb-0 m-auto text-white">Add New Senior High School</h4>
															</div><!-- end card header -->
															
															<div class="card-body">
																<div class="live-preview">
																	<div class="row gy-4">
																		
																		<h5>School Details</h5>
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="name" class="form-label">Name of School</label>
																				<input name="name" type="text" class="form-control" id="name" placeholder="Enter School Name" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<label for="category_id" class="form-label">School Category</label>
																			<select name="category_id" id="category_id" class="form-control" required>
																				<option value="" selected hidden>Select...</option>
																				<?php $shsCategories = \App\Models\Setups\SeniorHigh\SeniorHighCategory::all() ?>
																				@foreach($shsCategories as $shsCategory)
																					<option value="{{$shsCategory->id}}">{{$shsCategory->name}}</option>
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
																				<?php $cities = \App\Models\Setups\Location\CityTown::all()?>
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
																				<?php $regions = \App\Models\Setups\Location\RegionNew::all()?>
																				@foreach($regions as $region)
																					<option value="{{$region->id}}">{{$region->name}}</option>
																				@endforeach
																			</select>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="placeholderInput" class="form-label">Email Address</label>
																				<input name="email" type="text" class="form-control" id="placeholderInput" placeholder="Enter Email Address" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6 mb-4">
																			<div>
																				<label for="phone" class="form-label">Phone Number</label>
																				<input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone Number" required>
																			</div>
																		</div>
																		<!--end col-->
																		
																		
																		
																		<hr>
																		<h5>Contact Person Details</h5>
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="contact_name" class="form-label">Contact Name</label>
																				<input name="contact_name" type="text" class="form-control" id="contact_name" placeholder="Enter Contact Name">
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="contact_email" class="form-label">Contact Email Address</label>
																				<input name="contact_email" type="text" class="form-control" id="contact_email" placeholder="Enter Contact Email Address">
																			</div>
																		</div>
																		<!--end col-->
																		
																		<div class="col-xxl-6 col-md-6">
																			<div>
																				<label for="contact_phone" class="form-label">Contact Phone Number</label>
																				<input name="contact_phone" type="text" class="form-control" id="contact_phone" placeholder="Enter Contact Phone Number">
																			</div>
																		</div>
																		<!--end col-->
																	
																	</div>
																	<!--end row-->
																</div>
															</div>
															<!--end row-->
															
															<div class="modal-footer">
																<a href="javascript:void(0);" class="btn btn-light link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
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