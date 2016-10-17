<?php
		if(isset($_POST['submitted'])){
	include('conexion.php');

	$institucion= $_POST['institucion'];

	$sqlselect = "SELECT nombre FROM institucion WHERE nombre ='$institucion'";

	 if(!mysqli_query($con,$sqlselect)){
	die('error de conexion o insercion...');

	}
	else{

	$sqlselect = "DELETE FROM institucion WHERE nombre='$institucion'";
	echo "<script>alert('Comentario Guardado')</script>";
    header('Location: panelAdmin.php');
	}
}
     

?>
