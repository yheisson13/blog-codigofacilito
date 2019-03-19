<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel Admin </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-xs-12">
	@include('admin.template.partials.nav')

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"> @yield('title','Home') </h3>
	  </div>
	  <div class="panel-body">
	  	@include('flash::message')
	  	@include('admin.template.partials.errors')
	    @yield('content')
	  </div>
	</div>
	
	<div class="panel panel-default">
	  <div class="panel-body text-aling-left">
	    Todos los derechos reservados <span class="glyphicon glyphicon-copyright-mark"></span> 2015 
		<div class="pull-right"> Template </div>
	    <span></span>
	  </div>
	</div>

</div><!--.col-->
</div><!--.row-->
</div><!--.container-->
	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>