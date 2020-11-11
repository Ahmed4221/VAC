<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';


        //   updating case resolution
        $sql = "SELECT * FROM `VendorProductFeedback` where Barcode =  '".$_GET['ProductBarcode']."' and VendorID =  '".$_GET['VendorEmail']."' ";
        $res = mysqli_query($conn,$sql);
        if (mysqli_num_rows($res)>0){
            $updateCase = "UPDATE `VendorFeedback` SET Resolved=1 where Barcode =  '".$_GET['ProductBarcode']."' and Vendor_id =  '".$_GET['VendorEmail']."'";
            $res = mysqli_query($conn,$updateCase);
        }



        $outersql = "SELECT * FROM `Vendors_Products` where Barcode =  '".$_GET['ProductBarcode']."' and Vendor_id =  '".$_GET['VendorEmail']."' ";
        $res = mysqli_query($conn,$outersql);
        if (mysqli_num_rows($res)>0){
            $updateVendorProduct = "UPDATE `Vendors_Products` SET Approved=1 where Barcode =  '".$_GET['ProductBarcode']."' and Vendor_id =  '".$_GET['VendorEmail']."'";
            if(mysqli_query($conn,$updateVendorProduct)){
                        //   updating product status resolution
                        $sql = "SELECT * FROM `Product` where Barcode =  '".$_GET['ProductBarcode']."'  ";
                        $res = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($res)>0){
                            $updateProduct = "UPDATE `Product` SET Approved=1 where Barcode =  '".$_GET['ProductBarcode']."'";
                            $res = mysqli_query($conn,$updateProduct);
                            }

            }
        }
        else{echo $outersql;}
        header("Location: product_approved.php?VendorEmail=".$_GET['VendorEmail']."&ProductBarcode=".$_GET['ProductBarcode']);



}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>