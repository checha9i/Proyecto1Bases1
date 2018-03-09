<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LogIn</title>

        <!-- CSS -->

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
                    <a class="nav-link " href="/Register"><i class="fa fa-sign-up"></i> Sign Up</a>
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
                            Ingrese sus datos.
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
                            			    		<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
                            			 			</div>
                            			 			<div class="panel-body">
                            			    		<form role="form">
                            			    			<div class="row">
                            			    				<div class="col-xs-6 col-sm-6 col-md-6">
                            			    					<div class="form-group">
                            			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                            			    					</div>
                            			    				</div>
                            			    				<div class="col-xs-6 col-sm-6 col-md-6">
                            			    					<div class="form-group">
                            			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                            			    					</div>
                            			    				</div>
                            			    			</div>

                            			    			<div class="form-group">
                            			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                            			    			</div>

                            			    			<div class="row">
                            			    				<div class="col-xs-6 col-sm-6 col-md-6">
                            			    					<div class="form-group">
                            			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                            			    					</div>
                            			    				</div>
                            			    				<div class="col-xs-6 col-sm-6 col-md-6">
                            			    					<div class="form-group">
                            			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                            			    					</div>
                            			    				</div>
                            			    			</div>

                            			    			<input type="submit" value="Register" class="btn btn-info btn-block">

                            			    		</form>
                            			    	</div>
                            	    		</div>
                                		</div>
                                	</div>
                                </div>



              </div>
          </div>

      </div>



  </body>

</html>
