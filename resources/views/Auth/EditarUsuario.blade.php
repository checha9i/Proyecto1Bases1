<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar</title>

        <!-- CSS -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

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
                    <a class="nav-link " href="/Login"><i class="fa fa-sign-in"></i> Log in</a>
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
                          <h1><strong>Call Center E-Sports</strong></h1>
                          <div class="description">
                            <p>
                            Edite sus datos....
                           </p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                            <div class="container">
                                    <div class="row centered-form">
                                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                                    	<div class="panel panel-default">
                                    		<div class="panel-heading">
                            			    		<h3 class="panel-title">Datos de Usuario </h3>
                            			 			</div>
                            			 		
                                        
                                        @if(!empty($user))
                                        <form role="form" action="/editar/{{$user[0]->id_usu}}" method="get" class="Register-form">
                                        <p>
                                          <input value ="{{$user[0]->nombre}}" type="text" id="name" name="name" placeholder="Nombre">
                                          <input type="submit" value="Actualizar" >
                                        </p>
                                        @else
                                        <p>
                                          No existe informacion para este usuario
                                        </p>

                                        @endif

                            			  	</form>


                            			    	</div>
                            	    		</div>
                                		</div>
                                	</div>
                                </div>
                              

                              <div class="container">
                                <a href="/Login"> Ya tienes una cuenta? Inicia Sesion... </a>
                              </div>
                           


              </div>
          </div>

      </div>
    </div>


        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>

  </body>

</html>
