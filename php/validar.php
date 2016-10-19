<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	  <link rel="stylesheet" href="../css/bootstrap.min.css">
	  <link rel="stylesheet" href="../css/estilos.css">
	  <link rel="stylesheet" href="../css/estilo.css">
		

</head>
<body>
	<!--Mensaje de despedida de la sesión-->
	<br><br><br><hr>
	<center><h2>El mail no es correcto <br>
	La contraseña no es correcta.<br>
	Intenta de nuevo</h2></center>
	<hr>

	<script language="javascript">location.href = "sesion.php";</script>
</body>
</html>