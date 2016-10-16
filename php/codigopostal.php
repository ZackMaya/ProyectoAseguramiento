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
		  <link rel="stylesheet" href="../css/bootstrap.min.css">
		  <link rel="stylesheet" href="../css/estilos.css">
		  <link rel="stylesheet" href="../css/estilo.css">
		    

	</head>
	<body>


	<!-- Cabecera -->
			<header>
				<h1><a href="http://www.uacm.edu.mx" target="_blank">UACM</a><br></h1>
				<nav id="nav">
					<ul>
					<li><a href="codigopostal.php">CodigoPostal</a></li>
					<li><a href="institucion.php">Institución</a></li>
					<li><a href="logout.php" class="button special">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</header>




	<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action = "registrarCodigo.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
         <h2>Modo Administrador Dar de alta del codigo postal</h2>
  			<br><br>
  			<hr>

  			<!--El id es autoincrement en la Base de Datos no se necesita ingresar-->

			
			<!--Código Postal-->
			<div class="form-group">
				<label for="codigopostal">Código postal</label>
				<input class="form-control" name="codigopostal" type="text" required="required" id="codigopostal" placeholder="codigopostal" tabindex="6" title="Código">
			</div>

			<!--Delegación-->
			<div class="form-group">
				<label for="delegacion">Delegación</label>
				<input class="form-control" name="delegacion" type="text" id="delegacion" placeholder="Delegacion" tabindex="6" title="delegacíón">
			</div>

			
			<!--Colonia-->
			<div class="form-group">
				<label for="colonia">Colonia</label>
				<input class="form-control" name="colonia" type="text" id="colonia" placeholder="Colonia" tabindex="6" title="colonia">
			</div>
	
			
		
       	<div class="col-lg-12 ">
				<br>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-lg btn-success btn-block" class="btn btn-default">
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3"> 
				<input type="reset" tabindex="8" class="btn btn-lg btn-primary btn-block" class="col-xs-6 col-sm-6 col-md-6" value="Borrar">
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3"> <a href="index.php"  class="btn btn-lg btn-primary btn-block">Regresar</a> 
	        </div>
			<input type="hidden" name="estado" value="1">
		</div>									
        </fieldset>
      </form>
    </div>
  </div>
</div><br><br><br><br>
<hr>


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