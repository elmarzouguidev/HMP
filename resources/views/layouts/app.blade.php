<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'haymacproduction') }}</title>
    <link rel="shortcut icon" href="img/ico-16.ico">
    <link rel="apple-touch-icon" href="img/ico-57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/ico-72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/ico-114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/ico-144.png" sizes="144x144">
    <!-- Fonts -->

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/isotope.css') }}" rel="stylesheet">

    <link id="primary_color_scheme" href="{{ asset('css/color/blu.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="75">
        <!-- Intro loader -->
            <div class="mask">
                <div id="intro-loader"></div>
            </div>
        <!-- Intro loader -->
        @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
            @yield('content')
        <!-- Back to top -->
		<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
        @include('layouts.footer')


        <script src="{{ asset('js/jquery.js') }}"></script>
        
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/jquery.fitvids.js') }}"></script>
        <script src="{{ asset('js/jquery.easing-1.3.pack.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-modal.js') }}"></script>
        <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery-countTo.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/jquery.easy-pie-chart.js') }}"></script>
        <script src="{{ asset('js/jquery.cycle.all.js') }}"></script>
        <script src="{{ asset('js/jquery.maximage.js') }}"></script>
        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('js/skrollr.js') }}"></script>
        <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/portfolio_custom.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/retina-1.1.0.min.js') }}"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="{{ asset('js/google-map.js') }}"></script>
        @yield('specified_script')
        
</body>
</html>