<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="author" content="{{ $author }}">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/isotope.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/da-slider.css') }}" />
    <!-- Owl Carousel Assets -->
    <link href="{{ asset('assets/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <!-- Font Awesome -->
    <link href="{{ asset('assets/font/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>
    
	
<header class="header">
	@yield('header')
</header>
<!--/.header-->
	
	
    @yield('content')
	
	@yield('footer')

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="{{ asset('assets/js/modernizr-latest.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.8.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.cslider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/owl-carousel/owl.carousel.js') }}"></script>
</body>
</html>
