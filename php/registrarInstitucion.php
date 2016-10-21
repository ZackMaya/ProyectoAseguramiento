<?php

	if(isset($_POST['submitted'])){
	include('conexion.php');

	$nombre= $_POST['nombre'];
	$pais= $_POST['pais'];
	$ciudad=$_POST['ciudad'];
	$numero= $_POST['numero'];
	$avenida=$_POST['avenida'];
	$calle= $_POST['calle'];
	$descripcion=$_POST['descripcion'];

	$sqlinsert = " INSERT INTO institucion (nombre,descripcion,pais,ciudad,numero,avenida,calle) 
									VALUES ('$nombre','$descripcion','$pais','$ciudad','$numero','$avenida','$calle')";
      
    if(!mysqli_query($con,$sqlinsert)){
	die('error de  insercion...');

	}
	$newrecord = "La institución ha sido guardada exitosamente";
     
    echo "<script>alert('Comentario Guardado')</script>";
    header('Location: panelAdmin.php');
	}
?>