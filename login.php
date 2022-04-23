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
						   <div class="sel sel--black-panther">
  <select name="level" id="select-profession">
    <option value="client" select>Cliente</option>
    <option value="admin">Administrador</option>
        <option value="client">Cliente</option>
  </select>
</div> <br><br>

						<div class="input-group mb-2">
							<span class="input-group-text"><i data-feather="mail"></i></span>
							<input type="email" name="user" class="form-control" placeholder="INGRESAR CORREO">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i data-feather="lock"></i></span>
							<input type="password" name="pass" class="form-control" placeholder="INGRESAR CONTRASEÑA">
						</div>
						
						
						<?
						
						  $q1=mysqli_query($con,"select image_login from  config_web ");
						 $row = $q1->fetch_assoc();

 
						  ?>
						<button class="btn btn-block btn-primary mb-3">ENTRAR  </button>
	
							 </form>
							 <div class="card right">
							 <img src="/proyect/uploads/<?echo  $row['image_login'];?> " class="bgsize" id="contain"   height="379">
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
/* ===== Logic for creating fake Select Boxes ===== */
$('.sel').each(function() {
  $(this).children('select').css('display', 'none');
  
  var $current = $(this);
  
  $(this).find('option').each(function(i) {
    if (i == 0) {
      $current.prepend($('<div>', {
        class: $current.attr('class').replace(/sel/g, 'sel__box')
      }));
      
      var placeholder = $(this).text();
      $current.prepend($('<span>', {
        class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
        text: placeholder,
        'data-placeholder': placeholder
      }));
      
      return;
    }
    
    $current.children('div').append($('<span>', {
      class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
      text: $(this).text()
    }));
  });
});

// Toggling the `.active` state on the `.sel`.
$('.sel').click(function() {
  $(this).toggleClass('active');
});

// Toggling the `.selected` state on the options.
$('.sel__box__options').click(function() {
  var txt = $(this).text();
  var index = $(this).index();
  
  $(this).siblings('.sel__box__options').removeClass('selected');
  $(this).addClass('selected');
  
  var $currentSel = $(this).closest('.sel');
  $currentSel.children('.sel__placeholder').text(txt);
  $currentSel.children('select').prop('selectedIndex', index + 1);
});

</script>
<style>
 

/* ===== Select Box ===== */
.sel {
 
  display: inline-block;
 
  width: 190px;
  background-color: transparent;
  position: relative;
  cursor: pointer;
}

.sel::before {
  position: absolute;
  content: '\f063';
  font-family: 'FontAwesome';
  
  color: #FFF;
  right: 20px;
  top: calc(50% - 0.5em);
}

.sel.active::before {
  transform: rotateX(-180deg);
}

.sel__placeholder {
  display: block;
  font-family: 'Quicksand';
 
  color: #838e95;
  padding: 0.2em 0.5em;
  text-align: left;
  pointer-events: none;
  user-select: none;
  visibility: visible;
}

.sel.active .sel__placeholder {
  visibility: hidden;
}

.sel__placeholder::before {
   
  content: attr(data-placeholder);
  visibility: hidden;
}

.sel.active .sel__placeholder::before {
  visibility: visible;
}

.sel__box {
  position: absolute;
  top: calc(100% + 4px);
  left: -4px;
  display: none;
  list-style-type: none;
  text-align: left;
  font-size: 1em;
  background-color: #FFF;
  width: calc(100% + 8px);
  box-sizing: border-box;
}

.sel.active .sel__box {
  display: block;
  animation: fadeInUp 500ms;
}

.sel__box__options {
  display: list-item;
  font-family: 'Quicksand';
  font-size: 1.5em;
  color: #838e95;
  padding: 0.5em 1em;
  user-select: none;
}

.sel__box__options::after {
  content: '\f00c';
  font-family: 'FontAwesome';
  font-size: 0.5em;
  margin-left: 5px;
  display: none;
}

.sel__box__options.selected::after {
  display: inline;
}

.sel__box__options:hover {
  background-color: #ebedef;
}

/* ----- Select Box Black Panther ----- */
.sel {
  border-bottom: 4px solid rgba(0, 0, 0, 0.3);
}

.sel--black-panther {
  z-index: 3;
}

/* ----- Select Box Superman ----- */
.sel--superman {
/*   display: none; */
  z-index: 2;
}

/* ===== Keyframes ===== */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}
</style>

</body>

</html>
<?php
    }else{
        header("Location: /proyect/client/home.php");
    }
?>
