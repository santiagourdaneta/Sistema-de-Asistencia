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
         <img style="width:64px" src="../img/marcados.png"/>
						 <h1>MARCADOS</h1> 
                     <form class="form-signin" action="index.php" method="POST">
						 <p>Fecha: <input type="text" id="datepicker" required="" name="fecha"></p>
 
					   <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>   
    
    </form>

 <div style="color:black;font-weight: 900;font-size: 20px">   <?php  if(isset($_POST["fecha"])){
    $fecha= $_POST["fecha"]; echo $newDate = date("d-m-Y", strtotime($fecha));  } ?> </div>
						 <?php
						 
require("../../conectar.php");
 
 
$sql = "SELECT * FROM marcados INNER JOIN empleados ON marcados.cedula=empleados.cedula WHERE marcados.fecha='$fecha' ORDER BY marcados.fecha_hora DESC";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 ?>
<div align="center">	 
   <table id="customers">
    <tr>
    <th>Foto</th>
    <th>Nombre y Apellido</th>
    <th>Hora</th>
    <th>Tipo</th>
    </tr>
    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
       <tr>
		   
		  
		    <td>  <img src="../empleados/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" /> </td>
		    <td> <?php echo $row["nombre"];  echo " ";  echo $row["apellido"]; ?></td>
		    <td> <?php $row["fecha_hora"];
                   $date = DateTime::createFromFormat( 'Y-m-d H:i:s', $row["fecha_hora"]);
echo $date->format( 'H:i:s'); // Will print 17:00 

             ?></td>
		    <td> <?php echo $row["tipo"]; ?></td>
		   </tr>
<?php
    }
    ?>
    </table>
    </div>
    <?php
} else {
    ?>
    <div style="color:red;font-weight: 900;font-size:20px"> 
    <?php
    if(isset($_POST["fecha"])){
        echo "No hubo resultados";
    }
    echo "";
}

$conn->close();
?>
 </div>
        </div>
    </header>

 <?php   require("comunes/footer.php"); ?>

   <?php   require("comunes/scripts.php"); ?>

</body>
 
</html>
