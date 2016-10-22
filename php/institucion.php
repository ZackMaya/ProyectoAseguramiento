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

<!-- Cabecera -->
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

			<!--Descripción-->
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input class="form-control" name="descripcion" type="text" required="required"  placeholder="Descripción" tabindex="6" title="descripción">
			</div>

					
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