<?php
  session_start();
 
    if(isset($_SESSION['full_name'])) {
?> 


<!DOCTYPE html>
<html lang="en">

<head>
 
    <title>Servi-Express</title>
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
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="Diseño/assets/images/favicon.svg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="Diseño/assets/fonts/feather.css">
    <link rel="stylesheet" href="Diseño/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="Diseño/assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="Diseño/assets/css/style.css" id="main-style-link"> 
 

</head>

<body class="">

	 			 <script type=»text/javascript»>

document.oncontextmenu = function(){return false;}

</script>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src=" " alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a  class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a  class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a   class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="index.html" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="" alt="" class="logo logo-lg">
					<img src="" alt="" class="logo logo-sm">
 
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>INFORMACION</label>
					</li>
					<li class="pc-item">
						<a href="/proyect/informacion.php" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">book</i></span><span class="pc-mtext">Contenido</span></a>
					</li>
					<li class="pc-item pc-caption">
						<label>CLIENTES</label>
						<span>Administracion</span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a  class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">person</i></span><span class="pc-mtext">Clientes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="/proyect/datatable/create.php">Agregar cliente</a></li>
							<li class="pc-item"><a class="pc-link" href="/proyect/datatable.php">Ver clientes</a></li>
						 
							 
						</ul>
					</li>
					 <li class="pc-item pc-caption">
						<label>LICENCIAS</label>
						<span>Contador de dias</span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a  class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">history</i></span><span class="pc-mtext">Cronometro</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="/proyect/alert/alert_mes.php">Mensual</a></li>
							<li class="pc-item"><a class="pc-link" href="/proyect/alert/alert_licencia.php">Trimestral</a></li>
						 
 
						</ul>
					</li>
					
					<li class="pc-item pc-caption">
						<label>CONTACTAR</label>
					</li>
					<li class="pc-item pc-hasmenu">
						<a  class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">payment</i></span><span class="pc-mtext">Metodos de pago</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="form_elements.html">Email</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_input_group.html">Whatsapp</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_checkbox.html">Telegram</a></li>
							 
						</ul>
					</li>
					 
					<li class="pc-item pc-caption">
						<label>Estadisticas</label>
						<span>Graficos-Descriptivos</span>
					</li>
					<li class="pc-item">
						<a href="/proyect/graficas/chart.php" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">bubble_chart</i></span><span class="pc-mtext">Graficas e Informacion</span></a>
					</li>
					 
					 
					<li class="pc-item pc-caption">
						<label>CUENTA</label>
						<span><?echo $_SESSION['full_name'];?></span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">https</i></span><span class="pc-mtext">Administrar</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" routerLink="/perfil">Editar</a></li>
							<li class="pc-item"><a class="pc-link"  href="/proyect/logout.php"   >Salir</a></li>
						</ul>
					</li> 

				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header">
			 					 
 	  
 <div class="link"> 
 
                  <a href="#"><i class="fab fa-facebook"></i></a>&nbsp;
              
                   <a href="#"><i class="fab fa-instagram"></i></a>&nbsp;
                      <a href="#"><i class="fab fa-google"></i></a>
            </div>
 
	</header>  
	
 

</body>

<style>
  .link i {
    font-size: 40px;
    color: rgb(82, 82, 82);
    transition: all 0.2s ease;
     
        position: relative;
 
  left: 85%;
 
 
} 
.link i:hover{
    color: black;
    cursor: pointer;
}
</style>

 <script src="Diseño/assets/js/vendor-all.min.js"></script>
    <script src="Diseño/assets/js/plugins/bootstrap.min.js"></script>
    <script src="Diseño/assets/js/plugins/feather.min.js"></script>
    <script src="Diseño/assets/js/pcoded.min.js"></script>
    
   
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    <!-- <script src="assets/js/uikit.min.js"></script> -->

<script src="Diseño/assets/js/plugins/apexcharts.min.js"></script>
<script src="Diseño/assets/js/pages/chart-apex.js"></script>
</html>
<?php
    }else{
        header("Location: login.php");
    }
?>
