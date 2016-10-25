<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>INTITUCIONES</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/estilo.css">
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
          <a href="../index.php" class="navbar-brand">Consulta Instituciones</a>
        </div>
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

  <!-- Se llama al estilo de Bootstrap-->
   <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <!--Se llama al login del usuario-->
      <form action = "loginAdministrador.php" method = "POST">

        <fieldset>
          <h2>Ingresa tus Datos<br><br>


            <div class="form-group">
               <input type = "text" name = "email" id="email" placeholder = "Corre Electrónico" title = "Se necesita un usuario" required="required" class="form-control input-lg">
            </div>
            <div class="form-group">
               <input type = "password" name = "password" id="password" placeholder = "Password" title = "Se necesita un password" required="required" class="form-control input-lg">
            </div>

           <div class="row">
            
            <div class="col-xs-3 col-sm-3 col-md-3">
              <input type="submit" name="Submit" value="Aceptar" class="btn btn-lg btn-success btn-block">
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3"> <a href="../index.php"  class="btn btn-lg btn-primary btn-block">Regresar</a> 
            </div>

          </div>
        </fieldset>
      </form>
  </div>



  <br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
  <br><hr>

 
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
</body>
</html>
