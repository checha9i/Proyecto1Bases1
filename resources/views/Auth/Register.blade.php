<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <style>
        body {
            width: 550px;
            margin: 50px auto;
        }
        .badge {
            float: right;
        }
    </style>
</head>
<body>
    <h1>Registro Usuario</h1>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h4>Datos Personales del Cliente</h4>
        </div>

        <div class="panel-body">
            <center>
                 <form action="/Register" method="get">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="text" id="name" name="name" placeholder="Nombre" class="form-control" required>
					 <input type="text" id="edad" name="edad" placeholder="Edad" class="form-control" required>
					 <input type="text" id="dir" name="dir" placeholder="Direccion" class="form-control" required>
					 <input type="text" id="tel" name="tel" placeholder="Telefono" class="form-control" required>
					 <input type="email" name="corr" id="corr" placeholder="Email" class="form-control" required>
					 <p>
				     <select name="SelectForm" id="SelectForm">
					 <option value="">Elija Formulario</option>
					 @foreach($pregs as $preg)
						<option value="{{$preg->id_examen}}">{{$preg->NombreF}}</option>
					 @endforeach
					 </select>
					 </p>
                     <input type="submit" name="Registrar" value="Registrar">
                 </form>		 
             </center>
        </div>
    </div>
</body>
</html>