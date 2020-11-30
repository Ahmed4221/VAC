<?php
session_start();

if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="admin" or $_SESSION["UserType"]=="vendor")) {

    $conn = require '../connection.php';
    $newStatus = $_GET['shipment_status'];
    $barcode = $_GET['barcode'];
    // echo $newStatus;
    $sql = "UPDATE `OrderTracking` SET Status = '$newStatus'   WHERE OrderID = '".$_GET['orderId']."'";
    $rez = mysqli_query($conn,$sql);

    if ($newStatus==3){
        $sql = "SELECT * FROM `OrdersPlacedDetails` WHERE 
                                                    OrderID = '".$_GET['orderId']."' 
                                                    AND
                                                    VendorID = '".$_SESSION["UserEmail"]."'
                                                    AND
                                                    Barcode = '".$_GET['barcode']."' ";
        $rez = mysqli_query($conn,$sql);
        $followingdata = $rez->fetch_assoc();
        $quantity = $followingdata['Quantity'];

        $sql = "UPDATE `Vendors_Products` SET Quantity = (Quantity-'$quantity') WHERE Vendor_id = '".$_SESSION["UserEmail"]."'
        AND Barcode = '$barcode'  ";
        mysqli_query($conn,$sql);

    }
    header('Location: add_shipment_details.php');



}
else{
    //redirect to the login page
    header('Location: ../index.php'); }



?>