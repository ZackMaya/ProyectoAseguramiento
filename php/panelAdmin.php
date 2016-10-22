<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Modo Administrador CRUD</title>
		
		<!--Codificación de caracteres especiales-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <!-- Formulario elaborado con recursos Bootstrap-->
    	<link rel="stylesheet" href="../css/bootstrap.css">
      	<link rel="stylesheet" href="../css/estilos.css">
      	<link rel="stylesheet" href="../css/estilo.css">
      	 <!--Query-->
  		<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
	</head>
<body>

<header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">

        <div id="menuprincipal">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
            <span class="sr-only">Desplegar / Ocultar Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="panelAdmin.php" class="navbar-brand">Panel Administrador</a>
        </div>
        </div>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navegacion">
          <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button">
                  Instituciones<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
					<li><a href="institucion.php">Insertar Institución</a></li>
                  	<li class="divider"></li>
					<li><a href="verinstitucion.php">Ver Institución</a></li>
                  	<li class="divider"></li>
					<li><a href="buscarinstitucion.php">Buscar Institución</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav">
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



	<center><h5>Bienvenido al sitio de administrador, si eres nuevo administrador o tienes alguna duda sobre como manejarlo se describe en unos cuantos pasos sencillos:</h5>

	<br><br>
	<p>1.- El modo de Insertar instituciones, muestra un formulario donde se deberán llenar los campos correspondientes, si se tiene alguna duda sobre la dirección de la institución se tendrá en cuenta que algunos campos no son necesarios como, calle o avenida se puede obviar alguno según sea el caso del sitio de la institución.</p>

	<p>2.- Ver instituciones cuenta con la lista en una tabla de todas aquellas instituciones que se han registrado por parte del administrador</p>

	<p>3.- Buscar instituciones, en este apartado se podrá buscar información de alguna institución por medio de algunos filtros para agilizar la búsqueda de información</p>

	<p>4.- Cerrar sesión nos devuelve al inicio de la página cerrando la funcionalidad del administrador.</p>
	</center>



<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
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

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

</body>
</html>