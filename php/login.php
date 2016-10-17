<?php
session_start();
include('conexion.php');

    $email=$_POST["email"];
    $password=$_POST["password"];
    if(!strcmp($_POST['email'], "ingnetozack@gmail.com") && !strcmp($_POST['password'],"admin")){
        header('Location: panelAdmin.php');
     }else{
        require("conexion.php");
        

        $emailsql = "SELECT * FROM persona WHERE email='$email' and password='$password'";
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