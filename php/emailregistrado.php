<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>

</head>
<body>
	<!--Mensaje de despedida de la sesión-->
	<br><br><br><hr>
	<center><h2>El email ingresado ya se encuentra en nuestra Base de Datos.....intenta de nuevo</h2></center>
	<hr>

	<script language="javascript">location.href = "registrousuario.php";</script>
</body>
</html>