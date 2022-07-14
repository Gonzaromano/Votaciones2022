<?php 
	include ("conex.php");
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$query = "DELETE FROM registros WHERE id = $id";
			$result = mysqli_query ($conex, $query);
			if (!$result){
				die("query failed");
			}
			$_SESSION['message']= 'Registro eliminado';
			$_SESSION['message_type'] = 'danger';
			  header("Location: index.php");
		}
?>