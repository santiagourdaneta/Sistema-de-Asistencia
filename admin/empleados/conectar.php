<?php
require("permisos.php");

$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "constructora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$hostname = "127.0.0.1";
$username = "dbroot";
$password = "dbrootserver1";
$databaseName = "constructora";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

?>
