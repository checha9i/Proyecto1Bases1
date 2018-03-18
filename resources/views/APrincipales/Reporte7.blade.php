

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eliminar Formulario</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">



                                                                                    <!-- Favicon and touch icons -->

    </head>

    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Call Center E-Sports</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/Login"><i class="fa fa-sign-in"></i> Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/Register">Sign Up</a>
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

                    <h1><strong>Formulario Para Eliminar</strong>  </h1>

            <p> </p>

            <center>
            <table class="table table-striped table-bordered" border = "5">
               <tr>
                      <td>Respuesta</td>
                  <td>Pregunta</td>

               </tr>
                  @foreach($report as $u)
                  <tr>
                     <td>{{ $u->Respuesta }}</td>
                     <td>{{ $u->pregunta }}</td>


                  </tr>
                  @endforeach
            </table>

            </center>



                </div>
            </div>


        </div>



    </div>

</div>

</body>

</html>
