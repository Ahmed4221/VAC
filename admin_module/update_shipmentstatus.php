<?php
session_start();

if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="admin")) {

    $conn = require '../connection.php';
    $newStatus = $_GET['shipment_status'];
    $sql = "SELECT * FROM `OrderTracking` WHERE OrderID = '".$_GET['orderId']."'";
    $rez= mysqli_query($conn,$sql);
    $followingdata = $rez->fetch_assoc();
    $previousStatus = $followingdata['Status']; 
    if ($newStatus>=$previousStatus and ($newStatus-1 == $previousStatus)){
    $sql = "UPDATE `OrderTracking` SET Status = '$newStatus'   WHERE OrderID = '".$_GET['orderId']."'";
    $rez = mysqli_query($conn,$sql);
    }


    header('Location: admin_dash.php');



}
else{
    //redirect to the login page
    header('Location: ../index.php'); }



?>