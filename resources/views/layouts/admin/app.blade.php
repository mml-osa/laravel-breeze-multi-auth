<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-layout-style="detached" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">

    @include('layouts.admin.head')

    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">@csrf</form>

    <body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.admin.header')

        @include('layouts.admin.navbar')

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <div class="main-content">

            <main>
                {{ $slot }}
            </main>
            <!-- End Page-content -->

            @include('layouts.admin.footer')

        </div>

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>

    @include('layouts.admin.scripts')
    
    </body>
</html>
