<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Call-Center e-Sports</title>

    <!-- Bootstrap core CSS -->
    <style>
    /* -------------------- Page Styles (not required) */


    /* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
    /* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
    .styled-select {
       background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
       height: 29px;
       overflow: hidden;
       width: 240px;
    }

    .styled-select select {
       background: transparent;
       border: none;
       font-size: 14px;
       height: 29px;
       padding: 5px; /* If you add too much padding here, the options won't show in IE */
       width: 268px;
    }

    .styled-select.slate {
       background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
       height: 34px;
       width: 240px;
    }

    .styled-select.slate select {
       border: 1px solid #ccc;
       font-size: 16px;
       height: 34px;
       width: 268px;
    }

    /* -------------------- Rounded Corners */
    .rounded {
       -webkit-border-radius: 20px;
       -moz-border-radius: 20px;
       border-radius: 20px;
    }

    .semi-square {
       -webkit-border-radius: 5px;
       -moz-border-radius: 5px;
       border-radius: 5px;
    }

    /* -------------------- Colors: Background */
    .slate   { background-color: #ddd; }
    .green   { background-color: #779126; }
    .blue    { background-color: #3b8ec2; }
    .yellow  { background-color: #eec111; }
    .black   { background-color: #000; }

    /* -------------------- Colors: Text */
    .slate select   { color: #000; }
    .green select   { color: #fff; }
    .blue select    { color: #fff; }
    .yellow select  { color: #000; }
    .black select   { color: #fff; }


    /* -------------------- Select Box Styles: danielneumann.com Method */
    /* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
    #mainselection select {
       border: 0;
       color: #EEE;
       background: transparent;
       font-size: 20px;
       font-weight: bold;
       padding: 2px 10px;
       width: 378px;
       *width: 350px;
       *background: #58B14C;
       -webkit-appearance: none;
    }

    #mainselection {
       overflow:hidden;
       width:350px;
       -moz-border-radius: 9px 9px 9px 9px;
       -webkit-border-radius: 9px 9px 9px 9px;
       border-radius: 9px 9px 9px 9px;
       box-shadow: 1px 1px 11px #330033;
       background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
    }


    /* -------------------- Select Box Styles: stackoverflow.com Method */
    /* -------------------- Source: http://stackoverflow.com/a/5809186 */
    select#soflow, select#soflow-color {
       -webkit-appearance: button;
       -webkit-border-radius: 2px;
       -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
       -webkit-padding-end: 20px;
       -webkit-padding-start: 2px;
       -webkit-user-select: none;
       background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
       background-position: 97% center;
       background-repeat: no-repeat;
       border: 1px solid #AAA;
       color: #555;
       font-size: inherit;
       margin: 20px;
       overflow: hidden;
       padding: 5px 10px;
       text-overflow: ellipsis;
       white-space: nowrap;
       width: 300px;
    }

    select#soflow-color {
       color: #fff;
       background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
       background-color: #779126;
       -webkit-border-radius: 20px;
       -moz-border-radius: 20px;
       border-radius: 20px;
       padding-left: 15px;
    }
    </style>
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
  <p>Crear Pregunta</p>

  <textarea id="Pregunta" class="form-control">

</textarea>
  <p>Tipo de Pregunta</p>
  <select id="TipoPregunta" class="styled-select blue semi-square" onchange="TipoPregunta()">
    <option value="Seleccione">Seleccione</option>
    <option value="Multiple">Multiple</option>
    <option value="FV">Falso Verdadero</option>
    <option value="Directa">Directa</option>
    <option value="Final">Final</option>
  </select>

  <ul class = "list-group" id="res">

  </ul>



</div>



    <script src="js/Forms/CrearPregunta.js" type="text/javascript" language="JavaScript"></script>

  </body>

</html>
