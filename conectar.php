<?php
   define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '123456');
   define('DB_DATABASE', 'asistencia');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   $servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "asistencia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$hostname = "127.0.0.1";
$username = "root";
$password = "123456";
$databaseName = "asistencia";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
?>
