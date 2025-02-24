<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center d-none d-sm-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-4 pt-5">
					<a href="javascript:;"><img src="{{ asset('images/logo.png') }}" class="dark-login"  alt="" width="220"></a>
					<a href="javascript:;"><img src="{{ asset('images/logo.png') }}" class="light-login" alt=""></a>
				</div>
				<h3 class="mb-2">Welcome back!</h3>
			</div>
			<div class="aside-image" style="background-image:url({{ asset('images/login-bg.jpg') }});"></div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
                @yield('content')
			</div>
		</div>
	</div>
    <script src="{{ asset('js/global.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/ic-sidenav-init.js') }}"></script>
</body>
</html>
