<!DOCTYPE html>
<html lang="en">
 
<?php
require("comunes/head.php");
require("permisos.php");
?>

<body>
 
<?php   require("comunes/nav_admin.php"); ?>

    <!-- Header -->
    <header>
        <div align="center">
         <br><br><br>
						 <h1>REGISTRAR EMPLEADO</h1><img src="img/registrar.png" width="64px">
					 
						   <form class="form-signin" action="codigo_registrar.php" method="POST" enctype="multipart/form-data">


							   
		<div style="text-align:center;color:red;font-weight:900"> <?php
                        if(isset($_GET["error"]))
                        {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "Debe ingresar todos los datos"; ?> !
                         </div>
                         <?php
                     }
                     ?>
                     <?php
                        if(isset($_GET["imagen"]))
                        {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "Error al cargar la imagen"; ?> !
                         </div>
                         <?php
                     }
                     ?>
                     </div>     
     
      <input type="text" class="form-control"  maxlength="8" onkeypress="return isNumberKey(event)"  name="cedula" placeholder="Cedula" required="" autofocus="" />
      <input type="text" class="form-control"  maxlength="20" name="nombre" placeholder="Nombre" required=""/>
      <input type="text" class="form-control"  maxlength="20" name="apellido" placeholder="Apellido" required=""/>
      <label>Foto (JPG, PNG, GIF MAX 1 MB)  </label>
      <input class="form-control" type="file" name="foto" accept="image/*" placeholder="Foto" required="" /> 
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>  

      <button class="btn btn-lg btn-primary btn-block" style="background-color: red" onclick="location.href = 'index.php';" type="button">Cancelar</button>    
    </form>
 
        </div>
    </header>

 <?php   require("comunes/footer.php"); ?>

   <?php   require("comunes/scripts.php"); ?>
<script type="text/javascript">
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
</script>
</body>
 
</html>
