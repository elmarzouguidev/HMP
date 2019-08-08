<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="devscript abdelghafour">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Haymac').' Administration' }}</title>

    <link rel="icon" type="image/png" sizes="16x16" href="../backend/images/favicon.png">

    <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/chartist-js/dist/chartist-init.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/css-chart/css-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- Styles -->
    @yield('specified_style')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body  class="fix-header fix-sidebar card-no-border">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">

        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />

    </svg>
</div>
<!-- ============================================================== -->

<div id="main-wrapper">

    @include('layouts.navbar.Admin_Top_Nav')

    @include('layouts.navbar.Admin_Left_Nav')

   

    <div class="page-wrapper">

        <div class="container-fluid">

            @include('layouts.navbar.Admin_Bread_Nav')
            
            @yield('content')

            @include('layouts.navbar.Admin_Right_Nav')
        </div>

        

    </div>
    @include('layouts.footer.Admin_Footer')
</div>
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

@yield('specified_script')



<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<script src="{{ asset('backend/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('backend/plugins/chartist-js/dist/chartist.min.js') }}"></script>
<script src="{{ asset('backend/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/echarts/echarts-all.js') }}"></script>
<script src="{{ asset('backend/plugins/toast-master/js/jquery.toast.js') }}"></script>
<script src="{{ asset('js/dashboard1.js') }}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>

<script src="{{ asset('backend/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>


</body>
</html>