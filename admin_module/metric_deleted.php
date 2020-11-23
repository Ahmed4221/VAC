<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
       $conn = require '../connection.php';

        $deleteMetric = "DELETE FROM `Value_Metrics` WHERE `Symbol` = '".$_GET['MetricToDelete']."' ";
        mysqli_query($conn,$deleteMetric);
        header("Location:admin_dash.php");

}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>