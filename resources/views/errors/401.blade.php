<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Acceso restringido</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="box-admin">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="panel-title">Acceso Restringido</div>
				</div>
				<div class="panel-body">
					<strong class="text-center">
						<p class="text-center">Usted no tiene acceso a esta zona</p>
						<p>
							<a href="{{ route('front.index') }}">Deseas volver al inicio?</a>
						</p>
					</strong>
				</div>
			</div>
		</div>
	</div>
</body>
</html>