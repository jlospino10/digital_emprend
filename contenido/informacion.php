 
<?php
include("home.php");
 
 
  
    
 

$fecha_actual = date("Y-m-d");
$date_stop = $_SESSION['date_stop'];
$licencia_stop = $_SESSION['licencia_stop'];
    if( $fecha_actual<$licencia_stop or $fecha_actual<$date_stop ) {
    
?> 
<section class="pc-container">
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="">  
                 <h3>contenido</h3>
                  
                           
               </section>
               
               <?php
    }else{
        header("Location: /proyect/alert.php");
    }
?>
