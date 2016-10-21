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