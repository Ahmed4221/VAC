 


<?php
session_start();
$conn = require '../connection.php';
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {


    //Getting and calculating the cbm
    $gettingvendor = "SELECT * FROM `OrderInProgressItems` where Barcode =  '".$_GET['product_id']."'  AND Quantity = '".$_GET['product_quantity']."' ";
    $res = mysqli_query($conn,$gettingvendor);
    $followingdata = $res->fetch_assoc();
    $VendorName = $followingdata["VendorID"];



    $Dimensions = "SELECT * from `Vendors_Products` WHERE Barcode =  '".$_GET['product_id']."' AND Vendor_id = '".$VendorName."' ";
    $dim = mysqli_query($conn,$Dimensions);
    $VendorDAta = $dim->fetch_assoc();

    $length = $VendorDAta['length'];
    $width = $VendorDAta['width'];
    $height = $VendorDAta['height'];





    $sql = "SELECT * FROM OrderInProgressCBM WHERE ClientID =  '". $_SESSION["UserEmail"]."'  ";
    $rez = mysqli_query($conn,$sql);
    $followingdata = $rez->fetch_assoc();
    $OrderID = $followingdata["OrderID"];
    $CurrentCMB = $followingdata['CurrentCBM'];

    $new_cbm = $CurrentCMB - ($_GET['product_quantity'] * ($length*$width*$height));


    if( $new_cbm>0){
    $updatingCBM = "UPDATE OrderInProgressCBM SET CurrentCBM = '$new_cbm' WHERE ClientID =  '". $_SESSION["UserEmail"]."'   ";
    }
    else{
        $updatingCBM = "DELETE FROM OrderInProgressCBM  WHERE ClientID =  '". $_SESSION["UserEmail"]."'   ";
    }
    if ( mysqli_query($conn,$updatingCBM)){



    $sql3 = "DELETE FROM `OrderInProgressItems` WHERE OrderID = '$OrderID' 
                                                AND Barcode ='".$_GET['product_id']."'
                                                AND Quantity = '".$_GET['product_quantity']."' ";
    mysqli_query($conn,$sql3);
    header("location:order_placed.php");
    }
    else {
        
    }

  }




?>