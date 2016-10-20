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



	<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action = "registrarInstitucion.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
         <h2>Modo Administrador Dar de alta una institución</h2>
  			<br><br>
  			<hr>

  			<!--El id es autoincrement en la Base de Datos no se necesita ingresar-->

			<!--Nombre de institución-->	  
			<div class="form-group">
				<label for="nombre">Nombre de Institución</label>
				<input class="form-control" name="nombre" type="text" required="required"  placeholder="Institución" tabindex="6" title="Nombre">
			</div>

			<!--Descripción
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input class="form-control" name="descripcion" type="text" required="required"  placeholder="Descripción" tabindex="6" title="descripción">
			</div>-->

					
			<!--País de la Institución-->
			<div class="form-group">
					<label for="pais">País</label>
					<input class="form-control" name="pais" type="text" required="required"  placeholder="País" tabindex="6" title="País">
			</div>

			<!--Ciudad-->
			<div class="form-group">
					<label for="ciudad">Ciudad</label>
					<input class="form-control" name="ciudad" type="text" required="required" placeholder="Ciudad" tabindex="6" title="Ciudad">
			</div>

			<!--Número-->
			<div class="form-group">
				<label for="numero">Número</label>
				<input class="form-control" name="numero" type="text" required="required"  placeholder="Número" tabindex="6" title="número">
			</div>


			<!--Avenida-->
			<div class="form-group">
				<label for="avenida">Avenida</label>
				<input class="form-control" name="avenida" type="text" required="required"  placeholder="Avenida" tabindex="6" title="avenida">
			</div>


			<!--Calle-->
			<div class="form-group">
				<label for="calle">Calle</label>
				<input class="form-control" name="calle" type="text" required="required"  placeholder="Calle" tabindex="6" title="calle">
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
			<footer id="footer">
					<center>
					<ul class="copyright">
						<lo>Copyright © 2016 Proyecto SCRUM. Todos los Derechos Reservados.</li>
					</ul>
					<!--Fecha-->
						<h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
						</script></h6>
					</center>
			</footer>
	</body>
</html>