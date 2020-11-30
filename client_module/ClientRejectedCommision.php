<?php
session_start();
$conn = require '../connection.php';

if($_SESSION['ClientTemporaryloggedIn'] ){
    //   echo "Usertype is   : ",$_SESSION["UserType"];
              //making connection

              
              $email =  $_SESSION["UserEmail"];
            //   echo $email;
              $sql = "UPDATE  `Client` SET Approved = -2 WHERE Email = '".$email."'";
              mysqli_query($conn,$sql);
              header('Location: ../index.php');

  
    }
    else{
      //redirect to the login page
      header('Location: ../index.php');
    }


?>