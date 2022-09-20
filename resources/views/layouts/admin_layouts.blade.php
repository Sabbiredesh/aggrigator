<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('Admin/assets/images/favicon.ico')}}">

    <!-- Plugins css -->
    <link href="{{asset('Admin/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('Admin/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('Admin/assets/css/bootstrap-modern.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('Admin/assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('Admin/assets/css/bootstrap-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="{{asset('Admin/assets/css/app-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

    <!-- icons -->
    <link href="{{asset('Admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    @include('layouts.admin_body.top_bar')
    <!-- end Topbar -->
<!-- ========== Left Sidebar Start ========== -->
  @include('layouts.admin_body.left_sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    {{--    contentpage here--}}

    @yield('admin_home_content')

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('layouts.admin_body.right_sidebar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('Admin/assets/js/vendor.min.js')}}"></script>

<!-- Plugins js-->
<script src="{{asset('Admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('Admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('Admin/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

<!-- Dashboar 1 init js-->
<script src="{{asset('Admin/assets/js/pages/dashboard-1.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('Admin/assets/js/app.min.js')}}"></script>

</body>
</html>
