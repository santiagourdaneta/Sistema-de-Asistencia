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
         
						 <h1>EMPLEADOS</h1> 
                         
                         <a href="registrar.php" title="Registrar"><img src="img/registrar.png" width="64px"></a>

						 <?php
                        if(isset($_GET["registrado"]))
                        {
                            ?>
                            <div class="alert alert-success fade in">
                             <div style="text-align:center;color:green;font-weight:900">
                              <?php echo "Empleado registrado exitosamente!"; ?> !
                         </div>
                         <?php
                     }
                     ?>

                      <?php
                        if(isset($_GET["editado"]))
                        {
                            ?>
                            <div class="alert alert-success fade in">
                             <div style="text-align:center;color:green;font-weight:900">
                              <?php echo "Empleado editado exitosamente!"; ?> !
                         </div>
                         <?php
                     }
                     ?>
 
                     </div>  

                    <?php
                        if(isset($_GET["error"]))
                        {
                            ?>
                            <div class="alert alert-success fade in">
                              <div style="text-align:center;color:red;font-weight:900">
                              <?php echo "Debe elegir a un empleado!"; ?> !
                         </div>
                         <?php
                     }
                     ?>
 
                     </div>  
					 
						 <?php
						 
require("../../conectar.php");

$sql = "SELECT * FROM empleados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 ?>
<div align="center">	 
   <table id="customers">
    <tr>
	<th>Foto</th>
    <th>Cedula</th>
    <th>Nombre y Apellido</th>
    <th colspan="2">Acciones</th>
    </tr>
    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
       <tr>
		   <td>  <img src="fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" /> </td>
		   <td> <?php echo $row["cedula"]; ?></td>
		   <td> <?php echo $row["nombre"];  echo " ";  echo $row["apellido"]; ?></td>  
           <td>  <a href="consultar_marcados.php?cedula=<?php echo $row["cedula"]; ?>" title="Consultar Marcados"> <img style="width:32px" src="../img/marcados.png"/></a></td> 
            <td>  <a href="editar.php?cedula=<?php echo $row["cedula"]; ?>" title="Editar Empleado"> <img style="width:32px" src="img/editar.png"/></a></td>  
		   </tr>
<?php
    }
    ?>
    </table>
    </div>
    <?php
} else {
    echo "0 results";
}

$conn->close();
?>
 
        </div>
    </header>

 <?php   require("comunes/footer.php"); ?>

   <?php   require("comunes/scripts.php"); ?>

</body>
 
</html>
