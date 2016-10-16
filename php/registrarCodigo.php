<?php

	if(isset($_POST['submitted'])){
	include('conexion.php');

	$codigopostal= $_POST['codigopostal'];
	$delegacion= $_POST['delegacion'];
	$colonia=$_POST['colonia'];


	$sqlinsert = "INSERT INTO codigopostal (codigopostal,delegacion,colonia) VALUES ('$codigopostal',$'delegacion',$'colonia')";
      
    if(!mysqli_query($con,$sqlinsert)){
	die('error de conexion o insercion...');

	}
	$newrecord = "La institución ha sido guardada exitosamente";
     
    echo "<script>alert('Comentario Guardado')</script>";
    header('Location: panelAdmin.php');
	}
?>