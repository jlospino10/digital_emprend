 <?php
include('../database.php');	 
		 
		echo '
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		
		';
		 
		
 

//$representante=$_POST['representante']; 

$rep_fto=$_FILES['rep']['name']; 

if (($rep_fto == !NULL)  )
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["rep"]["type"] == "image/png")
   || ($_FILES["rep"]["type"] == "image/jpeg")
   || ($_FILES["rep"]["type"] == "image/jpg")
   
  )
   
   {
      // Ruta donde se guardarán las imágenes que subamos
       $directorio = $_SERVER['DOCUMENT_ROOT'].'/proyect/uploads/';
      // Muevo la servicio desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['rep']['tmp_name'],$directorio.$rep_fto);
      
      
		
	 
$q1=mysqli_query($con,"SELECT COUNT(image_login) total FROM config_web" );
 
 
$fila = mysqli_fetch_assoc($q1);
 
 

if( $fila['total'] == 0)
{
 $q1=mysqli_query($con,"INSERT INTO config_web VALUES('0','0','0','0' )")or die('Error2');
}
 if( $fila['total'] == 1)
{
 

  $q1=mysqli_query($con,"UPDATE `config_web` SET  `image_login`='$rep_fto'  ");
  
   echo '
			<script>
				setTimeout(function() {
				swal({
						title: "Realizado!",
						text: "Se han aplicado los cambios con exito",
						showConfirmButton: false,
						type: "success",
						timer: 2000
					}, function() {
					 		window.location = "../administrar.php";
				});
				}, 1000);
			</script>
			';
 } 
        
     
    else 
{
  
 if( ($nombre_img == NULL) ) echo '
			<script>
				setTimeout(function() {
				swal({
						title: "Error!",
						text: "Lo sentimos, ha ocurrido un error, por favor intente nuevamente.",
						showConfirmButton: false,
						type: "warning",
						timer: 2000
					}, function() {
					  window.location = "../administrar.php";
				});
				}, 1000);
			</script>
			';
  
} } 
 } 

 ?>
 
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		
		
