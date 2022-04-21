
<?$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

$pass= substr(str_shuffle($permitted_chars), 0, 10);

?>


 <form id="form">
 
  <div class="field">
    <label for="destinatario">destinatario</label>
    <input type="text" name="destinatario" id="destinatario">
  </div>
 
 
    <input type="hidden"  name="password" id="password" value=<?echo $pass?>>
  

  <input type="submit" id="button" value="Send Email" >
</form>

<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('user_mI3KQGEeqhQex6wF9em3e')
</script>




<script> 

 
   
 
 

const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'default_service';
   const templateID = 'template_jrzcupg';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
     

  
    
			 
				setTimeout(function() {
				swal({
						title: "Perfecto!",
						text: "Hemos enviado el correo, recibiras una copia como constancia, Revisa en SPAM si no aparece en tu bandeja de recibidos.",
						type: "success",
						showConfirmButton: false,
						timer: 3500
					}, function() {
					 		window.location = "index.php";
				});
				}, 1000);
			 
			 
    }, (err) => {
      btn.value = 'Send Email';
       
       swal({
						title: "Error!",
						text: "Ha ocurrido un error",
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
                 
