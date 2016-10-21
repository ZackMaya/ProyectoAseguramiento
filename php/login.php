<?php
session_start();
include('conexion.php');

    $email=$_POST["email"];
    $password=$_POST["password"];
    if(!strcmp($_POST['email'], "admin@gmail.com") && !strcmp($_POST['password'],"admin")){
        header('Location: panelAdmin.php');
     }else{
        require("conexion.php");
        

        $emailsql = "SELECT * FROM usuario WHERE correo='$email' and contrasenna='$password'";
        $res= $con->query($emailsql);

        if($res->num_rows>0){
            $_SESSION["usuario_email"]= $email;
            
           
            header('Location: panelUsuario.php');
           // echo "sesión éxitosa";
        }else{
            header('Location: validar.php');
        }
     }

?>