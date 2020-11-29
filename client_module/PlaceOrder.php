 


<?php
session_start();
$conn = require '../connection.php';
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {

    //getting order id firrst
    $sql = "SELECT * FROM OrderInProgressCBM WHERE ClientID = '".$_SESSION['UserEmail']."' ";
    $rez = mysqli_query($conn,$sql);
    $followingdata = $rez->fetch_assoc();
    $OrderID = $followingdata['OrderID'];


    //insering in the main table first
    $sql = "INSERT INTO `PlacedOrders`(`OrderID`, `ClientID`) VALUES ( '.$OrderID.','".$_SESSION['UserEmail']."') ";
    $rez = mysqli_query($conn,$sql);

    //inserting into the details table
    $sql = "SELECT * FROM `OrderInProgressItems` WHERE OrderID = '$OrderID' ";
    $re = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($re)){

        $innerSql = "INSERT INTO `OrdersPlacedDetails`(`OrderID`, `VendorID`, `ClientID`, `Barcode`, `Quantity`, `Price`, `VendorApproved`, `Started`) 
        VALUES ('".$row['OrderID']."',
                '".$row['VendorID']."',
                '".$row['ClientID']."',
                '".$row['Barcode']."',
                '".$row['Quantity']."',
                '".$row['Price']."',
                0,
                0)";
        mysqli_query($conn,$innerSql);

    }


    //deleting records from temp database
    $sql = "DELETE FROM OrderInProgressCBM WHERE ClientID = '".$_SESSION['UserEmail']."' ";
    $sql2 = "DELETE FROM OrderInProgressItems WHERE ClientID = '".$_SESSION['UserEmail']."' ";
    mysqli_query($conn, $sql);
    mysqli_query($conn,$sql2);

    header('Location: client_dash.php');


  }




?>