<?php
 	include("../database.php");
	 include("../home.php");
 
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
echo "aun te quedan: ", $diff->days . ' dias ';
 ?>
  
 
 	  <!-- aqui va el fronted de la alert -->
  
 <?
 
 }
  if($fechaActual > $a){
  
  $date1 = new DateTime($fechaActual );
$date2 = new DateTime($a);
$diff = $date1->diff($date2);
// will output 2 days
echo "te has pasado ", $diff->days . ' dias ';

  ?>
 	 <!-- aqui va el fronted de la alert -->
  
 <?
 
 }
 
 ?>

</section>
