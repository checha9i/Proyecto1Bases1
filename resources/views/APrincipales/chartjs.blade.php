<!DOCTYPE html>
<html>
    <head>

        <script src="js/camvasjs.min.js"></script>
        <script type="text/javascript">
            
            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer", {
                    title:{
                        text: "jejeje"
                    },
                    data:[
                    {
                        type:"column",
                        dataPoints: [
                            {label: "mango", y=20}
                        ]

                      }
                    ]

                });
                Chart.render();

            }


        </script>


    </head>
    <body>
     <div id ="chartContainer" style="height: 270px; width: : 40%;">  </div>
    </body>
</html>