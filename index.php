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


<!--Script para mostrar áreas-->
  <script>
  jQuery(document).ready(function(){
  $(".oculto").hide();              
    $(".inf").click(function(){
          var nodo = $(this).attr("href");  
 
          if ($(nodo).is(":visible")){
               $(nodo).hide();
               return false;
          }else{
        $(".oculto").hide("slow");                             
        $(nodo).fadeToggle("fast");
        return false;
          }
    });
  }); 
  </script>


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
          <a href="index.php" class="navbar-brand">Inicio</a>
        </div>
        </div>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navegacion">
          <ul class="nav navbar-nav">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Administrador<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="./php/loginAdmin.php">Iniciar sesión</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Usuario<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="./php/registrousuario.php">Registrarse</a></li>
                <li><a href="#">Iniciar Sesión</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Acerca de<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Manual de Usuario</a></li>
                <li><a href="#">Ayuda</a></li>
              </ul>
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

  <center><h4>Búsqueda por áreas</h4></center><br>

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2 col-xs well">
            <a href="#info1" class="inf">Desarrollo de Software</a>
          </div>
          <div class="col-sm-2 col-xs well">
            <a href="#info2" class="inf">Calidad de Software</a>
          </div>
          <div class="col-sm-2 col-xs well">
          <a href="#info3" class="inf">Pruebas de Software</a>
          </div>
          <div class="col-sm-2 col-xs well">
          <a href="#info4" class="inf">Análisis de Software</a>
          </div>
          <div class="col-sm-2 col-xs well">
          <a href="#info5" class="inf">Programación</a>
          </div>
          <div class="col-sm-2 col-xs well">
          <a href="#info6" class="inf">Normatividad de Software</a>
          </div>
        </div>
        <!-- contenido informacion adicional -->
        <div class="row">
          <div id="info1" class="col-xs-12 well oculto">
                <div class="divInformacion">
                  <center><h2>Instituciones de Desarrollo de Software</h2></center>
                  <center><table border="2">
                    <tbody>
                      <tr class="encabezado">
                        <td>Institución</td>
                        <td>Descripción</td>
                        <td>País</td>
                        <td>Ciudad</td>
                        <td>Número</td>
                        <td>Avenida</td>
                        <td>Calle</td>
                      </tr>
                        <?php
                          include('./php/conexion.php');
                          $query="SELECT * FROM institucion";
                          $resultado=$con->query($query);
                          while($row=$resultado->fetch_assoc()){
                        ?>
                      <tr>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['descripcion'];?></td>
                        <td><?php echo $row['pais'];?></td>
                        <td><?php echo $row['ciudad'];?></td>
                        <td><?php echo $row['numero'];?></td>
                        <td><?php echo $row['avenida'];?></td>
                        <td><?php echo $row['calle'];?></td>
                      </tr>
                        <?php
                          }
                        ?>
                    </tbody>
                  </table>
                  </center>
              </div>
          </div>
          <div id="info2" class="col-xs-12 well oculto">
            <p>Texto 2</p>
          </div>
          <div id="info3" class="col-xs-12 well oculto">
          <p>Texto 3</p>
          </div>
          <div id="info4" class="col-xs-12 well oculto">
          <p>Texto 4</p>
          </div>
          <div id="info5" class="col-xs-12 well oculto">
          <p>Texto 5</p>
          </div>
          <div id="info6" class="col-xs-12 well oculto">
          <p>Texto 6</p>
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
          <p><span><img src="./Images/mapablanco.png" width="25px" height="25px"> Calle Prolongación San Isidro 151, Iztapalapa, San Lorenzo Tezonco, 09790 Ciudad de México, D.F.</span>Ciudad de México, México</p>
        </div><br>

        <div>
          <p><img src="./Images/telefonoblanco.png" width="25px" height="25px"> 01 55 5850 1901</p>
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
