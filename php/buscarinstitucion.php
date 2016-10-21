<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>INTITUCIONES</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <!--Query-->
    <script src="http://code.jquery.com/jquery-2.1.4.js"></script>

</head>

<body>
  	<!-- Cabecera -->
<header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navegacion">
          <ul class="nav navbar-nav">
            <li id="menuprincipal"><a href="panelAdmin.php">Panel Admin</a></li>
      <li><a href="institucion.php">Insertar Institución</a></li>
      <li><a href="verinstitucion.php">Ver Institución</a></li>
      <li><a href="buscarinstitucion.php">Buscar Institución</a></li>
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
		 </section>

		 <br><br><br><br><br>

		<center>
		

		<br><br><br><br><br><br><br>			
	     <br><br><br><hr>
		

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