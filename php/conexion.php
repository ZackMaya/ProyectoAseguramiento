<?php
    $con = mysqli_connect("localhost","root","root","instituciones");
    if (mysqli_connect_errno()){
	    echo "No se pudo conectar a la base de datos" . mysqli_connect_error();
	}
?>