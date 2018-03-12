<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Frontpage - Start Bootstrap Template</title>

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

</br>
</br>
</br>
</br>
</br>
<div class="container">
  <p>Crear Pregunta</p>
  <textarea id="Pregunta" rows="4" cols="100">

</textarea>
  <p>Tipo de Pregunta</p>
  <select id="TipoPregunta" onchange="TipoPregunta()">
    <option value="Seleccione">Seleccione</option>
    <option value="Multiple">Multiple</option>
    <option value="FV">Falso Verdadero</option>
    <option value="Directa">Directa</option>
    <option value="Final">Final</option>
  </select>
  <ul class = "list-group" id="res">

  </ul>

  <button onclick="AgregarPregunta()">Agregar Pregunta</button>


</div>



    <script src="js/Forms/CrearPregunta.js" type="text/javascript" language="JavaScript"></script>

  </body>

</html>
