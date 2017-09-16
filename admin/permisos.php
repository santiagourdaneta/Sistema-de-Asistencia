<?php
session_start();
$sesion = $_SESSION['nombre_usuario'];
if (empty($sesion)) {
	 	header("location: ../index.php?iniciar");
}
?>