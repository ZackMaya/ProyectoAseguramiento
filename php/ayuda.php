<?php
  session_start();
  session_destroy();
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AYUDA</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  </head>
<body>
  <!--BARRA SUPERIOR-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!--ICONO MOVILES-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegation" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Desplegar / Ocultat</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Instituciones</a>
      </div>
      <!--BARRA MENU-->
      <div class="collapse navbar-collapse" id="navegation">

        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="../index.php" class="dropdown-toogle">Inicio</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button">
              Categorias<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Requisitos de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Diseño de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Construcción de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Pruebas de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Mantenimiento de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Gestión de la configuración</a></li>
              <li class="divider"></li>
              <li><a href="#">Gestión de la Ingeniería de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Proceso de Ingeniería de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Herramientas y métodos de la Ingeniería de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Calidad del Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Práctica Profesional de la Ingeniería de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Economía de la Ingeniería de Software</a></li>
              <li class="divider"></li>
              <li><a href="#">Fundamentos de Computación</a></li>
              <li class="divider"></li>
              <li><a href="#">Fundamentos Matemáticos</a></li>
              <li class="divider"></li>
              <li><a href="#">Fundamentos de Ingeniería</a></li>
            </ul>
          </li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="ayuda.php" class="dropdown-toogle">Ayuda</a>
          </li>
          <li class="dropdown">
            <a href="acerca.php" class="dropdown-toogle">Acerca de...</a>
          </li>
          <li>
            <a href="loginAdmin.php"><i class="glyphicon glyphicon-user"></i></a>
          </li>
          <li>
            <a href="logout"><i class="glyphicon glyphicon-log-out"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--CONTENIDO-->
  <div class="container-fluid">
    <div class="row">
      <!--MENU IZQUIERDA-->
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li><a href="#">Requisitos de Software</a></li>
          <li><a href="#">Diseño de Software</a></li>
          <li><a href="#">Construcción de Software</a></li>
          <li><a href="#">Pruebas de Software</a></li>
          <li><a href="#">Mantenimiento de Software</a></li>
          <li><a href="#">Gestión de la configuración</a></li>
          <li><a href="#">Gestión de la Ingeniería de Software</a></li>
          <li><a href="#">Proceso de Ingeniería de Software</a></li>
          <li><a href="#">Herramientas y métodos de la Ingeniería de Software</a></li>
          <li><a href="#">Calidad del Software</a></li>
          <li><a href="#">Práctica Profesional de la Ingeniería de Software</a></li>
          <li><a href="#">Economía de la Ingeniería de Software</a></li>
          <li><a href="#">Fundamentos de Computación</a></li>
          <li><a href="#">Fundamentos Matemáticos</a></li>
          <li><a href="#">Fundamentos de Ingeniería</a></li>
      </div>
      <!--MAIN-->
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!--IMAGENES DE LA UNIVERSIDAD-->
        <div class="container" align="center">
          <img src="../images/LogoUACMC.jpg" width="10%" height="10%" >
          <img src="../images/Logo15.png" width="20%" height="20%">
        </div>
        <!--CONTENIDO-->
        <h2 class="sub-header"></h2>
        <h2 class="sub-header">Página de inicio</h2>
        <div class="container" align="center">
          <img src="../images/ayuda2.jpg" width="70%" height="80%" >
        </div>
        <h2 class="sub-header">En el login del administrador</h2>
        <div class="container" align="center">
          <img src="../images/ayuda3.jpg" width="70%" height="80%">
        </div>
      </div>
    </div>
  <!--PIE DE PAGINA-->
  <nav class="navbar2 navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="pie">
        <div class="row">
          <div class="col-xs-6">
            <p>Aseguramiento de la Calidad del Software | UACM - SLT | 2016</p>
          </div>
          <div class="col-xs-6">
            <ul class="list-inline text-right">
              <li><a href= "mailto:erikc_77@yahoo.com.mx">Contacto e-mail</a></li>
            </ul>
          </div>
        </div>
      </div>
  </nav>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>