 <?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";
$path1 = $_SERVER['DOCUMENT_ROOT'] . "/proyect/client/home.php";

include($path);
include($path1);
 
?>

<section class="pc-container">

<form   action="/proyect/Diseño/cargar_datos.php"  method="post" enctype="multipart/form-data"class="registration-form">
                       
                          <!-- FROM NAME -->
                       
   
                           <!-- FROM EMAIL -->
                         
                          <div class="row mb-1">
                              <div class="col-lg-12">
                                      <br>    <br>    <br>    <br>    <br>
                                    
                                                          	<div class="form-group">
				                   <br>
				                        	      <td><input type="file" class="custom-file-input" style="display: block; margin:auto; width:20%;" id="rep" name="rep" onchange="fileNameChange()">
				                        </div>
				                        <br>
                                              
                              </div>
                          </div>
                          
                         
   <button type="submit" class="btn btn-success  " style="display: block; margin:auto; width:20%;" id="button" name="submit" >APLICAR CAMBIOS</button>
                           
                  </div>
                  
                  
    
</form>
</section>
