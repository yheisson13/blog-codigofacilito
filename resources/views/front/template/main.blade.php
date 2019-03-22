<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Home') | Codigo Facilito</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
	<header>
		@include('front.template.partials.header')
	</header>
	<div class="container">
		@yield('content')
		<footer>
			<hr>
			Todos los derechos reservados &copy; {{ date('Y') }}
			<div class="pull-right">Yheisson Gonzalez</div>
		</footer>
	</div>

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>