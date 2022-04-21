<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";
$path1 = $_SERVER['DOCUMENT_ROOT'] . "/proyect/client/home.php";

include($path);
include($path1);
 
?>


<section class="pc-container">
<!DOCTYPE html>
<html>
 
  

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	 
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
	</head>
	<body>
		<section class="section">
		    <div class="container">
		      <h1 class="title has-text-centered">
		       Agregar metodos de pago   
		      </h1>
  	      	  <form method="POST" action="proses_payment.php">
  	      	    	      	  	<input type="hidden" name="id" value="<?echo $_SESSION['id'];?>">	  
 
  	      	  	<div class="field">
		      	  	<label class="label">Paypal</label>
		      		<input name="paypal" class="input" type="email" placeholder="email" required  />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Nequi</label>
		      		<input name="nequi" class="input" placeholder="Nequi" type="tel"> </input>
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">daviplata</label>
		      		<input name="daviplata" class="input" type="tel" placeholder="daviplata" min="0" max="200" />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">otros medios de pago</label>
		      		<input name="otro" class="textarea" type="text" placeholder="otros medios de pago" min="0" max="200" />
  	      	  	</div> 
  	      	  	<div class="control">
				  <input type="submit" class="button is-link" value="Agregar" />
				  <a href="../datatable.php" class="button">Volver</a>
				</div>
	      	  </form>
	      	  
		    </div>
  	  	</section>
	</body>
</html>

</section>
