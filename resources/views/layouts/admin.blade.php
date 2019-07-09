<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Human Albumin - @yield('title')</title>
	@include('includes.adminhead')
</head>

<body class="hold-transition skin-blue sidebar-mini hold-transition login-page">
		
	<header>
		@guest

		@else
			@include('includes.adminHeader')	
		@endguest
	</header>
	<section>
		@guest

		@else
			@include('includes.adminSidebar')	
		@endguest
		@yield('content')
	</section>
	<footer>
		@guest

            <script src="{{asset('admin/js/jquery.min.js')}}"></script>
			<script src="{{asset('admin/css/iCheck/icheck.min.js')}}"></script>	
			<script>
			  $(function () {
			    $('input').iCheck({
			      checkboxClass: 'icheckbox_square-blue',
			      radioClass: 'iradio_square-blue',
			      increaseArea: '20%' /* optional */
			    });
			  });
			</script>
		@else
			@include('includes.adminFooter')	
		@endguest
	</footer>
	
</body>
</html>			