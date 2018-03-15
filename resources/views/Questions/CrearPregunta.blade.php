<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipos</title>
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			width: 600px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>Administrar Tipo de Evaluaciones</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="/Operador">Pagina Principal Operador</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Tipos de Preguntas</h4>
  		</div>

  		<div class="panel-body">
    		<form method="get" action="/AgregarPregunta">
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>
								<select name="SelectTipoPregunta" id="SelectTipoPregunta">
										<option value="">Elija Tipo Pregunta</option>
										<option value="Directa">Directa</option>
										<option value="OpcionMul">Opcion Multiple</option>
										<option value="VF">Verdadero / Falso</option>
										<option value="Final">Final</option>
								</select>
							</td>
							<td>
								<input type="submit" value="Seleccionar" class="btn btn-success">
							</td>
						</tr>
				</tbody>
			</table>
			</form>
  		</div>

  	</div>
	@if ( Session::get('Reporte') != 'r5' AND  Session::get('Reporte') != null )
	<div class="panel panel-info">
  		<div class="panel-body">
  			<table class="table">
  				<thead>
  					<tr>
  					@if( Session::get('Reporte') == 'r1')
  						<th>Escriba su Pregunta</th>
  						<th>Respuesta Correcta</th>
  						<th>Redirigir Buena</th>
              <th>Redirigir Mala</th>
              </thead>
              <tbody>
                    <form method="get" action="/GuardarPreguntaDina">
                        <p>
              						<input type="text" id="TPregunta" name="TPregunta" placeholder="Escriba su Pregunta" class="form-control" required>
              					</p>
                        <p>
              						<input type="text" id="TRespuesta" name="TRespuesta" placeholder="Escriba su Respuesta Correcta" class="form-control" required>
              					</p>

                        <p>
              						<input type="text" id="TRB" name="TRB" placeholder="Escriba su Redireccion Buena" class="form-control" required>
              					</p>
                        <p>
              						<input type="text" id="TRM" name="TRM" placeholder="Escriba su Redireccion Mala" class="form-control" required>
              					</p>
              				<p>
              					<input type="submit" value="Crear" class="btn btn-success">
              				</p>
              			</form>
      				</tbody>

  					@elseif ( Session::get('Reporte') == 'r2')
  						<th>Escriba su Pregunta</th>
              <th>Respuesta Correcta</th>
              <th>Opcion 1</th>
              <th>Opcion 2</th>
              <th>Opcion 3</th>
              <th>Opcion 4</th>
              <th>Redirigir Buena</th>
              <th>Redirigir Mala</th>
              </thead>

              <tbody>
                    <form method="get" action="/GuardarPreguntaDina">
                        <p>
              						<input type="text" id="TPregunta" name="TPregunta" placeholder="Escriba su Pregunta" class="form-control" required>
              					</p>
                        <p>
              						<input type="text" id="TRespuesta" name="TRespuesta" placeholder="Escriba su Respuesta Correcta" class="form-control" required>
              					</p>
                          <p>
                            <input type="text" id="Op1" name="Op1" placeholder="Escriba su Opcion 1" class="form-control" required>
                          </p>
                          <p>
                            <input type="text" id="Op2" name="Op2" placeholder="Escriba su Opcion 2" class="form-control" required>
                          </p>
                          <p>
                            <input type="text" id="Op3" name="Op3" placeholder="Escriba su Opcion 3" class="form-control" required>
                          </p>
                          <p>
                            <input type="text" id="Op4" name="Op4" placeholder="Escriba su Opcion 4" class="form-control" required>
                          </p>

                        <p>
              						<input type="text" id="TRB" name="TRB" placeholder="Escriba su Redireccion Buena" class="form-control" required>
              					</p>
                        <p>
              						<input type="text" id="TRM" name="TRM" placeholder="Escriba su Redireccion Mala" class="form-control" required>
              					</p>
              				<p>
              					<input type="submit" value="Crear" class="btn btn-success">
              				</p>
              			</form>
      				</tbody>
  					@elseif ( Session::get('Reporte') == 'r3')
              <th>Escriba su Pregunta</th>
              <th>Respuesta Correcta</th>
              <th>Redirigir Buena</th>
              <th>Redirigir Mala</th>
              </thead>

              <tbody>
                    <form method="get" action="/GuardarPreguntaDina">
                        <p>
              						<input type="text" id="TPregunta" name="TPregunta" placeholder="Escriba su Pregunta" class="form-control" required>
              					</p>
                        <p>
              						<input type="text" id="TRespuesta" name="TRespuesta" placeholder="Escriba su Respuesta Correcta" class="form-control" required>
              					</p>

                        <p>
              						<input type="text" id="TRB" name="TRB" placeholder="Escriba su Redireccion Buena" class="form-control" required>
              					</p>
                        <p>
              						<input type="text" id="TRM" name="TRM" placeholder="Escriba su Redireccion Mala" class="form-control" required>
              					</p>
              				<p>
              					<input type="submit" value="Crear" class="btn btn-success">
              				</p>
              			</form>
      				</tbody>

  					@elseif ( Session::get('Reporte') == 'r4')
              <th>Escriba Descripcion de Despedida</th>
              </thead>

              <tbody>
                    <form method="get" action="/GuardarPreguntaDina">
                      <p>
            						<input type="text" id="TPregunta" name="TPregunta" placeholder="Escriba su Descripcion" class="form-control" required>
            					</p>
              				<p>
              					<input type="submit" value="Terminar" class="btn btn-success">
              				</p>
              			</form>
      				</tbody>
  					@endif
  					</tr>
          </table>
  		</div>

  	</div>
	@endif
</body>
</html>
