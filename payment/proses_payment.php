<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";


include($path);


	if (isset($_POST)) {
		$id = $_POST['id'];
		$nequi = $_POST['nequi'];
		$daviplata = $_POST['daviplata'];
		$otro = $_POST['otro'];
		$paypal = $_POST['paypal'];
		  

$q1=mysqli_query($con,"SELECT COUNT(*) as total FROM payments where `id_user`='$id'" );
 
 
$fila = mysqli_fetch_assoc($q1);
 
 

if( $fila['total'] == 0)
{
 $q1=mysqli_query($con,"INSERT INTO payments VALUES(NULL,'$id','0','0','0','0')")or die('Error2');
 $q2=mysqli_query($con,"UPDATE `payments` SET  `paypal`='$paypal', `nequi`='$nequi', `daviplata`='$daviplata', `otro`='$otro'  where `id_user`='$id' ");
 
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
  title: "Creando datos para sus metodos de pago...",
  html: "Por favor, espere mientras creamos su apartado",
 
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
  title: "Perfecto, has agregado tus metodos de pago",
  showConfirmButton: false,
  timer: 1500
})

// Simulate an HTTP redirect:
 
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
 
  }
    window.setTimeout(function(){

        // Move to a new location or you can do something else
 window.location.replace("/proyect/payment/payment.php");

    }, 2000);
})
 
        </script>
         
        </script>
    </body>
</html>';

}

if($fila['total'] == 1)
{
 

  $q1=mysqli_query($con,"UPDATE `payments` SET  `paypal`='$paypal', `nequi`='$nequi', `daviplata`='$daviplata', `otro`='$otro'  where `id_user`='$id' ");
  
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
  title: "Cambiando sus metodos de pago",
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
  title: "Perfecto, has modificado tus metodos de pago",
  showConfirmButton: false,
  timer: 1500
})

// Simulate an HTTP redirect:
 
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
 
 
  }
     window.setTimeout(function(){

        // Move to a new location or you can do something else
 window.location.replace("/proyect/payment/payment.php");

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
  title: "Oops...",
  text: "Hubo un error!"
 
})

window.setTimeout(function(){

        // Move to a new location or you can do something else
 window.location.replace("/proyect/payment/payment.php");

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
		
		 
