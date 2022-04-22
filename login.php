<?
include("database.php");
  $q1=mysqli_query($con,"select image_login from  config_web ");

 
  session_start();
 
    if(!isset($_SESSION['full_name'])) {
?> 

</html><!DOCTYPE html>
<html lang="en">

<head> 
                 
	<title>DashboardKit Bootstrap 5 Admin Template</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Favicon icon -->
	<link rel="icon" href="Diseño/assets/images/favicon.svg" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="Diseño/assets/fonts/feather.css">
	<link rel="stylesheet" href="Diseño/assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="Diseño/assets/fonts/material.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="Diseño/assets/css/style.css" id="main-style-link">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>


<!-- [ auth-signin ] start -->
<div class="auth-wrapper">

	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-11">
					<div class="card-body">
						<h5 class="">INICIAR SESION</h5>
						   <form action="Diseño/validacion.php" method="post" name="FormEntrar">
						   
						<div class="input-group mb-3">
							<span class="input-group-text"><i data-feather="mail"></i></span>
							<input type="email" name="user" class="form-control" placeholder="INGRESAR CORREO">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i data-feather="lock"></i></span>
							<input type="password" name="pass" class="form-control" placeholder="INGRESAR CONTRASEÑA">
						</div>
						<div class="form-group text-left mt-2">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">
									Guardar Credenciales
								</label>
							</div>
						</div>
						<?
						
						  $q1=mysqli_query($con,"select image_login from  config_web ");
						 $row = $q1->fetch_assoc();

 
						  ?>
						<button class="btn btn-block btn-primary mb-3">ENTRAR  </button>
	
							 </form>
							 <div class="card right">
							 <img src="/proyect/uploads/<?echo  $row['image_login'];?>">
								</div>
							 <h5>¿Olvidaste Tu Contraseña?<a href="/proyect/recover_pass/contactenos.php"> Precioname</a></h5>
							 <script>

						function func() {
					swal({
			 
						title: 'Restablecer Usuario',
						icon: 'info',
						text: 'Te mandaremos Todo a tu correo',
						content: {
   						 element: "input",
    						attributes: {
      						placeholder: "Email",
      						type: "Email",
    							},
							},
								position: "bottom",
								button: "ENVIAR CORREO" 
				
				
		})

	}


	</script>
					</div>
				</div>
			</div>
			</div>
		</div>

	</div>

<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="Diseño/assets/js/vendor-all.min.js"></script>
<script src="Diseño/assets/js/plugins/bootstrap.min.js"></script>
<script src="Diseño/assets/js/plugins/feather.min.js"></script>
<script src="Diseño/assets/js/pcoded.min.js"></script>
<script>
</script>


</body>

</html>
<?php
    }else{
        header("Location: /proyect/client/home.php");
    }
?>
