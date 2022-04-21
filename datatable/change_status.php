<?php
 
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";


include($path);


  session_start();
$creator=$_SESSION['full_name'];
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		
$fecha_actual = date("Y-m-d");
//sumo 1 mes
$date_stop= date("Y-m-d",strtotime($fecha_actual."+ 1 month")); 
//sumo 3 mes
$licencia_stop= date("Y-m-d",strtotime($fecha_actual."+ 3 month")); 

		$query = "UPDATE users SET id_status=1, date_start='$fecha_actual', date_stop='$date_stop', licencia_stop='$licencia_stop' WHERE id_user = '$id' and creator='$creator' ";
		if ($con->query($query)) {
			Header('Location: ../datatable.php');
		}else {
			echo "Error  al eliminar " . $con->error;
		}
	}

	$con->close();

?>
