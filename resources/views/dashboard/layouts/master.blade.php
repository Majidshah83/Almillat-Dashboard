<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
	<meta charset="utf-8">
	<link href="{{asset('dist/images/logo.svg')}}" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- seo tags-->
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="canonical" href="{{url()->current()}}" />
    <meta name="robots" content="@yield('robots')"/>
    <meta name="twitter:title" content="@yield('twittertitle')"/>
    <meta name="twitter:card" content="@yield('twitterCard')"/>
    <meta name="twitter:description" content="@yield('twitterDescription')"/>
    <meta name="twitter:site" content="@yield('twitter_site')"/>
    <meta name="og:site:title" content="@yield('ogsiteTitle')"/>
    <meta name="og:site:name" content="@yield('ogsitename')"/>
    <meta name="og:description:name" content="@yield('ogsiteDescription')"/>
 	<!-- end seo tags-->
	<meta name="author" content="LEFT4CODE">
	<!-- BEGIN: CSS Assets-->
	<link rel="stylesheet" href="{{asset('dist/css/app.css')}}" />
	<!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5">
	<div class="flex mt-[4.7rem] md:mt-0">
		<!-- BEGIN: Side Menu -->@include('dashboard.layouts.sideMenu')
		<!-- end: Side Menu -->
		<div class="content">
			<!-- BEGIN: Top Bar -->@include('dashboard.layouts.header')
			<!-- END: Top Bar -->@yield('content') </div>
		<!-- END: Content -->
	</div>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api "]&libraries=places"></script>
	<script src="{{asset('dist/js/app.js')}}"></script>
	<!-- END: JS Assets-->
</body>

</html>
