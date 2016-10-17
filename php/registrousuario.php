<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Registro usuario</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>


<header>
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


<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action = "loginregistro.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
         <h2>Por favor registrate para aportar una institución</h2>
  			<br><br>
  			<hr>

  			<!--El id es autoincrement en la Base de Datos no se necesita ingresar-->

			<!--Nombre de usuario-->	  
			<div class="form-group">
				<label for="nombreUsuario">Nombre de Usuario</label>
				<input class="form-control" name="nombre" type="text" required="required" placeholder="Nombre y Apellidos" tabindex="1" title="Nombre completo">
			</div>

					
			<!--Correo Email-->
			<div class="form-group">
					<label for="email">Correo</label>
					<input class="form-control" name="email" type="email" required="required"  placeholder="E-mail" tabindex="5" title="Email">
			</div>

			<!--contraseña-->
			<div class="form-group">
					<label for="password">Contraseña</label>
					<input class="form-control" name="password" type="password" required="required" placeholder="Contraseña" tabindex="6" title="Contraseña">
			</div>

										
			<!--Edad-->
			<div class="form-group">
				<label for="edad">Edad</label>
				<input class="form-control" name="edad" type="text" required="required" id="edad" placeholder="Edad" tabindex="6" title="Edad">
			</div>

      <div class="radio">
        <label>
          <input type="radio" required="required" name="opciones" id="opciones_2" value="opcion_2">
          <a href="../AvisoPrivacidad/AvisoDePrivacidad.html" target="_blank">Acepto Terminos y Condiciones</a>
        </label>
      </div>
		
       	<div class="col-lg-12 ">
				<br>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-lg btn-success btn-block" class="btn btn-default">
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3"> 
				<input type="reset" tabindex="8" class="btn btn-lg btn-primary btn-block" class="col-xs-6 col-sm-6 col-md-6" value="Borrar">
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3"> <a href="../index.php"  class="btn btn-lg btn-primary btn-block">Regresar</a> 
	        </div>
			<input type="hidden" name="estado" value="1">
		</div>									
        </fieldset>
      </form>
    </div>
  </div>
</div>




<br><br><br>

  
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

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>