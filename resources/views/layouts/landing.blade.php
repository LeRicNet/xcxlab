<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'XCXLab') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/all.css') }}" rel="stylesheet">

	@livewireStyles
	</head>

	<body style="background: rgb(34,193,195);
					background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);">
		
		<!-- Header -->
		<header>
		<div class="text-right" style="padding-right: 20px; padding-top: 10px;">
			<a href="{{ route('login') }}">Login</a>
			<a href="{{ route('register') }}">Register</a>
			<a href="{{ Auth::logout() }}">Logout</a>
			</div>
		</header>
		
		<div>
		<img src="{{ asset('imgs/logo.svg') }}" class="mx-auto d-block" style="width: 30%; margin-top: 10%;">
		</div>
		
		<div class="text-center">
			<a href="{{ url('/dashboard') }}">
				<button type="button" class="btn btn-outline-dark btn-lg">Current Projects</button>
			</a>
		<button type="button" class="btn btn-outline-dark btn-lg" href="#">Participate</button>
		</div>
		
		
		<!-- Footer -->
		<footer class="mt-auto">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Eric Prince 2022</span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->
		
		@livewireScripts
	</body>

</html>