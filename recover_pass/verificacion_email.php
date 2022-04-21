
 
<script defer src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>

 

	 
<?$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

$pass= substr(str_shuffle($permitted_chars), 0, 10);

?>

  <form  id="form" method="POST" action=""  >
  
  	      	   <div class="field">
    <label for="destinatario">destinatario</label>
    <input type="text" name="destinatario" id="destinatario">
  </div>
 
 
    <input type="hidden"  name="password" id="password" value=<?echo $pass?>>
  
  	      	  	<div class="control">
				  <input type="submit" class="button is-link" value="modificar" />
				  
				</div>
	      	  </form>
	      	  

  	      	 
 

<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('user_mI3KQGEeqhQex6wF9em3e')
</script> 
<script> 


	      	  <?php
include('database.php');
 
		 
		$email = $_POST['destinatario'];
		$password = $_POST['password'];
		$contraseña="jlospino"; 
$pass=openssl_encrypt($password, 'aes-256-ecb', $contraseña);
       
 

		$query = "UPDATE users 
				  SET 
				  		 
				  		 
				  		password = '$pass' 
 
				  WHERE
				  		email = '$email'
				";

		if ($con->query($query) === TRUE) { 
	
		}else {
			echo 'Error: ' . $con->error;
		}
	 
	$con->close();
?>

const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();
		 


let timerInterval
Swal.fire({
  title: 'Veririficando email...',
  html: 'Por favor, revise su email o en spam apenas terminemos la verificacion',
 
  timer: 3000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
    

   const serviceID = 'default_service';
   const templateID = 'template_jrzcupg';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
     

  
    
			 
				setTimeout(function() {
				 Swal.fire({
  
   icon: 'success',
   html: 'Contraseña enviada al correo electronico',
  showConfirmButton: false,
  timer: 1500
}) 

 


				}, 1000);
				
			 
			 
    }, (err) => {
      btn.value = 'Send Email';
       
       swal({
						icon: 'error',
        html: 'Por favor, revise el email ingresado u contacte al administrador!',
						type: "error",
						showConfirmButton: false,
						timer: 2000
					}, function() {
					 		window.location = "contactenos.php";
				});
				}, 1000);
});


</script>




<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                 
                 
 

 
