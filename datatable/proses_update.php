<?php
include('../database.php');
 
		$id = $_POST['id'];
		$name = $_POST['full_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$contraseña="jlospino"; 
$pass=openssl_encrypt($password, 'aes-256-ecb', $contraseña);
      
		$status = $_POST['status'];
		$pais = $_POST['pais'];
 

		$query = "UPDATE users 
				  SET 
				  		full_name = '$name', 
				  		email = '$email', 
				  		password = '$pass', 
				  		id_status = '$status', 
				  		pais = '$pais'
 
				  WHERE
				  		id_user = '$id'
				";

		if ($con->query($query) === TRUE) {
			Header('Location: ../datatable.php');		
		}else {
			echo 'Error: ' . $con->error;
		}
	 
	$con->close();
?>
