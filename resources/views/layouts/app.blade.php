<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WEB</title>
    <!-- CDN -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/media/css/jquery.dataTables.min.css') }}">
    <!-- END CDN -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-light-layout/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>

    @include('layouts.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>


</body>
<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->
{{-- SCRIPT CDN --}}
<script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/js/data-table.js')}}"></script>
<script src="{{ asset('assets/vendors/datatables/media/js/jquery.dataTables.min.js') }}"></script>

{{-- SCRIPT HIGHCHART.JS --}}
<script src="{{asset ('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js')}}"></script>
<script src="{{asset ('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset ('assets/js/formpickers.js')}}"></script>

</html>
