<?php
include("../database.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM users WHERE id_user = '$id'";
		if ($con->query($query)) {
			Header('Location: ../datatable.php');
		}else {
			echo "Error  al eliminar " . $con->error;
		}
	}

	$con->close();

?>
