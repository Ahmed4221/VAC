<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
       $conn = require '../connection.php';

        $insertMetric = "INSERT INTO `Value_Metrics`(`ValueName`, `Symbol`) VALUES (
                                                                                    '".$_GET['metricName']."',
                                                                                    '".$_GET['metricSymbol']."') ";
        mysqli_query($conn,$insertMetric);
        header("Location:admin_dash.php");

}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>