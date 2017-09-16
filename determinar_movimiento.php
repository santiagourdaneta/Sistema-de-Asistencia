<?php 

if (isset($_POST["cedula"])) {
     
  $cedula = test_input($_POST["cedula"]);

  
$sql = "SELECT * FROM empleados WHERE cedula='$cedula'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();


 $sql = "SELECT * FROM empleados WHERE cedula = '$cedula'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      $count = mysqli_num_rows($result);


      if($count > 0) {

 $fecha = date("Y-m-d");
 $hora = date("H:i:s");

      $sql2 = "SELECT * FROM marcados WHERE cedula = '$cedula'";
      $result2 = mysqli_query($db,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
       
     $count2 = mysqli_num_rows($result2);
     
           $par = abs($count2%2);
        require("conectar.php");


          if ($par == 0){ 
                              
                               $tipo = "Entrada";
                           
 
   $query = "INSERT INTO marcados (cedula,  tipo, fecha) VALUES ('$cedula', '$tipo', '$fecha')";
    
    $result = mysqli_query($connect,$query);
    $movimiento = 0; 
  

   } else{ 
                               
                                $tipo = "Salida";
                                 
 $query = "INSERT INTO marcados (cedula,  tipo, fecha) VALUES ('$cedula', '$tipo', '$fecha')";
    
    $result = mysqli_query($connect,$query);
     $movimiento = 1; 
                       
                            
        
        } 
        } else {

       
         header("location: index.php?error");
      }


}

if (!isset($_POST["cedula"])) {

         echo "Acceso prohibido";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>