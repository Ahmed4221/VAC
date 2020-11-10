<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';


        //   delete product status resolution
        $sql = "SELECT * FROM `Product` where Barcode =  '".$_GET['ProductBarcode']."' and Approved=0 ";
        $res = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0){
            $deleteProduct = "DELETE FROM `Product` where Barcode =  '".$_GET['ProductBarcode']."'";
            $res = mysqli_query($conn,$deleteProduct);
        }



        $sql = "SELECT * FROM `Vendors_Products` where Barcode =  '".$_GET['ProductBarcode']."' and VendorID =  '".$_GET['VendorEmail']."' and (Approved=0 or Approved=-1) ";
        $res = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)){
            $DeleteVendorProduct = "DELETE FROM `Vendors_Products` where Barcode =  '".$_GET['ProductBarcode']."' and VendorID =  '".$_GET['VendorEmail']."'";
            $res = mysqli_query($conn,$updateVendorProduct);
        }
        header('Location: view_vendor_product_requests.php');



}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>