<!DOCTYPE html>
<html lang="en">
 
<?php
require("comunes/head.php");
require("permisos.php");

require("conectar.php");

if(!isset($_GET["cedula"])){
    header("location:index.php?error");
}
else{
   echo $cedula = $_GET["cedula"];

    $sql = "SELECT * FROM empleados WHERE cedula='$cedula'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$count = mysqli_num_rows($result);

  if($count==0){
      header("location:index.php?error");
  }
}

?>

<body>
 
<?php   require("comunes/nav_admin.php"); ?>

    <!-- Header -->
    <header>
        <div align="center">
         <br><br><br>
						 <h1>EDITAR EMPLEADO</h1><img src="img/editar.png" width="64px">
					 
						   <form class="form-signin" action="codigo_editar.php?cedula=<?php echo $cedula; ?>" method="POST" enctype="multipart/form-data">


							   
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
                     </div>     
     
    
      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="" value="<?php echo $row["nombre"]; ?>"/>
      <input type="text"  value="<?php echo $row["apellido"]; ?>" class="form-control" name="apellido" placeholder="Apellido" required=""/>
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>  

      <button class="btn btn-lg btn-primary btn-block" style="background-color: red" onclick="location.href = 'index.php';" type="button">Cancelar</button>    
    </form>
 
        </div>
    </header>

 <?php   require("comunes/footer.php"); ?>

   <?php   require("comunes/scripts.php"); ?>

</body>
 
</html>
