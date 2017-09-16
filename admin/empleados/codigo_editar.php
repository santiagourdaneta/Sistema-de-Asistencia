<?php
 if   (empty($_POST["nombre"]) or (empty($_POST["apellido"])))  {
       header("location: editar.php?error");
    }
 
 else{
  
    $cedula = $_GET["cedula"];
    $nombre = test_input($_POST["nombre"]);
    $apellido = test_input($_POST["apellido"]);
   
    require("../../conectar.php");
 
    $query = "UPDATE empleados SET nombre='$nombre', apellido='$apellido' WHERE cedula='$cedula'";
    
    $result = mysqli_query($connect,$query);
    
    header("location: index.php?editado");
    
   }
    
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

 

