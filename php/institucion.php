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
              <li class="dropdown">
                <a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button">
                  Usuarios<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="verusuarios.php">Ver usuarios</a></li>
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
			<p>(1) México.</p>
			<p>(2) Estados Unidos.</p>
			<div class="form-group">
					<label for="pais">País</label>
					<input class="form-control" name="pais" type="text" required="required"  placeholder="Seleccione País" tabindex="6" title="País">
			</div>

			<!--Telefono-->
			<div class="form-group">
					<label for="telefono">Telefono</label>
					<input class="form-control" name="telefono" type="text" required="required" placeholder="Telefono" tabindex="6" title="Telefono">
			</div>

			<!--Correo-->
			<div class="form-group">
				<label for="correo">Correo</label>
				<input class="form-control" name="correo" type="text" required="required"  placeholder="Correo" tabindex="6" title="correo">
			</div>


			<!--Área-->
			<div class="form-group">
				<label for="area">Área</label>
				<input class="form-control" name="area" type="text" required="required"  placeholder="Seleccione el Área" tabindex="6" title="area">
				<section style="width: 80%">
					<p>(1) Requisitos de Software</p>
		            <p>(2) Diseño de Software</p>
		            <p>(3) Construcción de Software</p>
		            <p>(4) Pruebas de Software</p>
		            <p>(5) Mantenimiento de Software</p>
		            <p>(6) Gestión de la configuración</p>
		            <p>(7) Gestión de la Ingeniería de Software</p>
		            <p>(8) Proceso de Ingeniería de Software</p>
		            <p>(9) Herramientas y métodos de la Ingeniería de Software</p>
		            <p>(10)Calidad del Software</p>
		            <p>(11)Práctica Profesional de la Ingeniería de Software</p>
		            <p>(12)Economía de la Ingeniería de Software</p>
		            <p>(13)Fundamentos de Computación</p>
		            <p>(14)Fundamentos Matemáticos</p>
		            <p>(15)Fundamentos de Ingeniería</p>
	            </section>
			</div>

			<!--URL-->
			<div class="form-group">
				<label for="url">URL</label>
				<input class="form-control" name="url" type="text" required="required"  placeholder="url" tabindex="6" title="url">
			</div>

			<!--URL Imagen-->
			<div class="form-group">
				<label for="imagen">URL-Imagen</label>
				<input class="form-control" name="imagen" type="text"  placeholder="Imagen" tabindex="6" title="imagen *opcional">
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