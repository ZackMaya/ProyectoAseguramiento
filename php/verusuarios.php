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
                  <li><a href="verinstitucion.php">Ver Instituciones</a></li>
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
		
  			<!--Usuarios Registrados-->
			<div class="table-responsive">
      <center><h2>Usuarios Registrados</h2></center>
      <center><table align="center" class="table table-condensed">
        <tbody>
					<tr class="encabezado">
						<td>Nombre</td>
						<td>Email</td>
						<td>Contraseña</td>
						<td>Eliminar</td>
            <td>Editar</td>
					</tr>
						<?php
							include('conexion.php');
							$query="SELECT * FROM usuario ORDER BY nombre";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['correo'];?></td>
						<td><?php echo $row['contrasenna'];?></td>
            <td>
                <form action = "borrarusuario.php" method = "post">
                  <input type="hidden" name="submitted" value="true">
                  <input type="text" name="nombre" placeholder="Nombre Usuario" />
                  <button type="submit" class="btn btn-success btn-xs"  class='btn'><span class='glyphicon glyphicon-remove'></span></button>
                </form>
            </td>
            <td>
              <form action = "editarusuario.php" method = "post">
                  <input type="hidden" name="submitted" value="true">
                  <button type="submit" class="btn btn-success btn-xs"  class='btn'><span class='glyphicon glyphicon-pencil'></span></button>
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
<br><br><br><br>
			
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