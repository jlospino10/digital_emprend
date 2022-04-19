
<?php
// Conectamos base de datos
 
$host_name = "localhost";
$database = "digital_emprend"; // Change your database name
$username = "root";        // Your database user id 
$password = "";        // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
 
//preparamos la consulta
$SQLDatos = "SELECT * FROM users";

//ejecutamos la consulta
$result = $dbo($SQLDatos);
//obtenemos número filas
$numFilas = mysql_num_rows($result);

//cargamos array con los nombres de las métricas a visualizar
$datos[0] = array('id_status','date_stop');

//recorremos filas
for ($i=1; $i<($numFilas+1); $i++)
{
    $datos[$i] = array(mysql_result($result, $i-1, "date_stop"),
    (int) mysql_result($result, $i-1, "id_status"));
}

mysql_close($conexion);
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" > </script>
<!-- Load the AJAX API -->
<script type="text/javascript" src="https://www.google.com/jsapi" > </script>
<script type="text/javascript"
src="https://www.google.com/jsapi?autoload={
'modules':[{
'name':'visualization',
'version':'1',
'packages':['corechart']
}]
}"></script>
 
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
 
function drawChart() {
 
//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
var cargaDatos = <?php echo json_encode($datos); ?>;
 
var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
 
var options = {
title: 'Ejemplo gráfica',
curveType: 'function',
legend: { position: 'bottom' }
};
 
var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
 
chart.draw(datosFinales, options);
}
 
</script>
</head>
<body>
<div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>
