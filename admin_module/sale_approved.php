<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';
          $saleid = $_GET['SaleID'];
          $sqlApproveSale = "UPDATE  `SaleOnProducts` SET Approved=1 WHERE SaleID='".$saleid."'";
          $res = mysqli_query($conn,$sqlApproveSale);
          if ($res){
              $message = "Sale has been started successfully";
              $query = "SELECT * FROM `SaleOnProducts` WHERE SaleID='".$saleid."' ";
              $results = mysqli_query($conn,$query);
              $followingdata = $results->fetch_assoc();
              $vendorid = $followingdata['Vendor_id'];
              $barcode = $followingdata['Barcode'];
              $updatedamount = $followingdata['UpdatedAmount'];
              $query2 = "UPDATE `Vendors_Products` SET  price_per_ctn = '$updatedamount'
                                                  WHERE Barcode = '$barcode' AND Vendor_id = '$vendorid' ";
              mysqli_query($conn,$query2);
          }
          else{
              $message = "Sorry, could not start the sale ";
          }
          header("Location:view_sale_requests.php?ApprovalOfSale={$message}");
          
        //   echo "connection made";
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>