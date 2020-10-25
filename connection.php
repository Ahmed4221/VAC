<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "VAC";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// echo "Connected successfully";
return $conn;

?>
