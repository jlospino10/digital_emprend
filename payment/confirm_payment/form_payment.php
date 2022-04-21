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
  	     
<form   action="confirm_payment.php"  method="post" enctype="multipart/form-data"class="registration-form">
                       
                          <!-- FROM NAME -->
                       
                                        <input type="hidden" name="id" value="<?echo $_SESSION['id'];?>">	  
  	      	    	      	  	<input type="hidden" name="creator" value="<?echo $_SESSION['creator'];?>">	  
 
                           <!-- FROM EMAIL -->
                         
                          <div class="row mb-1">
                              <div class="col-lg-12">
                                      <br>
                                      	
                                    
                                                          	<div class="form-group">
				                   <br>
				                        	    <label>Foto Del Login </label><td><input type="file" class="custom-file-input" id="rep" name="rep" onchange="fileNameChange()">
				                        </div> 
  	      	  	<div class="field">
		      	  	<label class="label">Informacion</label>
		      		<input name="text" class="input" placeholder="Informacion" type="text"> </input>
  	      	  	</div> 
  	      	  	<div class="control">
   <button type="submit" class="btn btn-success btn-sm mt-3" style="display: block; margin:auto; width:100%;" id="button" name="submit" >APLICAR CAMBIOS</button>
				  <a href="../datatable.php" class="button">Volver</a>
				</div>
	      	  </form>
	      	  
		    </div>
  	  	</section>
	</body>
</html>

</section>
