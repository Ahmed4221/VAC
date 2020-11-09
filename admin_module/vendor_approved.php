<?php
session_start();
if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
    //   echo "Usertype is   : ",$_SESSION["UserType"];
              //making connection

              $conn = require '../connection.php';
              $email =  $_GET['VendorEmail'];
              // echo $email;
              $sql = "UPDATE `Vendor` SET `Approved`=1 where Email = '$email'  ";
              $res = mysqli_query($conn,$sql);
              // echo $sql;


              $sql = "UPDATE `VendorFeedback` SET `Resolved`=1 where Email = '$email'  ";
              $res = mysqli_query($conn,$sql);


              $sql2 = "SELECT * from `Vendor` where Email = '$email'";
              $res = mysqli_query($conn,$sql2);
              $followingdata = $res->fetch_assoc();
              $email = $followingdata['Email'];
              $pass = $followingdata['Password'];

              // echo $email;/
              // echo $pass;

            // inserting new vendor information in users table
            $sql = "INSERT INTO `Users`(`Email`, `Password`, `UserType`) VALUES ('".$email."','".$pass."','vendor')";        
            mysqli_query($conn,$sql);

            header('Location: view_vendor_requests.php');
  
    }
    else{
      //redirect to the login page
      header('Location: ../index.php');
    }


?>