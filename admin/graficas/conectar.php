<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'asistencia');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "asistencia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "asistencia";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
?>
