

<?php

  $servername = "localhost";
$username = "javier";
$password = "1234";

// Create connection
$conexion = new mysqli($servername, $username, $password,'basesproyecto1');


  $categorias = array('usuario');
  $enero = array('tipo_puesto');

  $consulta = "SELECT nombre FROM usuario";
  $result = $conexion->query($consulta);

  while ($fila = $result->fetch_array()) {
    $categorias[] = $fila['nombre'];
  }




?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Call-Center e-Sports</title>

    <!-- Bootstrap core CSS -->

    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>


  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Call Center E-Sports</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/"><i class="fa fa-user"></i>Cuenta</a>
                </li>
                <li class="nav-item">
              <a class="nav-link " href="/"><i class="fa fa-sign-out"></i>Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
  </br></br></br></br></br></br>
                        <h1><strong>Principal User</strong></h1>

                    </div>
                </div>

                <div class="row">
                          <div class="container">
                                  <div class="row centered-form">
                                  <div class=" col-md-4 col-md-offset-4">
                                    <div class="panel panel-default">


                                      <form role="form" action="/Report1" method="post" class="login-form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                      <input type="submit"  class="btn-info btn-md" name="crear" value="Reporte 1 Clientes menores de edad">
                                     </form>

<form role="form" action="/Report2 " method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-default btn-md" name="crear" value="Reporte 2 Estado de clientes">
</form>

<form role="form" action="/Report3" method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-info btn-md" name="crear" value="Reporte 3 Grafica">
</form>



<form role="form" action="/Report4" method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-default btn-md" name="crear" value="Reporte 4 Bitacora">
</form>




<form role="form" action="/Report5" method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-info btn-md" name="crear" value="Reporte 5 Top 10 de formulario">
</form>

<form role="form" action="/Report6" method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-default btn-md" name="crear" value="Reporte 6 Clientes que respondieron formularios">
</form>

<form role="form" action="/Report7" method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-info btn-md" name="crear" value="Reporte 7 Respuesta cliente por pregunta">
</form>

<form role="form" action="/Report8" method="post" class="login-form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit"  class="btn-default btn-md" name="crear" value="Reporte 8 Grafica de porcentajes">
</form>



                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>






            </div>
        </div>

    </div>




    <script src="js/Forms/CrearPregunta.js" type="text/javascript" language="JavaScript"></script>

  </body>

</html>
