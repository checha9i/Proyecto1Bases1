<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opciones</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 450px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>Opciones para {{Session::get('Pregunta')}}</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
					<li><a href="/IndexABC">Inicio</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar Opciones</h4>
  		</div>

  		<div class="panel-body">
			<form method="get" action="/Opciones">
				@for ($i = 0; $i < Session::get('Opciones'); $i++)
					<p>
						<input type="text" id="opcion{{$i}}" name="opcion{{$i}}" placeholder="Escriba su Opcion" class="form-control" required>
					</p>
				@endfor
				<p>
					<input type="submit" value="Crear" class="btn btn-success">
				</p>
			</form>
		</div>
	</div>
</body>
</html>