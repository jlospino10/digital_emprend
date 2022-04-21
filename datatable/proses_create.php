<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";


include($path);


	if (isset($_POST)) {
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
$contraseña="jlospino"; 
$pass=openssl_encrypt($password, 'aes-256-ecb', $contraseña);
      
		$pais = $_POST['pais'];
		$status = $_POST['id_status'];
		$creator = $_POST['creator'];
		
$fecha_actual = date("Y-m-d");
//sumo 1 mes
$date_stop= date("Y-m-d",strtotime($fecha_actual."+ 1 month")); 
//sumo 3 mes 
$licencia_stop= date("Y-m-d",strtotime($fecha_actual."+ 3 month")); 

/*

$resultAll = mysqli_query($con, "SELECT count(*) as total
				  from users 
				  		 
				  WHERE
				   email = '$email'");
 while($rowData = mysqli_fetch_array($resultAll)){
  		echo "ya existe", $rowData["total"].'<br>';
	}*/
		$query = "INSERT INTO `users` (`id_user`, `full_name`, `email`, `password`, `photo`, `pais`, `phone`, `id_payment`, `id_status`, `creator`, `date_start`, `date_stop`, `licencia_stop`) VALUES(NULL,'$full_name', '$email', '$pass', '', '$pais', '', NULL, '$status', '$creator','$fecha_actual', '$date_stop', '$licencia_stop')";
	 

		if ($con->query($query) === TRUE) {
			Header('Location: ../datatable.php');		
		}else {
			echo "Error: " . $con->error;
		}
	}
		
	$con->close();
?>
