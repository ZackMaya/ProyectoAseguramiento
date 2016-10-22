<?php
session_start();
if(!isset($_SESSION["usuario_email"])){
	header('location: ../index.php');
}
//echo "inciando sesión para:$_SESSION['usuario_email']";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Modo Usuario</title>
		
		<!--Codificación de caracteres especiales-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <!-- Formulario elaborado con recursos Bootstrap-->
    	<link rel="stylesheet" href="../css/bootstrap.css">
      	<link rel="stylesheet" href="../css/estilos.css">
      	<link rel="stylesheet" href="../css/estilo.css">
	</head>
<body>

<header>
	    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	      <div class="container">

	        <!-- MENU -->
	        <div class="collapse navbar-collapse" id="navegacion">
	          <ul class="nav navbar-nav">
	            <li id="menuprincipal"><a href="panelUsuario.php">Panel Usuario</a></li>
	            <li><a href="institucionXusuario.php" class="button special"> <?php include('conexion.php');
							$email=$_SESSION["usuario_email"];
							$query="SELECT * FROM usuario WHERE correo='$email'";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
							echo $row['nombre'];}?></a></li>
				<li><a href="logout.php" class="button special">Cerrar Sesión</a></li>
	          </ul>

	 
	        </div>
	      </div>
	    </nav>
	</header>

	 <section class="jumbotron">
	    <div class="container" align="center">
	      <a href="#" class="thumb">
	        <img src="../Images/LogoUACMC.jpg" width="10%" height="10%" >
	        <img src="../Images/Logo15.png" width="20%" height="20%">
	      </a>
	    </div>
	  </section><br>

<br><br><br><br>

<!-- Footer -->
 <footer>
      <div class="pie">
        <div class="row">
          <div class="col-xs-6">
            <p>Aseguramiento de la Calidad del Software | UACM - SLT | 2016</p>
          </div>
          <div class="col-xs-6">
            <ul class="list-inline text-right">
              <li><a href="#">Contacto e-mail</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>				
	</body>
</html>