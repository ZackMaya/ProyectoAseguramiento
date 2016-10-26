<?php
		if(isset($_POST['submitted'])){
	include('conexion.php');

	$nombre= $_POST['nombre'];

	$sqlselect = "DELETE FROM usuario WHERE nombre ='$nombre'";

	 if(!mysqli_query($con,$sqlselect)){
	die('error de conexion o insercion...');

	}
	echo "<script>alert('Comentario Guardado')</script>";
    header('Location: verusuarios.php');
	}
     

?>