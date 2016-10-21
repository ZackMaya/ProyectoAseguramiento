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
	<script language="javascript">location.href = "sesion.php";</script>
</body>
</html>