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
    <link rel="stylesheet" href="./css/bootstrap.css">

	</head>
	<body>

	<!-- Cabecera -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <ul class="nav navbar-nav">
		    	<h1><a href="http://www.uacm.edu.mx" target="_blank">UACM</a><br></h1>	
		    	<li><a href="panelAdmin.php">Panel Admin</a></li>
				<li><a href="institucion.php">Insertar Institución</a></li>
				<li><a href="verinstitucion.php">Ver Institución</a></li>
				<li><a href="buscarinstitucion.php">Buscar Institución</a></li>
				<li><a href="logout.php" class="button special">Cerrar Sesión</a></li>
			</ul>
		  </div>
		</nav>
			



		<!-- Footer -->
			<footer id="footer">
			<ul class="copyright">
						<lo>Copyright © 2016 Proyecto SCRUM. Todos los Derechos Reservados.</li>
					</ul>
					<!--Fecha-->
						<h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
						</script></h6>
			</footer>
	</body>
</html>