<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';
        //   echo "connection made";

        $sql = "INSERT INTO `VendorProductFeedback`( `Barcode`, `VendorID`, `Suggestion`, `Resolved`) 
                VALUES ('".$_GET['ProductBarcode']."'
                        ,'".$_GET['VendorEmail']."'
                        ,'".$_GET['SuggestedText']."'
                        ,0)";
        $res = mysqli_query($conn,$sql);


        $updateCase = "UPDATE `Vendors_Products` SET Approved=-1 where Barcode =  '".$_GET['ProductBarcode']."' and Vendor_id =  '".$_GET['VendorEmail']."'";
        $res = mysqli_query($conn,$updateCase);

        header('Location: view_vendor_product_requests.php');
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>