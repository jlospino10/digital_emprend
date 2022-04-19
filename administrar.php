 
<?
include("home.php");
?>

<section class="pc-container">
<form   action="Diseño/cargar_datos.php"  method="post" enctype="multipart/form-data"class="registration-form">
                       
                          <!-- FROM NAME -->
                       
   
                           <!-- FROM EMAIL -->
                         
                          <div class="row mb-1">
                              <div class="col-lg-12">
                                      <br>
                                    
                                                          	<div class="form-group">
				                   <br>
				                        	    <label>Foto Del Login </label><td><input type="file" class="custom-file-input" id="rep" name="rep" onchange="fileNameChange()">
				                        </div>
				                        <br>
                                              
                              </div>
                          </div>
                          
                         
   <button type="submit" class="btn btn-success btn-sm mt-3" style="display: block; margin:auto; width:100%;" id="button" name="submit" >APLICAR CAMBIOS</button>
                           
                  </div>
                  
                  
    
</form>
</section>
