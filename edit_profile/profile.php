<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";
$path1 = $_SERVER['DOCUMENT_ROOT'] . "/proyect/client/home.php";

include($path);
include($path1);
 
?>
 <section class="pc-container">
 
  <link rel="stylesheet" href="/proyect/Diseño/assets/css/ALERT.css">



<br><br><br> 
  <div class="bodyaler">
<div class="wrapperAlert">

  <div class="contentAlert">

    <div class="topHalf_payment">

      <p><svg viewBox="0 0 512 512" width="100" title="check-circle">
        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/>
        </svg></p>
        
        	 
      							     <div class="h1">
   Informacion personal
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
 
        
          
 <h3>
							      		 
         
        
        
 
        <?echo $_SESSION['full_name'];?></span></h3>
         
        
            
        <div class="">
            
            <h3>
           <b> Correo: </b> <?echo $_SESSION['email'];?>   <br>
             <b>pais:</b>  <?echo $_SESSION['pais'];?>   <br>
             <b>Creador: </b>  <?echo $_SESSION['creator'];?>  <br>
              <b>Estado: </b>  <?echo $_SESSION['status'];?>  <br>
               <b>Contenido_exp: </b>  <?echo $_SESSION['date_stop'];?>  <br>
                 <b>Licencia_exp: </b>  <?echo $_SESSION['licencia_stop'];?>  
           </h3>
 
              

     
 

  </div>        

</div>
</div>
</body>
</html>
 
        
        
        
  
        
</section>
<style>
/* Watch this video */
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap');




.padre{
     
width: 50px;
  height: 50px;
  background-color: red;
  /* centrar vertical y horizontalmente */
  position: absolute;
  top: 50%;
  left: 30%;
  margin: -25px 0 0 -25px; /* aplicar a top y al margen izquierdo un valor negativo para completar el centrado del elemento hijo */
}
}
 

 
body{
    width: 100vw;
    height: 100vh;
    display: flex;
 
    font-family: 'Raleway', sans-serif;
    background-color: rgb(240,240,240);
}

.card{
    display: flex;
    flex-direction: column;
    text-align: center;
    border-radius: 0 0 15px 15px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    width: 380px;
     
    padding-bottom: 15px;
    background-color: white;
}

.card img{
    width: 80px;
    height: 80px;
    border-radius: 50%;
    text-align: center;
    background-image: linear-gradient(60deg, #2AAA8A, #4169E1);
    padding: 5px;
    margin-top: -45px;
}

.card h2{
    margin: 10px 0;
}

.cont{
    width: 90%;
    height: 0;
    overflow: hidden;
    text-align: center;
    transition: all 0.6s ease;
}

.card .cont .link i{
    font-size: 25px;
    color: rgb(82, 82, 82);
    transition: all 0.2s ease;
}

.card .cont .link i:hover{
    color: black;
    cursor: pointer;
}

.card:hover > .cont{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    text-align: center;
    height: 300px;
}

.card:hover > .link{
    width: 40%;
    display: flex;
    justify-content: space-between;
}
</style>
