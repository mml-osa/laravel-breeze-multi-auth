<div class="app-menu navbar-menu">
	<!-- LOGO -->
	<div class="navbar-brand-box">
		<!-- Dark Logo-->
		<a href="{{route('admin.dashboard')}}" class="logo logo-dark">
			<span class="logo-sm"><img src="{{asset('app/assets/images/logo-sm.png')}}" alt="" height="22"></span>
			<span class="logo-lg"><img src="{{asset('app/assets/images/logo-dark.png')}}" alt="" height="17"></span>
		</a>
		<!-- Light Logo-->
		<a href="{{route('admin.dashboard')}}" class="logo logo-light">
			<span class="logo-sm"><img src="{{asset('app/assets/images/logo-sm.png')}}" alt="" height="22"></span>
			<span class="logo-lg"><img src="{{asset('app/assets/images/logo-light.png')}}" alt="" height="17"></span>
		</a>
		<button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
			<i class="ri-record-circle-line"></i>
		</button>
	</div>
	
	<div id="scrollbar">
		<div class="container-fluid">
			
			<div id="two-column-menu">
			</div>
			<ul class="navbar-nav" id="navbar-nav">
				<li class="menu-title"><span data-key="t-menu">Menu</span></li>
				
				<!-- Dashboard -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="{{route('admin.dashboard')}}" aria-controls="sidebarDashboard">
						<i class="ri-dashboard-2-line"></i> <span data-key="t-dashboard">Dashboard</span>
					</a>
				</li> <!-- end dashboard Menu -->
				
				<li class="menu-title"><span data-key="t-menu">App</span></li>
				
				<!-- ToDo App Nav Links -->
				
				<li class="menu-title"><span data-key="t-menu">Setups</span></li>
				
				<!-- Gender Setup -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarGender" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarGender">
						<i class="ri-genderless-fill"></i> <span data-key="t-gender">Gender</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarGender">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<a href="{{route('admin.setups.gender.index')}}" class="nav-link" data-key="t-manage">Manage</a>
							</li>
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->

				<!-- Locations -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarLocation" data-bs-toggle="collapse" role="button"
						 aria-expanded="false" aria-controls="sidebarLocation">
						<i class="ri-map-pin-2-fill"></i> <span data-key="t-location">Location</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarLocation">
						<ul class="nav nav-sm flex-column">
							<!-- Region -->
							<li class="nav-item">
								<a href="#sidebarRegion" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
									 aria-controls="sidebarRegion" data-key="t-region"> Region
								</a>
								<div class="collapse menu-dropdown" id="sidebarRegion">
									<ul class="nav nav-sm flex-column">
										<li class="nav-item">
											<a href="{{route('admin.setups.region.index')}}" class="nav-link" data-key="t-manage"> Main
											</a>
										</li>
										<li class="nav-item">
											<a href="{{route('admin.setups.region-new.index')}}" class="nav-link" data-key="t-manage"> New Region
											</a>
										</li>
									</ul>
								</div>
							</li>
							<!-- Cities -->
							<li class="nav-item">
								<a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
									 aria-controls="sidebarSignUp" data-key="t-signup"> City
								</a>
								<div class="collapse menu-dropdown" id="sidebarSignUp">
									<ul class="nav nav-sm flex-column">
										<li class="nav-item">
											<a href="{{route('admin.setups.city-town.index')}}" class="nav-link" data-key="t-basic"> Manage
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->
				
				<!-- Schools -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarSchools" data-bs-toggle="collapse" role="button"
						 aria-expanded="false" aria-controls="sidebarSchools">
						<i class="ri-building-2-fill"></i> <span data-key="t-schools">Schools</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarSchools">
						<ul class="nav nav-sm flex-column">
							<!-- Senior High -->
							<li class="nav-item">
								<a href="#sidebarSeniorHigh" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
									 aria-controls="sidebarSeniorHigh" data-key="t-senior-high"> Senior High
								</a>
								<div class="collapse menu-dropdown" id="sidebarSeniorHigh">
									<ul class="nav nav-sm flex-column">
										<li class="nav-item">
											<a href="{{route('admin.setups.senior-high.index')}}" class="nav-link" data-key="t-senior-high"> Manage
											</a>
										</li>
										
										<li class="nav-item">
											<a href="{{route('admin.setups.senior-high-courses.index')}}" class="nav-link" data-key="t-courses"> Courses
											</a>
										</li>
										
										<li class="nav-item">
											<a href="{{route('admin.setups.senior-high-cores.index')}}" class="nav-link" data-key="t-core-subjects"> Core Subjects
											</a>
										</li>
										
										<li class="nav-item">
											<a href="{{route('admin.setups.senior-high-electives.index')}}" class="nav-link" data-key="t-elective-subjects"> Elective Subjects
											</a>
										</li>
										
									</ul>
								</div>
								
							</li>
							
							<!-- Universities -->
							<li class="nav-item">
								<a href="#sidebarUniversities" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
									 aria-controls="sidebarUniversities" data-key="t-universities"> Universities
								</a>
								<div class="collapse menu-dropdown" id="sidebarUniversities">
									<ul class="nav nav-sm flex-column">
										<li class="nav-item">
											<a href="{{route('admin.setups.university.index')}}" class="nav-link" data-key="t-manage"> Manage</a>
										</li>
										<li class="nav-item">
											<a href="{{route('admin.setups.university-courses.index')}}" class="nav-link" data-key="t-courses"> Courses
											</a>
										</li>
										<li class="nav-item">
											<a href="{{route('admin.setups.university-scheme.index')}}" class="nav-link" data-key="t-courses"> Scheme
											</a>
										</li>
									</ul>
								</div>
							</li>
							
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->
				
				<li class="menu-title"><span data-key="t-menu">Users</span></li>
				
				<!-- Admins -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarAdmins" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdmins">
						<i class="ri-shield-user-fill"></i> <span data-key="t-admins">Admin</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarAdmins">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<a href="{{route('admin.users.manage')}}" class="nav-link" data-key="t-manage">Manage</a>
							</li>
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->
				
				<!-- Students -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarStudents" data-bs-toggle="collapse" role="button"
						 aria-expanded="false" aria-controls="sidebarStudents">
						<i class="ri-user-3-fill"></i> <span data-key="t-layouts">Student</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarStudents">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<a href="{{route('admin.students')}}" class="nav-link" data-key="t-horizontal">Manage</a>
							</li>
							<li class="nav-item">
								<a href="#." class="nav-link" data-key="t-detached">Create New</a>
							</li>
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->
				
				<!-- Institutions -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarInstitutions" data-bs-toggle="collapse" role="button"
						 aria-expanded="false" aria-controls="sidebarInstitutions">
						<i class="ri-collage-fill"></i> <span data-key="t-layouts">University</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarInstitutions">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<a href="{{route('admin.institutions')}}" class="nav-link" data-key="t-horizontal">Manage</a>
							</li>
							<li class="nav-item">
								<a href="#." class="nav-link" data-key="t-detached">Create New</a>
							</li>
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->
				
				<!-- Admins -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sidebarAdminRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdminRoles">
						<i class="ri-key-2-fill"></i> <span data-key="t-admins">User Roles</span>
					</a>
					<div class="collapse menu-dropdown" id="sidebarAdminRoles">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<a href="{{route('admin.users.manage')}}" class="nav-link" data-key="t-manage">Manage</a>
							</li>
						</ul>
					</div>
				</li> <!-- end dashboard Menu -->
				
				<li class="menu-title"><span data-key="t-menu">Account</span></li>
				
				<!-- Student Profile -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="{{route('admin.profile')}}" aria-controls="sidebarProfile"><i class="ri-user-2-fill"></i> <span data-key="t-profile">My Profile</span>
					</a>
				</li>
				
				<!-- Student Logout -->
				<li class="nav-item">
					<a class="nav-link menu-link" href="{{route('admin.logout')}}"
						 onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();"
						 aria-controls="sidebarDashboards"><i class="ri-lock-2-fill"></i> <span data-key="t-dashboards">Logout</span></a>
				</li> <!-- end dashboard Menu -->
			
			</ul>
		</div>
		<!-- Sidebar -->
	</div>
	
	<div class="sidebar-background"></div>
</div>
