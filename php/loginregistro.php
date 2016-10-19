

<?php
if(isset($_POST['submitted'])){
include('conexion.php');

//el id es autoincrement en la BD así que no se ingresa manualmente
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

//Valida el email si ya esta registrado
 $selesql = "SELECT * FROM usuario WHERE correo='$email'";

 $resultado= $con->query($selesql);

  if($resultado->num_rows>0){
        
        //se manda a una página con mensaje explicando el correo ya registrado
        header('Location: emailregistrado.php');
        echo "El email que quiere utilizar ya existe en la BD";
  }

else{

$sqlinsert ="INSERT INTO usuario (nombre,correo,contrasenna) VALUES('$nombre','$email','$password')";

if(!mysqli_query($con,$sqlinsert)){
die('error de conexion...');

}
$newrecord = "Tu registro ha sido éxitoso";
session_start();
$_SESSION["usuario_email"]=$email;
        header('Location: panelUsuario.php'); 
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro Completado</title>
	<meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<link rel="stylesheet" href="../css/bootstrap.min.css">
  	<link rel="stylesheet" href="../css/estilos.css">
  	<link rel="stylesheet" href="../css/estilo.css">

</head>
<body>

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
            <span class="sr-only">Desplegar / Ocultar Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="../index.php" class="navbar-brand">Inicio</a>
        </div>

 
        </div>
    </nav>


      <section class="jumbotron">
    <div class="container" align="center">
      <a href="#" class="thumb">
        <img src="../Images/LogoUACMC.jpg" width="10%" height="10%" >
        <img src="../Images/Logo15.png" width="20%" height="20%">
      </a>
    </div>
  </section><br><br><br>


	<h5>Te haz registrado satisfactoriamente</h5>
	

</body>
</html>


