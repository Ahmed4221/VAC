<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';

        $sql = "SELECT * FROM `Vendors_Products` where Barcode =  '".$_GET['ProductBarcode']."' and Vendor_id =  '".$_GET['VendorEmail']."' and (Approved=0 or Approved=-1) ";
        $res = mysqli_query($conn,$sql);
        if (mysqli_num_rows($res)>0){

            $DeleteVendorProduct = "DELETE FROM `Vendors_Products` where Barcode =  '".$_GET['ProductBarcode']."' and Vendor_id =  '".$_GET['VendorEmail']."'  and (Approved=0 or Approved=-1) ";
            $res = mysqli_query($conn,$DeleteVendorProduct);
        }
        header('Location: view_vendor_product_requests.php');



}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>