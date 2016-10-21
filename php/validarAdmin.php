<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>
	<!--Codificación de caracteres especiales-->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="../css/estilo.css">
   	<link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
	<!--Mensaje de despedida de la sesión-->
	<br><br><br><hr>
	<center><h2>La contraseña y correo ingresado es incorrecta....intenta de nuevo</h2></center>
	<hr>

	<script language="javascript">location.href = "../index.php";</script>
</body>


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
</html>