<?php

	session_start();
	if(isset($_SESSION["usuario_email"])){

		if(isset($_POST['submitted'])){
			include('conexion.php');

	//sesion iniciada como
	$email=$_SESSION["usuario_email"];
	//datos institucion
	$nombre= $_POST['nombre'];
	$pais= $_POST['pais'];
	$descripcion=$_POST['descripcion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$area=$_POST['area'];
	$url=$_POST['url'];
	$imagen=$_POST['imagen'];

	$sqlinsert = "INSERT INTO institucion (nombre,telefono,correo,area,url_pagina, descripcion, url_imagen, pais,autorizado) 
					VALUES ('$nombre','$telefono','$correo','$area','$url','$descripcion','$imagen','$pais','$email')";
      
    if(!mysqli_query($con,$sqlinsert)){
	die('error de  insercion...');

	}
	$newrecord = "La institución ha sido guardada exitosamente";
     
    echo "<script>alert('Comentario Guardado')</script>";
    header('Location: panelUsuario.php');
	}
}
?>