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
    	  <link rel="stylesheet" href="../css/bootstrap.min.css">

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
		
 				
	<!-- Large modal -->
<center><button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Insertar Institución</button></center>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width: 80%">
    <div class="modal-content">
      <div class="container">
  
      <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form action = "registrarInstitucion.php" method = "post">
          <input type="hidden" name="submitted" value="true">
            <fieldset>
             <h2>Modo Administrador Dar de alta una institución</h2>
            <br><br>
            <hr>


              <!--El id es autoincrement en la Base de Datos no se necesita ingresar-->

          <!--Nombre de institución-->    
          <div class="form-group">
            <label for="nombre">Nombre de Institución</label>
            <input class="form-control" name="nombre" type="text" required="required"  placeholder="Institución" tabindex="6" title="Nombre">
          </div>

          <!--Descripción-->
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input class="form-control" name="descripcion" type="text" required="required"  placeholder="Descripción" tabindex="6" title="descripción">
          </div>

              
          <!--País de la Institución-->
          <div class="form-group">
              <label for="pais">País</label>
              <form name="combopais">
                    <select name="pais" class="form-control" tabindex="6">
                        <option value="" selected>Elige</option>
                        <?php
                        include('conexion.php');
                          $query="SELECT * FROM pais
                          ORDER BY nombrepais";
                          $resultado=$con->query($query);
                          while($row=$resultado->fetch_assoc()){
                        ?>
                  <option value="<?php echo $row['id_pais']?>"><?php echo $row['id_pais'];?>.- <?php echo $row['nombrepais'];?></option>
                  <?php
                    }
                  ?>
                    </select>
                   </form>
              <!--<input class="form-control" name="pais" type="text" required="required"  placeholder="Seleccione País" tabindex="6" title="País">-->
          </div>

          <!--Telefono-->
          <div class="form-group">
              <label for="telefono">Telefono</label>
              <input class="form-control" name="telefono" type="text" required="required" placeholder="Telefono" tabindex="6" title="Telefono">
          </div>

          <!--Correo-->
          <div class="form-group">
            <label for="correo">Correo</label>
            <input class="form-control" name="correo" type="text" required="required"  placeholder="Correo" tabindex="6" title="correo">
          </div>


          <!--Área-->
          <div class="form-group">
            <label for="area">Área</label>
                    <select name="area" class="form-control" tabindex="6">
                        <option value="" selected>Elige</option>
                        <?php
                        include('conexion.php');
                          $query="SELECT * FROM areaswebook";
                          $resultado=$con->query($query);
                          while($row=$resultado->fetch_assoc()){
                        ?>
                  <option value="<?php echo $row['id_area']?>"><?php echo $row['id_area'];?> .-<?php echo $row['nombrearea'];?></option>

                  <?php
                    }
                  ?>
                    </select>
            <!--<input class="form-control" name="area" type="text" required="required"  placeholder="Seleccione el Área" tabindex="6" title="area">-->
          </div>

          <!--URL-->
          <div class="form-group">
            <label for="url">URL</label>
            <input class="form-control" name="url" type="text" required="required"  placeholder="url" tabindex="6" title="url">
          </div>

          <!--URL Imagen-->
          <div class="form-group">
            <label for="imagen">URL-Imagen</label>
            <input class="form-control" name="imagen" type="text"  placeholder="Imagen" tabindex="6" title="imagen *opcional">
          </div>

        
            <div class="col-lg-12 ">
            <br>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-lg btn-success btn-block" class="btn btn-default">
          </div>

          <div class="col-xs-3 col-sm-3 col-md-3"> 
            <input type="reset" tabindex="8" class="btn btn-lg btn-primary btn-block" class="col-xs-6 col-sm-6 col-md-6" value="Borrar">
          </div>
          <input type="hidden" name="estado" value="1">
        </div>                  
            </fieldset>
          </form>
        </div>
      </div>

    </div><br><br><br><br>
     <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>


<br><br>

    <!--Instituciones Registradas-->
      <div class="table-responsive">
      <center><h2>Instituciones Registradas</h2></center>
      <center><table class="table table-condensed">
        <tbody>
          <tr class="encabezado">
            <td>Institución</td>
            <td>Telefono</td>
            <td>Correo</td>
            <td>URL</td>
            <!--<td>Descripción</td>-->
            <td>País</td>
            <td>Área</td>
            <td>Insertado por</td>
            <td>Número Institución</td>
            <td>Editar</td>
          </tr>
            <?php
              include('conexion.php');
              $query="SELECT * FROM institucion,areaswebook,pais WHERE institucion.area=areaswebook.id_area
                      AND institucion.pais=pais.id_pais";
              $resultado=$con->query($query);
              while($row=$resultado->fetch_assoc()){
            ?>
          <tr>
            <td><?php echo $row['id_institucion'];?> .- <?php echo $row['nombre'];?></td>
            <td><?php echo $row['telefono'];?></td>
            <td><?php echo $row['correo'];?></td>
            <td><?php echo $row['url_pagina'];?></td>
            <!--<td><?php echo $row['descripcion'];?></td>-->
            <td><?php echo $row['nombrepais'];?></td>
            <td><?php echo $row['nombrearea'];?></td>
            <td><?php echo $row['autorizado'];?></td>
            <td>
                <form action = "borrar.php" method = "post">
                  <input type="hidden" name="submitted" value="true">
                  <input class="col-xs-3 type="text" name="id" placeholder="#" />
                  <button type="submit" class="btn btn-success btn-xs"  class='btn'><span class='glyphicon glyphicon-remove'></span></button>
                </form>
            </td>
            <td>
                  <input type="hidden" name="submitted" value="true">
                  <button type="submit" data-toggle="modal" data-target=".bd-example-modal-sm" class="btn btn-success btn-xs"  class='btn'><span class='glyphicon glyphicon-pencil'></span></button>

            </td>
          </tr>
            <?php
              }
            ?>
        </tbody>
      </table>
      </center>
      </div>
    <br><br><br><br><br><br><br><br><br><br>
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

 <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

</body>
</html>