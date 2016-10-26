<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Acerca de</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <!--Query-->
  <script src="http://code.jquery.com/jquery-2.1.4.js"></script>

</head>
<body background="">
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
                <a href="loginAdmin.php"><i title="Iniciar Sesión" class="glyphicon glyphicon-user"></i></a>
              </li>
              <li>
                <a href="registrousuario.php"><i title="Registro" class="glyphicon glyphicon-check"></i></a>
              </li>
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
  </section><br><br><br>
     <!--CONTENIDO-->
       
        <center><h2>HOLA</h2></center>
        <h2 class="sub-header"></h2>
        <center><div style="width: 80%">
        <p>
          Esta página está diseñada por alumnos de la carrera de Ingeniería de Software de la Universidad Autónoma de la Ciudad de México. Nació como un proyecto de la clase de Aseguramiento de la Calidad del Software del semestre 2016 – 2, pero también como una necesidad y en apoyo a nuestros compañeros de la carrera, de nuevas, actuales y viejas generaciones.<br><br>
          Sabemos la importancia de tener información de ayuda, tener referencias verídicas y no las de siempre que se hayan en internet. Esto nos sirve como un enfoque más profesional, una actitud más acorde a los semestres en que estemos.<br><br>
          Esperando que la página sea de su agrado, les agradecemos la visita. Estamos en contacto en email que está en el pie de página.
          Saludos.<br><br>
          Atte: Ingenieros Ernesto, Isaías, Jucaoma y Eric,</p>
          </div>
          </center>




   <br><br><br>

  
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
