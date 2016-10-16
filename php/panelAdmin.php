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
	</head>
	<body>

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
	<footer class="footer-distributed">
			<div class="footer-left">
				<p class="footer-links">
					<a href="logout.php">Inicio</a>
					·
					<a href="panelAdmin.php">Panel Admin</a>
					·
					<a href="institucion.php">Insertar Institución</a>
					·
					<a href="verinstitucion.php">Ver Institución</a>
					·
					<a href="buscarinstitucion.php">Buscar Institución</a>
					·
					<a href="logout.php" class="button special">Cerrar Sesión</a>
				</p>

				<p class="footer-company-name"> &copy; 2016 Instituciones-UACM</p>
			</div>

			<div class="footer-center">
				<div>	
					<p><span><img src="../Images/mapablanco.png" width="25px" height="25px"> Calle Prolongación San Isidro 151, Iztapalapa, San Lorenzo Tezonco, 09790 Ciudad de México, D.F.</span>Ciudad de México, México</p>
				</div><br>

				<div>
					<p><img src="../Images/telefonoblanco.png" width="25px" height="25px"> 01 55 5850 1901</p>
				</div>

				</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Instituciones-UACM</span>
					Sitio web para encontrar información clara y preciso acerca de las instituciones, empresas y otros lugares que interesen y competan de manera directa a los estudiantes de Ingeniería de Software de la UACM, así como tambien al público en general por área de conocimiento.
				</p>
			</div>
		</footer>
	</body>
</html>