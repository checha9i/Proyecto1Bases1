<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Leer</title>
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
	<h1>Encuesta </h1>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Pregunta : {{Session::get('Pregunta')}}</h4>
  		</div>

		<div class="panel-body">
			<form method="get" action="/LeerPublicacion2/{{Session::get('IdForm')}}">
				<p>
				@if($pregs[0]->TipoPregunta == 1 || $pregs[0]->TipoPregunta == 3)
					 <input type="text" name="SelectRespuesta" id="SelectRespuesta" class="form-control" placeholder="Escriba su Respuesta"><br/>
				@elseif ($pregs[0]->TipoPregunta == 2)
					<select name="SelectRespuesta" id="SelectRespuesta">
						<option value="">Elija Respuesta</option>
						<option value="{{$pregs[0]->respuesta1}}">{{$preg->respuesta1}}</option>
						<option value="{{$pregs[0]->respuesta2}}">{{$preg->respuesta2}}</option>
						<option value="{{$pregs[0]->respuesta3}}">{{$preg->respuesta3}}</option>
						<option value="{{$pregs[0]->respuesta4}}">{{$preg->respuesta4}}</option>
					</select>
				@elseif ($pregs[0]->TipoPregunta == 4)
					<p hidden>
						<select name="SelectRespuesta" id="SelectRespuesta">
							<option value="final">Elija Respuesta</option>
						</select>
					</p>
				@endif
				</p>
				<p>
					@if (Session::get('TipPreg') == 4)
						<input type="submit" value="Finalizar" class="btn btn-success">
						{{Session::put('PreguntaActual', (Session::get('PreguntaActual')+1))}}

					@else
						<input type="submit" value="Responder" class="btn btn-success">
					@endif

					<a href="/Operador" class="btn btn-danger">Salir</a>
				</p>
			</form>
		</div>
			{{Session::get('ConteoPreguntas')}}
			{{Session::get('PreguntaActual')}}
	</div>
</body>
</html>
