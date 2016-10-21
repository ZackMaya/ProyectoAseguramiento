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


	</head>
<body>

<header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navegacion">
          <ul class="nav navbar-nav">
            <li id="menuprincipal"><a href="panelAdmin.php">Panel Admin</a></li>
			<li><a href="institucion.php">Insertar Institución</a></li>
			<li><a href="verinstitucion.php">Ver Institución</a></li>
			<li><a href="buscarinstitucion.php">Buscar Institución</a></li>
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

		 <br><br><br>
		
		<center>
		<form action = "borrar.php" method = "post">
      	<input type="hidden" name="submitted" value="true">
			<input type="text" name="institucion"/>
			<input type="submit" value="Eliminar Institución"/>
		</form>
		</center><br>

  			<!--Instituciones Registradas-->
			<div class="divInformacion">
			<center><h2>Instituciones Registradas</h2></center>
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
							include('conexion.php');
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

			
			<!--Boton imprimir-->			
			<center><input type="button" name="imprimir" value="Imprimir"  onClick="window.print();"/></center>

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
	</body>
</html>