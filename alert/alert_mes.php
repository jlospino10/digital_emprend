<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";
$path1 = $_SERVER['DOCUMENT_ROOT'] . "/proyect/client/home.php";

include($path);
include($path1);
 
?>
<section class="pc-container">

 <? 
 $a= $_SESSION['date_stop'];
 
 $fechaActual = date('Y-m-d');
 if($fechaActual < $a){
   	 
 $date1 = new DateTime($fechaActual );
$date2 = new DateTime($a);
$diff = $date1->diff($date2);
// will output 2 days
 
 ?>
  
 
<!DOCTYPE html>
<html lang="en">

<head> 
  <link rel="stylesheet" href="/proyect/Diseño/assets/css/ALERT.css">
</head> 
<body>
<br>
  <div class="bodyaler">
<div class="wrapperAlert">

  <div class="contentAlert">

    <div class="topHalf">

      <p><svg viewBox="0 0 512 512" width="100" title="check-circle">
        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
        </svg></p>
        
        	 
      							     <div class="h1">
    FELICIDADES
      </div>
     					 
       
      
     <ul class="bg-bubbles">
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
     </ul>
    </div>
<br><br>

      <H2>TIENES TU LICENCIA AL DIA 
        ACTUALMENTE TIENES <? echo "", $diff->days . '';?>  DIAS </H2>

     

    </div>

  </div>        

</div>
</div>
</body>
</html>

 	  <!-- aqui va el fronted de la alert -->
  
 <?
 
 }
  if($fechaActual > $a){
  
  $date1 = new DateTime($fechaActual );
$date2 = new DateTime($a);
$diff = $date1->diff($date2);
// will output 2 days
 

  ?>
 	
 
<!DOCTYPE html>
<html lang="en">

<head> 
  <link rel="stylesheet" href="/proyect/Diseño/assets/css/ALERT.css">
</head> 
<body>
<br>
  <div class="bodyaler">
<div class="wrapperAlert">

  <div class="contentAlert">

    <div class="topHalf">

      				
      				
      							 <img src="/proyect/Diseño/assets/images/icon/warning.png" height= 20px; width=0px; >
      							 
      							     <div class="h1">
    ADVERTENCIA!
      </div>
      
     <ul class="bg-bubbles">
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
       <ol></ol>
     </ul>
    </div>
<br><br>
      <H2>TU CREDITO MENSUAL SE VENCIO HACE <? echo "", $diff->days . '';?> DIAS!  </H2>

     

    </div>

  </div>        

</div>
</div>
</body>
</html>

 	  <!-- aqui va el fronted de la alert -->
 	   <!-- aqui va el fronted de la alert -->
  
 <?
 
 }
 
 ?>

</section>
