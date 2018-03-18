

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eliminar pregunta </title>


        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
                                                                                    <!-- Favicon and touch icons -->

    </head>

    <body>



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
                      <td>Pregunta</td>
                  <td></td>
                  <td></td>
               </tr>
                  @foreach($formu as $u)
                  <tr>
                     <td>{{ $u->pregunta }}</td>
                        <td>{{ $u->pregunta }}</td>
                     <td> <a href="/editP/{{$u->idpregunta}}" class="btn btn_danger">  Editar</a>
                     <td> <a href="/deleteP/{{$u->idpregunta}}" class="btn btn_danger">  Eliminar</a>

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
