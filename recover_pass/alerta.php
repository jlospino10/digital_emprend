 
 

	 
<?$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

$pass= substr(str_shuffle($permitted_chars), 0, 10);

?>
  <form method="POST" action="post_reset.php">
  	      	  	  <label for="destinatario">destinatario</label>
    <input type="text" name="destinatario" id="destinatario">
  </div>
 
 
    <input type="hidden"  name="password" id="password" value=<?echo $pass?>>
  
  	      	  	<div class="control">
				  <input type="submit" class="button is-link" value="modificar" />
				  
				</div>
	      	  </form>
	      	  
	      

	      	  

