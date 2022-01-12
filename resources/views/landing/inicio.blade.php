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


	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">


	<!-- Animate.css -->
	<link rel="stylesheet" href="{{  asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{  asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{  asset('css/bootstrap.css') }}">
	<!-- Flexslider  -->
    <link href="{{  asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css" />

  <link href="{{  asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{  asset('css/flexslider.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{  asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{  asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
	<![endif]-->

	</head>


  <body>
    @include('component.nav')

    @yield('content')

    @include('component.footer')

    @yield('scripts')

  </body>
</html>
