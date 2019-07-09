<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Human Albumin - @yield('title')</title>
	@include('includes.head')
</head>
<body>
		@include('includes.header.top_header')
	<header>
		@include('includes.header.bottom_header')	
	</header>
	<section>
		@yield('content')
	</section>
	<footer>
		@include('includes.footer')
	</footer>
	
</body>
</html>			