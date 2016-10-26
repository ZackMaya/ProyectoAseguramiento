<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>INTITUCIONES</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/estilo.css">
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
                <a href="index.php" class="dropdown-toogle">Inicio</a>
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
                <a href="./php/ayuda.php" class="dropdown-toogle">Ayuda</a>
              </li>
              <li class="dropdown">
                <a href="./php/acerca.php" class="dropdown-toogle">Acerca de...</a>
              </li>
              <li>
                <a href="./php/loginAdmin.php"><i title="Iniciar Sesión" class="glyphicon glyphicon-user"></i></a>
              </li>
              <li>
                <a href="./php/registrousuario.php"><i title="Registro" class="glyphicon glyphicon-check"></i></a>
              </li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="jumbotron">
    <div class="container" align="center">
      <a href="#" class="thumb">
        <img src="Images/LogoUACMC.jpg" width="10%" height="10%" >
        <img src="Images/Logo15.png" width="20%" height="20%">
      </a>
    </div>
  </section><br><br><br>

    <!--Contenido-->
    <section class="main container">
      <div class="row">
        <aside class="col-md-3 hidden-xs hidden-sm">
          <h4>Categorias</h4>
          <div class="list-group">
            <a href="#" class="list-group-item">Requisitos de Software</a>
            <a href="#" class="list-group-item">Diseño de Software</a>
            <a href="#" class="list-group-item">Construcción de Software</a>
            <a href="#" class="list-group-item">Pruebas de Software</a>
            <a href="#" class="list-group-item">Mantenimiento de Software</a>
            <a href="#" class="list-group-item">Gestión de la configuración</a>
            <a href="#" class="list-group-item">Gestión de la Ingeniería de Software</a>
            <a href="#" class="list-group-item">Proceso de Ingeniería de Software</a>
            <a href="#" class="list-group-item">Herramientas y métodos de la Ingeniería de Software</a>
            <a href="#" class="list-group-item">Calidad del Software</a>
            <a href="#" class="list-group-item">Práctica Profesional de la Ingeniería de Software</a>
            <a href="#" class="list-group-item">Economía de la Ingeniería de Software</a>
            <a href="#" class="list-group-item">Fundamentos de Computación</a>
            <a href="#" class="list-group-item">Fundamentos Matemáticos</a>
            <a href="#" class="list-group-item">Fundamentos de Ingeniería</a>
          </div>
        </aside>
        <section class="posts col-md-9">

          <article class="post clearfix">
            <h2 class="post-title">Bienvenido</h2>
            <p class="post-contenido text-justify">
              En está aplicación podrás encontrar información relevante sobre intituciones relacionadas con las distintas materias que te encontraras a lo largo de la carrera, cualquier aclaración por favor de decirlas.
            </p>
          </article>

          <article class="post clearfix">
            <h2 class="post-title">Descripción categorias</h2>
            <p class="post-contenido text-justify">
              AQUÍ VA LAS SUBCATEGORIAS
            </p>
          </article>

          <article class="post clearfix" style="width: 60%">
            <h2 class="post-title">Descripción instituciones</h2>
            <p class="post-contenido text-justify">

            *AQUÍ VA LA DESCRIPCION*<br>
            <!--
            Todavia no se ha estipulado como e mostrará bien la información si así fuera es necesario es siguiente Query

            "SELECT * FROM institucion,pais,areaswebook WHERE institucion.pais=pais.nombre AND intitucion.area=areaswebook.nombrearea";
            -->
            <?php
              include('./php/conexion.php');
              $query="SELECT * FROM institucion";
              $resultado=$con->query($query);
              while($row=$resultado->fetch_assoc()){
            ?>
            <br><hr>
              <h4>Nombre:</h4><?php echo $row['nombre'];?>
              <h4>Telefono:</h4><?php echo $row['telefono'];?>
              <h4>Correo:</h4> <?php echo $row['correo'];?>
              <h4>URL:</h4> <?php echo $row['url_pagina'];?>
              <h4>Imagen:</h4> <?php echo $row['url_imagen'];?>
              <h4>Descripción:</h4> <?php echo $row['descripcion'];?>
            <!--
            En esta parte falta mostrar el pais y area pero como son de otra area y no se ha mencionado como se mostrará la 
            información de las instituciones de esta parte, esto queda pendiente 
             <h4>País:</h4> <?php echo $row['nombrepais'];?>
            <h4>Área:</h4> <?php echo $row['nombrearea'];?>-->
            <?php
              }
            ?>
              
            </p>
            <div class="contenedor-botones">
              <a href="#" class="btn btn-primary">Comentarios</a>
              <a href="./php/loginAdmin.php" class="btn btn-success">Editar</a>
            </div>
          </article>
        </section>
      </div>
    </section>



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

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</body>
</html>
