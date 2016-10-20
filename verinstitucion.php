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
    	<link rel="stylesheet" href="./css/bootstrap.css">
     	<!--estilo-->
     	<link rel="stylesheet" href="./css/estilo.css">


	</head>
	<body>

	<!-- Cabecera -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <ul class="nav navbar-nav">
		    	<h1><a href="http://www.uacm.edu.mx" target="_blank">UACM</a><br></h1>	
		    	<li><a href="panelAdmin.php">Panel Admin</a></li>
				<li><a href="institucion.php">Insertar Institución</a></li>
				<li><a href="verinstitucion.php">Ver Institución</a></li>
				<li><a href="buscarinstitucion.php">Buscar Institución</a></li>
				<li><a href="logout.php" class="button special">Cerrar Sesión</a></li>
			</ul>
		  </div>
		</nav>


		<br><br><br><br><hr>

  			<!--Instituciones Registradas-->
			<div class="divInformacion">
			<center><h2>Instituciones Registradas</h2></center>
			<center><table border="2">
				<tbody>
					<tr class="encabezado">
						<td>Institución</td>
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
			<br><br>
			
			<!--Boton imprimir-->			
			<center><input type="button" name="imprimir" value="Imprimir"  onClick="window.print();"/></center><br><hr>
  		


		<!-- Footer -->
			<footer id="footer">
					<center>
					<ul class="copyright">
						<lo>Copyright © 2016 Proyecto SCRUM. Todos los Derechos Reservados.</li>
					</ul>
					<!--Fecha-->
						<h6>Fecha: <script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
						</script></h6>
					</center>
			</footer>
	</body>
</html>