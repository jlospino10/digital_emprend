 
     <!-- Watch this video https://youtu.be/dbGeDFl1v1s -->
 <?
  
    include("../home.php");
 ?>
 
 <section class="pc-container">
 <br><br> <br><br> <br><br>
<div class="padre">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<div class="card">
        <img src="https://www.nautec.com/wp-content/uploads/2018/04/placeholder-person.png" alt="">
        
        <br> <br>
        <h3><span><?echo $_SESSION['full_name'];?></span></h3>
        <div class="cont">
            <p>
           
           <b> Correo: </b> <?echo $_SESSION['email'];?>  </p>
           <p>  <b>pais:</b>  <?echo $_SESSION['pais'];?>  </p>
            <p> <b>Creador: </b>  <?echo $_SESSION['creator'];?> </P>
             <p> <b>Estado: </b>  <?echo $_SESSION['status'];?> </p>
              <p> <b>Contenido_exp: </b>  <?echo $_SESSION['date_stop'];?> </p>
               <p> <b>Licencia_exp: </b>  <?echo $_SESSION['licencia_stop'];?> </p>
          
            
            <div class="link">
                <a href="#"><i class="fab fa-codepen"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
        </div>
        
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