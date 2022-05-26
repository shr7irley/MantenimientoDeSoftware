<?php 

include("db.php");

if (isset($_POST['guardarDatos'])){
	$title = $_POST['title'];
	$descripcion = $_POST['descripcion'];
	echo $title;
	echo $descripcion;

	$query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$title', '$descripcion')";
	$resultado = mysqli_query($conn, $query);
	if (!$resultado) {
		die("Query Failed");
	}

	$_SESSION['message'] = 'Tarea guardada';

	$_SESSION['message type'] = 'success';

	header("location: index.php");
}
 ?>