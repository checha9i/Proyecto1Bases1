<!DOCTYPE html>
<html lang="en">
<?php $mysqli = new mysqli('localhost', 'javier', '1234', 'basesproyecto1');
?>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                        <h1><strong>OPERADOR</strong></h1>

                    </div>
                </div>

                <div class="row">
                          <div class="container">
                                  <div class="row centered-form">
                                  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                                    <div class="panel panel-default">

                                      <form role="form" action="/CrearForm" method="post" class="login-form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <input type="submit"  class="btn-primary btn-md" name="crear" value="Crear Formulario">
                                     </form>
</br>
                                    <form role="form" action="/EliminarFormulario" method="post" class="login-form">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit"  class="btn-danger btn-md" name="eli" value="Eliminar Formulario">
                                   </form>
</br>
                <form role="form" action="/SelectForm" method="post" class="login-form">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit"  class="btn-success btn-md" name="flujo" value="Comenzar Flujo de Trabajo">
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
