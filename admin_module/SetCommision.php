<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';
        //   echo "connection made";
        $sql = "UPDATE `Client` SET `AgreedCommision`='".$_GET['FixedCommision']."',
                                     `HiddenCommision`='".$_GET['HiddenCommision']."',
                                     `Approved` = -1   
                                      WHERE `Email` =  '".$_GET['ClientEmail']."' ";
        mysqli_query($conn,$sql);
        // echo $sql;
        header("Location:view_client_requests.php");
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>