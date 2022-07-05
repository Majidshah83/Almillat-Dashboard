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
    {{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" target="_blank" rel="nofollow"  integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
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
</body>
</html>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api "]&libraries=places"></script>

	<script src="{{asset('dist/js/app.js')}}"></script>
	<!-- END: JS Assets-->
    <script>
ClassicEditor
.create( document.querySelector( '#body' ) )
.catch( error => {
console.error( error );
} );
</script>



</body>

</html>

