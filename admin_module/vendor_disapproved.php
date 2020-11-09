<?php
session_start();
if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
    //   echo "Usertype is   : ",$_SESSION["UserType"];
              //making connection

              $conn = require '../connection.php';
              $email =  $_GET['VendorEmail'];
            //   echo $email;
              $sql = "DELETE from `Vendor` where Email = '$email'  ";
              $res = mysqli_query($conn,$sql);
            //   echo $sql;


              //removing files
              $sql2 = "SELECT * from `Vendor` where Email = '$email'";
              $res = mysqli_query($conn,$sql2);
              $followingdata = $res->fetch_assoc();
              $followingdata['Trade_Lisence'] = str_replace("/opt/lampp/htdocs/Freelance","..",$followingdata['Trade_Lisence']);
              $followingdata['VATForm'] = str_replace("/opt/lampp/htdocs/Freelance","..",$followingdata['VATForm']); 
              $followingdata['Passport/Emirateid'] = str_replace("/opt/lampp/htdocs/Freelance","..",$followingdata['Passport/Emirateid']);
              echo  $followingdata['Passport/Emirateid'];
              unlink($followingdata['Trade_Lisence']);
              unlink($followingdata['VATForm']);
              unlink($followingdata['Passport/Emirateid']);


            // inserting new vendor information in users table
            $sql = "DELETE FROM `Users`where `Email`='".$email."'";        
            mysqli_query($conn,$sql);

            header('Location: view_vendor_requests.php');
  
    }
    else{
      //redirect to the login page
      header('Location: ../index.php');
    }


?>