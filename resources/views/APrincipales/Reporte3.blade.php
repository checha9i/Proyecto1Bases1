
<?php
$connect = mysqli_connect("localhost", "javier", "1234", "basesproyecto1");
$query = "select f.NombreF, Count(*) as clientes from formulario f, respuestacliente rc ,preguntaformulario pf where pf.idpreguntaformulario = rc.preguntaformulario_idpreguntaformulario and pf.formulario_id_examen=f.id_examen group by f.NombreF";
$result = mysqli_query($connect, $query);
?>
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

                    <h1><strong>Reporte 3</strong>  </h1>

            <p> </p>

            <center>

              <div style="width:900px;">
                              <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>
                              <br />
                              <div id="piechart" style="width: 900px; height: 500px;"></div>
                         </div>



            </center>



                </div>
            </div>


        </div>


    </div>

</div>  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
          google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {

               var data = google.visualization.arrayToDataTable([
                         ['Flujo', 'Clientes'],
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo "['".$row["NombreF"]."', ".$row["clientes"]."],";
                         }
                         ?>
                    ]);
               var options = {
                     title: 'Clientes vrs Flujo',
                     //is3D:true,
                     pieHole: 0.4
                    };
               var chart = new google.visualization.BarChart(document.getElementById('piechart'));
               chart.draw(data, options);
          }
          </script>
</body>

</html>
