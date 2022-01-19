<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>enSaiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="enSaiz" />
	<meta name="keywords" content="enSaiz" />
	<meta name="author" content="enSaiz" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    <link rel="shortcut icon" href="{{  asset("images/favicon.png") }}" type="">





	<!-- Animate.css -->
	<link rel="stylesheet" href="{{  asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{  asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{  asset('css/bootstrap.css') }}">
	<!-- Flexslider  -->
    <link href="{{  asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{  asset('css/easyzoom.css') }}" />

  <link href="{{  asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{  asset('css/flexslider.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{  asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{  asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->


	</head>


  <body>
    @include('component.nav')

    @yield('content')

    @include('component.footer')

    @yield('scripts')

  </body>
</html>
