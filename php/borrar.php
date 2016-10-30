<?php
		if(isset($_POST['submitted'])){
	include('conexion.php');

	$institucion= $_POST['id'];

	$sqlselect = "DELETE FROM institucion WHERE id_institucion ='$institucion'";

	 if(!mysqli_query($con,$sqlselect)){
	die('El nombre no coincide...');
	header('Location: verinstitucion.php');

	}
	echo "<script>alert('Comentario Guardado')</script>";
    header('Location: verinstitucion.php');
	}
     

?>
