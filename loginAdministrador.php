<?php
	include('conexion.php');

	$email=$_POST["email"];
	$pass=$_POST["password"];
    if(!strcmp($_POST['email'], "admin@gmail.com") && !strcmp($_POST['password'],"admin")){
        session_start();
        $_SESSION['acceso']=1;
        echo "Accediendo como inmortal";
        header('Location: panelAdmin.php'); 
     }
     
     
     else{
            echo "<script>alert('No eres root')</script>";
            header('Location: validarAdmin.php');
    }
?>