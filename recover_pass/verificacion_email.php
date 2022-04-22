 
<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";


include($path);


	if (isset($_POST)) {
		
		 
		$email = $_POST['destinatario'];
		$password = $_POST['password'];
		$contraseña="jlospino"; 
$pass=openssl_encrypt($password, 'aes-256-ecb', $contraseña);
       

$q1=mysqli_query($con,"SELECT COUNT(email) as total FROM users where `email`='$email'" );
 
 
$fila = mysqli_fetch_assoc($q1);
 
 

if( $fila['total'] == 0)
{
 
 
 
   echo '<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tutorial de SweetAlert 2</title>
        <script src="sweetalert2.all.min.js"></script>
    </head>
    <body>
        
        <script>
        
let timerInterval
Swal.fire({
   title: "Veririficando email...",
  html: "Por favor, revise su email o en spam apenas terminemos la verificacion",
 
 
  timer: 3000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector("b")
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {


Swal.fire({
 
  icon: "warning",
  title: "Lo sentimos no perteneces a nuestra organizacion!",
  showConfirmButton: false,
  timer: 1500
})

// Simulate an HTTP redirect:
 
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
 
  }
    window.setTimeout(function(){

        // Move to a new location or you can do something else
 window.location.replace("/proyect/login.php");

    }, 2000);
})
 
        </script>
         
        </script>
    </body>
</html>';

}

if($fila['total'] == 1)
{
 

 $q1=mysqli_query($con,"UPDATE users SET password = '$pass'  WHERE email = '$email'");
  
   echo '<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tutorial de SweetAlert 2</title>
        <script src="sweetalert2.all.min.js"></script>
    </head>
    <body>
        
        <script>
        
let timerInterval
Swal.fire({
  title: "Cambiando sus credenciales de acceso",
  html: "Por favor, espere...",
 
  timer: 3000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector("b")
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {

Swal.fire({
 
  icon: "success",
  html: "Perfecto, has modificado tus credenciales!",
  showConfirmButton: false,
  timer: 1500
})

// Simulate an HTTP redirect:
 
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
 
 
  }
     window.setTimeout(function(){

        // Move to a new location or you can do something else
 window.location.replace("/proyect/login.php");

    }, 2000);
})
 
 
        </script>
        
    </body>
</html>';
 } 
        
     
    else 
{
  
  '
			<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tutorial de SweetAlert 2</title>
        <script src="sweetalert2.all.min.js"></script>
    </head>
    <body>
        
        <script>
        Swal.fire({
 icon: "error",
        html: "Por favor, revise el email ingresado u contacte al administrador!",
						type: "error",
 
})

window.setTimeout(function(){

        // Move to a new location or you can do something else
 window.location.replace("/proyect/login.php");

    }, 2000);
 
        </script>
         
        </script>
    </body>
</html>';
  
} } 
 

 ?>
 
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		
		 
		 
		 
 
 


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                 
                 
 

 
