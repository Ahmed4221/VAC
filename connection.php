<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "VAC";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// echo "Connected successfully";
return $conn;
// if(isset($_POST["Submit"])){
//     echo $_FILES["PassportImage"]["name"];
  // $destination_path = getcwd().DIRECTORY_SEPARATOR;
  // $destination_path = $destination_path.="uploads/";
  // $target_path = $destination_path . basename( $_FILES["PassportImage"]["name"]);
 
  // move_uploaded_file($_FILES['PassportImage']['tmp_name'], $target_path);
//   }
?>
