<?php
session_start();
$conn = require '../connection.php';

if($_SESSION['ClientTemporaryloggedIn'] ){
    //   echo "Usertype is   : ",$_SESSION["UserType"];
              //making connection

              
              $email =  $_SESSION["UserEmail"];
            //   echo $email;
              $sql = "UPDATE  `Client` SET Approved = 1 WHERE Email = '".$email."'";
             if (mysqli_query($conn,$sql)){
                $sql = "SELECT * FROM  `Client` WHERE Email = '".$email."'";
                $query = mysqli_query($conn,$sql);
                $followingdata = $query->fetch_assoc();
            //inserting new suer information in users table
            $sql = "INSERT INTO `Users`(`Email`, `Password`, `UserType`) 
                    VALUES ('".$followingdata['Email']."','".$followingdata['Password']."','Client')";
            mysqli_query($conn,$sql) or die(mysqli_error($conn));
             }
             header('Location: ../index.php');

  
    }
    else{
      //redirect to the login page
      header('Location: ../index.php');
    }


?>