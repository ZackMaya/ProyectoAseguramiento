<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Saliendo...</title>
	<!--Codificación de caracteres especiales-->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>
	<!--Mensaje de despedida de la sesión-->
	<br><br><br><hr>
	<center><h2>Cerrando Sesión....vuelve pronto</h2></center>
	<hr>
	
	<script language="javascript">location.href = "../index.php";</script>
</body>
</html>