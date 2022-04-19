 

	      	  <?php
include('database.php');
 
		 
		$email = $_POST['destinatario'];
		$password = $_POST['password'];
		$contraseña="jlospino"; 
$pass=openssl_encrypt($password, 'aes-256-ecb', $contraseña);
       
 

		$query = "UPDATE users 
				  SET 
				  		 
				  		 
				  		password = '$pass' 
 
				  WHERE
				  		email = '$email'
				";

		if ($con->query($query) === TRUE) {
			Header('Location: login.php');		
		}else {
			echo 'Error: ' . $con->error;
		}
	 
	$con->close();
?>

