<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">University Cut-Off Point Scheme</h4>
						
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
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0" style="float: left">All Universities</h5>
							<!--end col-->
						</div>
						
						<div class="card-body">
							<table class="table table-bordered dt-responsive nowrap table-striped align-middle text-center"
										 style="width:100%">
								<thead>
								<tr>
									<th data-ordering="false">University</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($universities as $university)
									<?php $uni_encrypt_id = encrypt($university->id) ?>
									<tr>
										<td>{{$university->name ?? null}}</td>
										<td>
											<a href="{{route('admin.setups.university-scheme.index','name='.$uni_encrypt_id)}}" type="button"
												 class="btn btn-primary "><i class="ri-search-eye-line"></i></a>
											{{--											<button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteAdmin{{$universityScheme->id}}"><i class="ri-delete-bin-line"></i></button>--}}
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						
						</div>
					
					</div>
				</div><!--end col-->
				
				<?php $uni_encrypt_id = request()->name;?>
				
				@if($uni_encrypt_id != null)
					<?php $uni_id = decrypt($uni_encrypt_id);?>
					
					<div class="col-lg-8">
						<div class="card">
							<div class="card-header">
								@foreach($universities as $university)
									@if($university->id == $uni_id)
										<h5 class="card-title mb-0" style="float: left">{{$university->name}} Cut-Off Datatable</h5>
									@endif
								@endforeach
								
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"
												style="float: right"><i class="ri-add-circle-line align-middle me-1"></i> Add New
								</button>
								<!--end col-->
							</div>
							
							<div class="card-body">
								<table id="example"
											 class="table table-bordered dt-responsive nowrap table-striped align-middle text-center"
											 style="width:100%">
									<thead>
									<tr>
										<th data-ordering="false">Programme</th>
										<th data-ordering="false">Cut-Off</th>
										<th data-ordering="false">Subject Requirement</th>
										<th data-ordering="false">Full Fee-Paying</th>
										<th data-ordering="false">Active</th>
										<th data-ordering="false">Action</th>
									</tr>
									</thead>
									<tbody>
									
									
									@foreach($universitySchemes as $universityScheme)
										@if($universityScheme->university_id === $uni_id)
											
											<tr>
												<td>{{$universityScheme->course['name'] ?? null}}</td>
												<td>{{$universityScheme->cutoff_min ?? null}} ({{$universityScheme->cutoff_max ?? null}})</td>
												<td>
													@foreach($universityScheme->requirement as $schemeRequirement)
														{{$schemeRequirement->grade ?? null}}
														in {{$schemeRequirement->core['name'] ?? null}} {{$schemeRequirement->elective['name'] ?? null}}
														<br>
													@endforeach
												</td>
												<td>@if($universityScheme->is_fee_paying)
														Yes
													@else
														No
													@endif</td>
												<td class="m-auto" style="margin: auto">@if($universityScheme->active)
														<button type="button" class="btn btn-info btn-xs waves-effect waves-light"
																		data-bs-toggle="modal" data-bs-target="#active{{$universityScheme->id}}">Yes
														</button>
													@else
														<button type="button" class="btn btn-warning waves-effect waves-light"
																		data-bs-toggle="modal" data-bs-target="#active{{$universityScheme->id}}">No
														</button>
													@endif
												</td>
												<td>
													<button type="button" class="btn btn-success " data-bs-toggle="modal"
																	data-bs-target="#update{{$universityScheme->id}}"><i class="ri-pencil-line"></i>
													</button>
													<button type="button" class="btn btn-danger " data-bs-toggle="modal"
																	data-bs-target="#delete{{$universityScheme->id}}"><i class="ri-delete-bin-line"></i>
													</button>
													
													<!--  Update Record Modal -->
													<div class="modal fade" id="update{{$universityScheme->id}}" tabindex="-1" role="dialog"
															 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityScheme->adminProfile['first_name']}} {{$universityScheme->adminProfile['last_name']}}]</h5>--}}
																	<button type="button" class="btn-close" data-bs-dismiss="modal"
																					aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	
																	<form method="POST" action="{{route('admin.setups.university-scheme.update',$universityScheme->id)}}">
																		@csrf
																		
																		<div class="row">
																			<div class="col-lg-12">
																				<div class="card">
																					<div class="card-header align-items-center d-flex bg-success">
																						@foreach($universities as $university)
																							@if($university->id == $uni_id)
																								<h4 class="card-title mb-0 m-auto text-white">Update Cut-Off Record
																									- {{$university->name}}</h4>
																							@endif
																						@endforeach
																					</div><!-- end card header -->
																					<div class="card-body">
																						<div class="live-preview">
																							<div class="row gy-4">
																								
																								<div class="col-xxl-12 col-md-12">
																									<label for="course_id" class="form-label">Programme</label>
																									<select name="course_id" id="course_id" class="form-control" required>
																										<option value="{{$universityScheme->course['id']}}" selected
																														hidden>{{$universityScheme->course['name']}}</option>
																										<?php $uniCourses = \App\Models\Setups\University\UniversityCourse::all()?>
																										@foreach($uniCourses as $uniCourse)
																											<option value="{{$uniCourse->id}}">{{$uniCourse->name}}</option>
																										@endforeach
																									</select>
																								</div>
																								<!--end col-->
																								
																								<div class="col-xxl-4 col-md-4">
																									<div>
																										<label for="cutoff_min" class="form-label">Cut Off Min</label>
																										<input name="cutoff_min" type="number" class="form-control"
																													 id="cutoff_min" placeholder="Enter Minimum Cut-Off Point" value="{{$universityScheme->cutoff_min}}" required>
																									</div>
																								</div>
																								<!--end col-->
																								
																								<div class="col-xxl-4 col-md-4">
																									<div>
																										<label for="cutoff_max" class="form-label">Cut Off Max</label>
																										<input name="cutoff_max" type="number" class="form-control"
																													 id="cutoff_max" placeholder="Enter Maximum Cut-Off Point" value="{{$universityScheme->cutoff_max}}" required>
																									</div>
																								</div>
																								<!--end col-->
																								
																								<div class="col-xxl-4 col-md-4">
																									<label for="is_fee_paying" class="form-label">Fee Paying</label>
																									<select name="is_fee_paying" id="is_fee_paying" class="form-control" required>
																										<option value="{{$universityScheme->is_fee_paying}}" selected hidden>@if($universityScheme->is_fee_paying) Yes @else No @endif</option>
																										<option value="0">No</option>
																										<option value="1">Yes</option>
																									</select>
																								</div>
																								<!--end col-->
																								
																								<label for="course_id" class="form-label">Cut-Off Point Subject Requirement</label>
																								
																								<table class="table" id="dynamicAddRemove3">
																									<tr>
																										<th>Subject</th>
																										<th>Grade</th>
																										<th>Action</th>
																									</tr>
																									
																									
																									@foreach($universitySchemesRequirements as $uniRequirement)
																										@if($universityScheme->id == $uniRequirement->scheme_id)
																											
																											<tr>
																												<td>
																													<input type="text" id="cutoffGrade" placeholder="Enter required grade" value="{{$uniRequirement->core['name'] ?? $uniRequirement->elective['name'] ?? null}}" class="form-control" disabled/>
																													<input type="hidden" name="cutoff_id" id="cutoffGrade" placeholder="Enter required grade" value="{{$uniRequirement->core['id'] ?? $uniRequirement->elective['id'] ?? null}}" class="form-control" disabled/>
																												</td>
																												<td>
																													<input type="text" id="cutoffGrade" placeholder="Enter required grade" value="{{$uniRequirement->grade ?? null}}" class="form-control" disabled/>
																												</td>
																												<td>
																														<a href="{{route('admin.setups.university-scheme-requirement.destroy',$uniRequirement->id)}}" class="btn btn-outline-danger">Delete</a>
																												</td>
																											</tr>
																										
																										@endif
																									@endforeach
																									
																									
																									<tr>
																										
																										<span id="dynamo-tr">
																											<td>
																											<select name="cutoffSubject" id="cutoffSubject" class="form-control" required>
																												<option value="" selected hidden>Select Subject...</option>
																												<?php
																												$coreSubs = \App\Models\Setups\SeniorHigh\SeniorHighCoreSubject::all();
																												$electiveSubs = \App\Models\Setups\SeniorHigh\SeniorHighElective::all();
																												?>
																												
																												<optgroup label="Core Subjects">
																													<option value="" selected hidden>Select Subject...</option>
																													@foreach($coreSubs as $coreSub)
																														<option value="{{$coreSub->id}}">{{$coreSub->name}}</option>
																													@endforeach
																												</optgroup>
																												
																												<optgroup label="Elective Subjects">
																													@foreach($electiveSubs as $electiveSub)
																														<option value="{{$electiveSub->id}}">{{$electiveSub->name}}</option>
																													@endforeach
																												</optgroup>
																											
																											</select>
																										</td>
																										<td>
																											{{--																					<label for="cutoff_grade" class="form-label">Required Grade</label>--}}
																											<input type="text" name="cutoffGrade" id="cutoffGrade" placeholder="Enter required grade" class="form-control"/>
																										</td>
																										</span>
																										
																										<td>
{{--																											<input type="hidden" name="schemeReqId" id="schemeReqId" value="{{$uniRequirement->id}}">--}}
																											<button type="submit" class="btn btn-outline-primary">Add Subject</button>
																										</td>
																									</tr>
																								
																								
																								</table>
																							
																							
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
																			<input type="hidden" name="university_id" id="university_id" value="{{$uni_id}}">
																			<a href="javascript:void(0);" class="btn btn-light link-success fw-medium"
																				 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>
																				Close</a>
																			<button type="submit" class="btn btn-success ">Update Record</button>
																		</div>
																	
																	</form>
																
																</div>
															</div><!-- /.modal-content -->
														</div><!-- /.modal-dialog -->
													</div><!-- /.modal -->
													
													<!--  Activate Record Modal -->
													<div class="modal fade" id="active{{$universityScheme->id}}" tabindex="-1" role="dialog"
															 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityScheme->adminProfile['first_name']}} {{$universityScheme->adminProfile['last_name']}}]</h5>--}}
																	<button type="button" class="btn-close" data-bs-dismiss="modal"
																					aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	
																	<div class="row">
																		<div class="col-lg-12">
																			<div class="card">
																				<div
																						class="card-header align-items-center d-flex @if(!$universityScheme->active) bg-warning @else bg-info @endif">
																					<h4 class="card-title mb-0 m-auto text-white">@if(!$universityScheme->active)
																							Activate
																						@else
																							Deactivate
																						@endif Record - {{$universityScheme->name ?? null}}</h4>
																				</div><!-- end card header -->
																				<div class="card-body">
																					<div class="live-preview">
																						<div class="row gy-4">
																							
																							<h5 class="mt-5">Are you sure you want to @if(!$universityScheme->active)
																									activate
																								@else
																									deactivate
																								@endif this record.</h5>
																						
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
																	<form class="form-horizontal" method="post"
																				action="{{ route('admin.setups.university-scheme.active',$universityScheme->id) }}">
																		@csrf
																		@if($universityScheme->active)
																			<input type="hidden" name="active" value="0">
																		@else
																			<input type="hidden" name="active" value="1">
																		@endif
																		<a href="javascript:void(0);" class="btn btn-light fw-medium"
																			 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> No</a>
																		<button
																				class="btn @if(!$universityScheme->active) btn-warning @else btn-info @endif"
																				type="submit">Yes
																		</button>
																	</form>
																</div>
															</div><!-- /.modal-content -->
														</div><!-- /.modal-dialog -->
													</div><!-- /.modal -->
													
													<!--  Delete Record Modal -->
													<div class="modal fade" id="delete{{$universityScheme->id}}" tabindex="-1" role="dialog"
															 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityScheme->adminProfile['first_name']}} {{$universityScheme->adminProfile['last_name']}}]</h5>--}}
																	<button type="button" class="btn-close" data-bs-dismiss="modal"
																					aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	
																	<div class="row">
																		<div class="col-lg-12">
																			<div class="card">
																				<div class="card-header align-items-center d-flex bg-danger">
																					<h4 class="card-title mb-0 m-auto text-white">Delete Record
																						- {{$universityScheme->name ?? null}}</h4>
																				</div><!-- end card header -->
																				<div class="card-body">
																					<div class="live-preview">
																						<div class="row gy-4">
																							
																							<h5 class="mt-5">Are you sure you want to delete this record. <span
																										class="text-danger"><p>THIS CANNOT BE UNDONE!!!</p></span></h5>
																						
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
																	<form class="form-horizontal" method="post"
																				action="{{ route('admin.setups.university-scheme.destroy',$universityScheme->id) }}">
																		@csrf
																		<a href="javascript:void(0);" class="btn btn-light fw-medium"
																			 data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>No</a>
																		<button class="btn btn-danger" type="submit">Yes</button>
																	</form>
																</div>
															
															</div><!-- /.modal-content -->
														</div><!-- /.modal-dialog -->
													</div><!-- /.modal -->
												</td>
											</tr>
										
										@endif
									@endforeach
									</tbody>
								</table>
								
								<!--  Add Record Modal -->
								<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
										 aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												{{--															<h5 class="modal-title" id="myExtraLargeModalLabel">Admin Details [{{$universityScheme->adminProfile['first_name']}} {{$universityScheme->adminProfile['last_name']}}]</h5>--}}
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												
												<form method="POST" action="{{route('admin.setups.university-scheme.store')}}">
													@csrf
													<div class="row">
														<div class="col-lg-12">
															<div class="card">
																<div class="card-header align-items-center d-flex bg-primary">
																	@foreach($universities as $university)
																		@if($university->id == $uni_id)
																			<h4 class="card-title mb-0 m-auto text-white">Add Cut-Off Point
																				- {{$university->name}}</h4>
																		@endif
																	@endforeach
																</div><!-- end card header -->
																
																<div class="card-body">
																	<div class="live-preview">
																		<div class="row gy-4">
																			
																			<div class="col-xxl-12 col-md-12">
																				<label for="course_id" class="form-label">Programme</label>
																				<select name="course_id" id="course_id" class="form-control" required>
																					<option value="" selected hidden>Select...</option>
																					<?php
																					$uniCourses = \App\Models\Setups\University\UniversityCourse::all()
																					?>
																					@foreach($uniCourses as $uniCourse)
																						<option value="{{$uniCourse->id}}">{{$uniCourse->name}}</option>
																					@endforeach
																				</select>
																			</div>
																			<!--end col-->
																			
																			<div class="col-xxl-4 col-md-4">
																				<div>
																					<label for="cutoff_min" class="form-label">Cut Off Min</label>
																					<input name="cutoff_min" type="number" class="form-control" id="cutoff_min"
																								 placeholder="Enter Min Cut-Off Point" required>
																				</div>
																			</div>
																			<!--end col-->
																			
																			<div class="col-xxl-4 col-md-4">
																				<div>
																					<label for="cutoff_max" class="form-label">Cut Off Max</label>
																					<input name="cutoff_max" type="number" class="form-control" id="cutoff_max"
																								 placeholder="Enter Max Cut-Off Point" required>
																				</div>
																			</div>
																			<!--end col-->
																			
																			<div class="col-xxl-4 col-md-4">
																				<label for="is_fee_paying" class="form-label">Fee Paying</label>
																				<select name="is_fee_paying" id="is_fee_paying" class="form-control" required>
																					<option value="" selected hidden>Select...</option>
																					<option value="0">No</option>
																					<option value="1">Yes</option>
																				</select>
																			</div>
																			<!--end col-->
																			
																			<hr>
																			
																			<label for="course_id" class="form-label">Cut-Off Point Subject
																				Requirement</label>
																			
																			<table class="table" id="dynamicAddRemove">
																				<tr>
																					<th>Subject</th>
																					<th>Grade</th>
																					<th>Action</th>
																				</tr>
																				<tr>
																					<td>
																						{{--																					<label for="cutoff_subject" class="form-label">Subject</label>--}}
																						{{--																					<input type="text" name="cutoffSubject[0][subject]" id="cutoff_subject" placeholder="Enter subject" class="form-control" />--}}
																						
																						<select name="cutoff[0][subject]" id="cutoffSubject" class="form-control"
																										required>
																							<option value="" selected hidden>Select Subject...</option>
																							<?php
																							$coreSubs = \App\Models\Setups\SeniorHigh\SeniorHighCoreSubject::all();
																							$electiveSubs = \App\Models\Setups\SeniorHigh\SeniorHighElective::all();
																							?>
																							
																							<optgroup label="Core Subjects">
																								@foreach($coreSubs as $coreSub)
																									<option value="{{$coreSub->id}}">{{$coreSub->name}}</option>
																								@endforeach
																							</optgroup>
																							
																							<optgroup label="Elective Subjects">
																								@foreach($electiveSubs as $electiveSub)
																									<option value="{{$electiveSub->id}}">{{$electiveSub->name}}</option>
																								@endforeach
																							</optgroup>
																						
																						</select>
																					</td>
																					<td>
																						{{--																					<label for="cutoff_grade" class="form-label">Required Grade</label>--}}
																						<input type="text" name="cutoff[0][grade]" id="cutoffGrade"
																									 placeholder="Enter required grade" class="form-control"/>
																					</td>
																					<td>
																						<button type="button" name="add" id="dynamic-ar"
																										class="btn btn-outline-primary">Add Subject
																						</button>
																					</td>
																				</tr>
																			</table>
																		
																		</div>
																		<!--end row-->
																	</div>
																</div>
																<!--end row-->
																
																<div class="modal-footer">
																	<input type="hidden" name="university_id" id="university_id" value="{{$uni_id}}">
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
				
				@endif
			</div><!--end row-->
		
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->
	
	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		var i = 0;
		<?php
		$coreSubs = \App\Models\Setups\SeniorHigh\SeniorHighCoreSubject::all();
		$electiveSubs = \App\Models\Setups\SeniorHigh\SeniorHighElective::all();
		?>
		$("#dynamic-ar").click(function () {
			++i;
			$("#dynamicAddRemove").append('<tr>' +
				'<td>' +
				'<select name="cutoff[' + i + '][subject]" class="form-control" required>' +
				'<option value="" selected hidden>Select Subject...</option>' +
				'<optgroup label="Core Subjects">' +
				'@foreach($coreSubs as $coreSub) <option value="{{$coreSub->id}}">{{$coreSub->name}}</option> @endforeach' +
				'</optgroup>' +
				'<optgroup label="Elective Subjects">' +
				'@foreach($electiveSubs as $electiveSub) <option value="{{$electiveSub->id}}">{{$electiveSub->name}}</option> @endforeach' +
				'</optgroup>' +
				'</select>' +
				'</td>' +
				'<td><input type="text" name="cutoff[' + i + '][grade]" placeholder="Enter required grade" class="form-control" /></td>' +
				'<td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td>' +
				'</tr>'
			);
		});
		$(document).on('click', '.remove-input-field', function () {
			$(this).parents('tr').remove();
		});
	</script>

</x-admin.app-layout>