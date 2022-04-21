<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/proyect/database.php";
$path1 = $_SERVER['DOCUMENT_ROOT'] . "/proyect/client/home.php";

include($path);
include($path1);
 
?>
<section class="pc-container">
    <html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
 
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	</head>
	<body>
		<section class="section">
		    <div class="container">
		      <h1 class="title has-text-centered">
		        Tus clientes 
		      </h1>
	          <a href="datatable/create.php" class="button is-success">Agregar cliente</a>
	          <div class="table-container">
			      <table  id="Qimbey" class="table is-hoverable is-bordered is-fullwidth mt-2">
			      	<thead>		      		
				      	<tr>
				      		<th>#</th>
				      		<th>Id_user</th>
				      		<th>Nombre</th>
				      		<th>Email</th>
				      		<th>Creador</th>
				      		<th>Pais</th>
				      		<th>Estado</th>
				      		<th>Opciones</th>
				      		<th>Cambiar estado</th>
				      	</tr>
			      	</thead>
			      	<tbody>
				      	<?php
				      	$creator=$_SESSION['full_name'];
				      		$query = "SELECT * FROM this_users where creator='$creator'";
				      		$getPasien = $con->query($query);
				      		if ($getPasien->num_rows > 0):
				      			$i = 1;
				      			while ($row = $getPasien->fetch_assoc()):		      				
				      	?>
							      	<tr>
							      		<td><?php echo $i++; ?></td>
							      		<td><?php echo $row['id_user']; ?></td>
							      		<td><?php echo $row['full_name']; ?></td>
							      		<td><?php echo $row['email']; ?></td>
							      		<td><?php echo $row['creator']; ?></td>
							      		<td><?php echo $row['pais']; ?></td>
							      		<td><?php echo $row['status']; ?></td>
 
							      		<td>
							      			<a href="datatable/update.php?id=<?php echo $row['id_user']; ?>" class="button is-info">Editar</a>
							      			<a onclick="return confirm('¿Estas seguro de eliminar este cliente?')" href="datatable/delete.php?id=<?php echo $row['id_user']; ?>" class="button is-danger">Eliminar</a>
							      		</td>
							      		<td><a onclick="return confirm('¿Estas seguro de eliminar este cliente?')" href="datatable/change_status.php?id=<?php echo $row['id_user']; ?>" class="button is-danger">Cambiar</a>
							      		</td>
							      	</tr>
						<?php
								endwhile;
						?>
						<?php
							else:
						?>
							<tr>
								<td colspan="8">No tienes clientes</td>
							</tr>
						<?php
							endif;
						?>							      		
			      	</tbody>
			      </table>
			    </div> <!-- End Div table container -->
		    </div>
  	  	</section>
  	  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  	  	<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  	  	<script type="text/javascript">
  	  		$(document).ready( function () {
			    $('#Qimbey').DataTable();
			} );
  	  	</script>
	</body>
</html>


 
 
</section>
 

