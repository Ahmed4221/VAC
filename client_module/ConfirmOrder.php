<?php
session_start();
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {
    $conn = require '../connection.php';
    $OrderIDIncoming = $_GET['order_id'];
    $sql = "UPDATE `OrdersPlacedDetails` SET `Started`=1 Where OrderID = '".$_GET['order_id']."' AND VendorApproved = 1  ";
    $sql2 = "UPDATE `OrdersPlacedDetails` SET `Started`=-1 Where OrderID = '".$_GET['order_id']."' AND VendorApproved = 0  ";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql2);

    $sql3 = "INSERT INTO `OrderTracking`(`OrderID`, `Status`) VALUES ('".$_GET['order_id']."',1)";
    if (mysqli_query($conn,$sql3))
    {

    }
    else{
        echo $sql3;
    }

    header('Location: client_dash.php');

    
}




?>
