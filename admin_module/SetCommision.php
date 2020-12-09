<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';


        $checkingifupdatingcommision = "SELECT * FROM  `Client` WHERE `Approved` = 1 AND  `Email` =  '".$_GET['ClientEmail']."' ";
        $run = mysqli_query($conn,$checkingifupdatingcommision);
        if (mysqli_num_rows($run) == 0){
        //   echo "connection made";
        $sql = "UPDATE `Client` SET `AgreedCommision`='".$_GET['FixedCommision']."',
                                     `Approved` = -1   
                                      WHERE `Email` =  '".$_GET['ClientEmail']."' ";
        mysqli_query($conn,$sql);
        // echo $sql;
        header("Location:view_client_requests.php");
      }
      else{
        $sql = "UPDATE `Client` SET `AgreedCommision`='".$_GET['FixedCommision']."'
         WHERE `Email` =  '".$_GET['ClientEmail']."' ";
          mysqli_query($conn,$sql);
          header("Location:view_all_clients.php");
      }
        
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>