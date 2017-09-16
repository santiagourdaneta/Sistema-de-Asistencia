<!DOCTYPE html>
<html lang="en">
<?php require("comunes/head.php"); ?>

<body >
 

<?php   require("comunes/nav.php"); ?>

    <!-- Header -->
    <header>
       
         <br><br>     <br> 
    <form class="form-signin" action="login.php" method="POST">
		<div style="text-align:center;color:red;font-weight:900"> 
 <img   src="img/profile.png" alt="" width="128px">
		<?php
                        if(isset($_GET["error"]))
                        {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "Usuario no existe"; ?> !
                         </div>
                         <?php
                     }
                     ?>

<?php
                        if(isset($_GET["iniciar"]))
                        {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "Debe iniciar sesión"; ?> !
                         </div>
                         <?php
                     }
                     ?>



                     
      <h2 class="form-signin-heading" style="color:black">AUTENTICACIÓN</h2>
      <input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre de usuario" required="" autofocus="" />
      <input type="password" class="form-control" name="clave" placeholder="Clave" required=""/>      
       
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button> 
        
    </form>

  </div>
           
    </header>

 <?php   require("comunes/footer.php"); ?>

  <?php   require("comunes/scripts.php"); ?>
   

</body>

</html>
