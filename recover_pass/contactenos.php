
<?$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

$pass= substr(str_shuffle($permitted_chars), 0, 10);

?>


 <form id="form" method="post" action="/proyect/recover_pass/verificacion_email.php" >
 
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
 

   const serviceID = 'default_service';
   const templateID = 'template_jrzcupg';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
     

 
	     $('#form').submit();
      
      
     
  
		 
    	 
			 
    }, (err) => {
      btn.value = 'Send Email';
       
       swal({
						title: "Error!",
						text: "Ha ocurrido un error",
						type: "error",
						showConfirmButton: false,
						timer: 2000
					}, function() {
 
				});
				}, 1000);
				
				
		
				
				
});

 
 

	
</script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                 
