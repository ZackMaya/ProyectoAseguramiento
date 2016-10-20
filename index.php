<?php
	session_start();
	session_destroy();
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	   <title>Login Administrador</title>
    <meta name="viewport" content="width=device-width">

    <!-- Formulario elaborado con recursos Bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap.css">
    
  </head>

<!--Body-->  
<body>

  <!-- Se llama al estilo de Bootstrap-->
   <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <!--Se llama al login del usuario-->
      <form action = "loginAdministrador.php" method = "POST">

        <fieldset>
          <h2>Administrador<br><br>


            <div class="form-group">
			         <input type = "text" name = "email" id="email" placeholder = "Corre Electrónico" title = "Se necesita un usuario" required="required" class="form-control input-lg">
            </div>
            <div class="form-group">
			         <input type = "password" name = "password" id="password" placeholder = "Password" title = "Se necesita un password" required="required" class="form-control input-lg">
            </div>


           <div class="row">
            
            <div class="col-xs-3 col-sm-3 col-md-3">
              <input type="submit" name="Submit" value="Aceptar" class="btn btn-lg btn-success btn-block">
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3"> <a href="../index.php"  class="btn btn-lg btn-primary btn-block">Regresar</a> 
            </div>

          </div>
        </fieldset>
      </form>
  </div>

</body>
</html>
