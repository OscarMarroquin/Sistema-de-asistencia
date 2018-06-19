 <!DOCTYPE html>
<html lang="en">
 
<?php
require("comunes/head.php");
require("permisos.php");

?>


 <?php
$con = new mysqli("localhost","root","","asistencia");
$sql = "SELECT cedula,fecha FROM marcados;";
$res = $con->query($sql);
?>

<html>
  <head>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Nombre', 'Dia'],

          <?php
          while($fila = $res->fetch_assoc()) {
            echo "['".$fila["cedula"]."',".$fila["fecha"]."],";
         
          }
          ?>
          /*['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
          */
          
        ]);

        var options = {
          title: 'Grafica de control de alumnos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 1000px; height: 500px;"></div>
	
	<?php   require("comunes/nav_admin.php"); ?>
	
	<?php   require("comunes/footer.php"); ?>

    <?php   require("comunes/scripts.php"); ?>
  </body>
</html>