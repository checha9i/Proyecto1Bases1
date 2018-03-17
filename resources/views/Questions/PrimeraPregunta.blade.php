<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Call-Center e-Sports</title>


<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

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
    <form role="form" action="/PrimeraPregunta" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <p>Crear Pregunta</p>

<input type="textarea" name="Pregunta" class="form-control" rows="4"  ><br/>

<p>Respuesta</p>
  <input type="text" class="form-control"  name="Respuesta" rows="2" ></br>

  <p>Respuesta Buena</p>
  <input type="text" name="Buena" class="form-control" placeholder="A Donde ir"><br/>
  </br>
  <p>Respuesta Mala</p>
  <input type="text" name="Mala" class="form-control" placeholder="A Donde ir"><br/>
  </br>
 <input type="submit" name="PrimeraPregunta" value="Crear Primera Pregunta">
</form>
</div>



    <script src="js/Forms/CrearPregunta.js" type="text/javascript" language="JavaScript"></script>

  </body>

</html>
