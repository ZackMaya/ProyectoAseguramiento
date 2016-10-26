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
    	  <link rel="stylesheet" href="../css/bootstrap.min.css">

     	<!--estilo-->
     	<link rel="stylesheet" href="../css/estilo.css">
     	<link rel="stylesheet" href="../css/estilos.css">
      	 <!--Query-->
  		<script src="http://code.jquery.com/jquery-2.1.4.js"></script>

	</head>
<body>

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
        					<li><a href="buscarinstitucion.php">Editar Institución</a></li>
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
              <li>
                <a href="logout.php"><i title="Cerrar Sesión" class="glyphicon glyphicon-log-out"></i></a>
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
		 </section>

		 <br><br><br>
		
 			<!--Instituciones Registradas-->
			<div class="divInformacion">
			<center><h2>Instituciones Registradas</h2></center>
			<center><table border="2">
				<tbody>
					<tr class="encabezado">
						<td>Institución</td>
						<td>Telefono</td>
						<td>Correo</td>
						<td>URL</td>
						<td>Descripción</td>
						<td>País</td>
						<td>Área</td>
            <td>Eliminar</td>
            <td>Editar</td>
					</tr>
						<?php
							include('conexion.php');
							$query="SELECT * FROM institucion,areaswebook,pais WHERE institucion.area=areaswebook.id_area
                      AND institucion.pais=pais.id_pais";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['telefono'];?></td>
						<td><?php echo $row['correo'];?></td>
						<td><?php echo $row['url_pagina'];?></td>
						<td><?php echo $row['descripcion'];?></td>
						<td><?php echo $row['nombrepais'];?></td>
						<td><?php echo $row['nombrearea'];?></td>
            <td>
                <form action = "borrar.php" method = "post">
                  <input type="hidden" name="submitted" value="true">
                  <input type="text" name="nombre" placeholder="Nombre Institución" />
                  <button type="submit" class="btn btn-success"  class='btn'><span class='glyphicon glyphicon-remove'></span></button>
                </form>
            </td>
            <td>
              <form action = "editar.php" method = "post">
                  <input type="hidden" name="submitted" value="true">
                  <button type="submit" class="btn btn-success"  class='btn'><span class='glyphicon glyphicon-pencil'></span></button>
                </form>

            </td>
					</tr>
						<?php
							}
						?>
				</tbody>
			</table>
			</center>
			</div>

			
			<!--Boton imprimir-->			
			<center><input type="button" class="btn btn-primary" name="imprimir" value="Imprimir"  onClick="window.print();"/></center>

			<br><br><br><br><br><br><br><br><br><br><br><br>

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

 <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

</body>
</html>