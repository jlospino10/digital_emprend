<?php
  session_start();
 
     include('../database.php');	 
		 
		echo '
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		
		';
		 
		
 
  
   
    if(isset($_POST)) { 
    	/* las funciones test las usaremos para evitar inyección de sql en el formulario. */
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
    }
			
    function test_input_pass($data) {
        $data =($data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
			
			$usuario = test_input($_POST['user']);
			$password = test_input_pass($_POST['pass']);
			$password=$_POST['pass']; 


$contraseña="jlospino"; 
$pass=openssl_encrypt($password, 'aes-256-ecb', $contraseña);
      
      
		
			/*$pass="jlospino"; 
			$contrasena=openssl_encrypt($password, 'aes-256-ecb', $pass);*/
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			$sql = 'SELECT * FROM info_users where email=? and password=?';
			$q = $pdo->prepare($sql);
			$q->bindParam(1, $usuario);
			$q->bindParam(2, $pass);
			$q->execute();
			if ($q->rowCount() == 1) {
				while($row = $q->fetch()){

					$_SESSION['id'] = $row['id_user'];
					$_SESSION['full_name'] = $row['full_name']; 
					$_SESSION['email'] = $row['email'];
	                                $_SESSION['password'] = $row['password']; 
					$_SESSION['creator'] = $row['creator']; 
					$_SESSION['pais'] = $row['pais'];
					$_SESSION['date_stop'] = $row['date_stop'];
					$_SESSION['licencia_stop'] = $row['licencia_stop']; 
					$_SESSION['status'] = $row['status'];
 
					 
					echo '
			<script>
				setTimeout(function() {
				swal({
						title: "Realizado!",
						text: "Perfecto, Hemos comprobado tu identidad.",
						type: "success",
						showConfirmButton: false,
						timer: 2000
					}, function() {
					 		window.location = "/proyect/client/home.php";
				});
				}, 1000);
			</script>
			';
				}
			}
			else{	 
					echo '
			<script>
				setTimeout(function() {
				swal({
						title: "Error!",
						text: "Lo sentimos, error de usuario y/o contraseña",
						type: "error",
						showConfirmButton: false,
						timer: 2000
					}, function() {
					 		window.location = "/proyect/login.php";
				});
				}, 1000);
			</script>
			';
			?>
<?php
		}
	}
	else{
		header("Location: /proyect/login.php");
	}
?> 

 
  
 
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		
		
