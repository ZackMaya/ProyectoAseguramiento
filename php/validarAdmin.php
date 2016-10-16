<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>
	<!--Codificación de caracteres especiales-->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="../css/estilo.css">
   	<link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
	<!--Mensaje de despedida de la sesión-->
	<br><br><br><hr>
	<center><h2>La contraseña y correo ingresado es incorrecta....intenta de nuevo</h2></center>
	<hr>

	<script language="javascript">location.href = "../index.php";</script>
</body>



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
</html>