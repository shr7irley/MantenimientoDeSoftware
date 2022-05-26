<?php 
	include("db.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM tareas WHERE id = $id";
		$resultado = mysqli_query($conn, $query);
		if (!$resultado) {
			die("Query faild");
		}
		$_SESSION['message'] = 'Borrado';
		$_SESSION¨['messag_type'] = 'danger';
		header("location: index.php");
	}

 ?>|