<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';
          $saleid = $_GET['SaleID'];
          $sqlApproveSale = "DELETE FROM `SaleOnProducts` WHERE SaleID='".$saleid."'";
          $res = mysqli_query($conn,$sqlApproveSale);
          if ($res){
              $message = "Sale has been rejected successfully";
          }
          else{
              $message = "Sorry, could not reject the sale ";
          }
          header("Location:view_sale_requests.php?ApprovalOfSale={$message}");
          
        //   echo "connection made";
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>