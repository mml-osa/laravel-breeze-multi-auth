<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('student.dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('app/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('app/assets/images/logo-dark.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('student.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('app/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('app/assets/images/logo-light.png')}}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('student.dashboard')}}"  aria-controls="sidebarDashboards"><i class="ri-dashboard-2-fill"></i> <span data-key="t-dashboards">Dashboard</span></a>
                </li> <!-- end dashboard Menu -->

                <li class="menu-title"><span data-key="t-menu">User</span></li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('student.university.eligibility')}}" aria-controls="sidebarFindUniversity"><i class="ri-building-2-fill"></i> <span data-key="t-find-university">Find My University</span></a>
                </li> <!-- end dashboard Menu -->
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('student.university.application')}}" aria-controls="sidebarProfile"><i class="ri-user-2-fill"></i> <span data-key="t-profile">My Profile</span></a>
                </li> <!-- end dashboard Menu -->
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('student.help')}}" aria-controls="sidebarHelp"><i class="ri-question-fill"></i> <span data-key="t-help">Help</span></a>
                </li> <!-- end dashboard Menu -->
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-controls="sidebarLogout"><i class="ri-lock-2-fill"></i> <span data-key="t-logout">Logout</span></a>
                </li> <!-- end dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
