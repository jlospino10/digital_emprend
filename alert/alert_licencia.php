<?php
 	include("../database.php");
	 include("../home.php");
 
?>


<section class="pc-container">
 <? 
 
 $b= $_SESSION['licencia_stop'];
 $fechaActual = date('Y-m-d');
 if($fechaActual < $b){
 	 
 $date1 = new DateTime($fechaActual );
$date2 = new DateTime($b);
$diff = $date1->diff($date2);
// will output 2 days
echo "aun te quedan: ", $diff->days . ' dias ';

 ?>
 	 <!-- aqui va el fronted de la alert -->
  
 <?
 
 }
  if($fechaActual > $b){
   	 
 $date1 = new DateTime($fechaActual );
$date2 = new DateTime($b);
$diff = $date1->diff($date2);
// will output 2 days
echo "te has pasado  ", $diff->days . ' dias ';
  ?>
 	 <!-- aqui va el fronted de la alert -->
  
 <?
 
 }
 
 
 
 ?>

</section>
