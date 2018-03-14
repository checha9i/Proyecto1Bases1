<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reg. Operador</title>

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
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                     

                            <h1><strong>Crear Operador</strong> Operador </h1>


                        
                    </div>
                   
               
                        <form role="form" action="/regisop" method="post" class="Register-form">
                                        <div class="panel-body">
                                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           
                                            <div class="row">
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">

                                                  <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Primer Nombre">
                                                </div>
                                              </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Apellidos">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <input type="text" name="CUI" id="CUI" class="form-control input-sm" placeholder="CUI">
                                            </div>
                                            <div class="form-group">
                                              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <input type="text" name="Salario" id="Salario" class="form-control input-sm" placeholder="Salario Base">
                                            </div>

                                            <div class="row">
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                  <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseñia">
                                                </div>
                                              </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirmar Contraseña">
                                                </div>
                                              </div>
                                          </div>

                                            <input type="submit" value="Registrar Operador" class="btn btn-info btn-block">

                                          </form>


                </div>
            </div>

        </div>


   

    </body>

</html>
