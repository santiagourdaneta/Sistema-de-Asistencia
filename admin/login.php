<?php
 
 if (empty($_POST["nombre_usuario"]) or (empty($_POST["clave"]))) {
       header("location: index.php?error");
    }
else{

 
    $nombre_usuario = test_input($_POST["nombre_usuario"]);
    $clave = test_input($_POST["clave"]);
    $shaclave = sha1($clave);
 
 
  
 include("../conectar.php");


  $sql = "SELECT * FROM usuario WHERE nombre_usuario = '$nombre_usuario' and clave = '$shaclave'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      $count = mysqli_num_rows($result);
     
 
      if($count == 1) {
		   session_start();	

         echo $_SESSION['nombre_usuario'] = $row["nombre_usuario"];
         
         header("location: inicio_admin.php");
      }else {

		   
		  
        header("location: index.php?error");
      }
   }
    
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

 
