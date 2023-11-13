<x-admin.app-layout>
	
	<div class="page-content">
		<div class="container-fluid">
			
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0">GH Senior High Schools</h4>
						
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
			
			{{--			<div class="alert alert-danger" role="alert">--}}
			{{--				This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!--}}
			{{--			</div>--}}
			
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0">Senior High Schools Data</h5>
						</div>
						<div class="card-body">
							<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
										 style="width:100%">
								<thead>
								<tr>
									<th scope="col" style="width: 10px;">
										<div class="form-check">
											<input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
										</div>
									</th>
									<th data-ordering="false">Name</th>
									<th data-ordering="false">Type</th>
									<th data-ordering="false">Email</th>
									<th data-ordering="false">Phone</th>
									<th data-ordering="false">Location</th>
									<th data-ordering="false">City</th>
									<th data-ordering="false">Region</th>
									<th data-ordering="false">Active</th>
									<th data-ordering="false">Action</th>
								</tr>
								</thead>
								<tbody>
								
								@foreach($seniorHighs as $seniorHigh)
									<tr>
										<th scope="row">
											<div class="form-check">
												<input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
											</div>
										</th>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										<td>{{$seniorHigh->name}}</td>
										{{--                                        <td><span class="badge badge-soft-info">Re-open</span></td>--}}
										{{--                                        <td><span class="badge bg-danger">High</span></td>--}}
										<td>
											<div class="dropdown d-inline-block">
												<button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="ri-more-fill align-middle"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
													<li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
													<li>
														<a class="dropdown-item remove-item-btn">
															<i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
														</a>
													</li>
												</ul>
											</div>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div><!--end col-->
			</div><!--end row-->
		
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->

</x-admin.app-layout>