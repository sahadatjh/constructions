<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Hajj Management System for bangladesh." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo.ico') }}">
        
        {{-- Toastr css  --}}
        {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

        <!-- Jquery Toast css -->
        <link href="{{ asset('assets/admin/libs/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="{{ asset('assets/admin/css/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ asset('assets/admin/css/app-material.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{ asset('assets/admin/css/bootstrap-material-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{ asset('assets/admin/css/app-material-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- Jquery Toast css -->
        <link href="{{ asset('assets/admin/libs/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- icons -->
		<link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        
        @stack('css')
        
		<link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css" />


    </head>

    <body class="loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('admin.layouts.partials.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.partials.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')                        
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('admin.layouts.partials.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
            {{-- @include('admin.layouts.partials.right-sidebar') --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('assets/admin/js/vendor.min.js') }}"></script>

        @stack('vendorjs')

        <!-- App js -->
        <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>

        <!-- Tost-->
        <script src="{{ asset('assets/admin/libs/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

        <!-- toastr init js-->
        <script src="{{ asset('assets/admin/js/pages/toastr.init.js') }}"></script>

        @if (Session::has('success'))
            <script>
                (function($){
                    $(document).ready(function () {
                        $.NotificationApp.send("Success!", "{!! session('success') !!}", 'top-right', '#5ba035', 'success')
                    });
                })(jQuery)
            </script>
        @endif

        @if (Session::has('errors'))
            <script>
                (function($){
                    $(document).ready(function () {
                        $.NotificationApp.send("Oh snap!", "Something is wrong!!!", 'top-right', '#bf441d', 'error')
                    });
                })(jQuery)
            </script>
        @endif
        @stack('scripts')
        
    </body>
</html>