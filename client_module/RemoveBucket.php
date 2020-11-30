 


<?php
session_start();
$conn = require '../connection.php';
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {
    // echo $_SESSION["UserEmail"], "    has logged in \n";
    // echo "<br>";
    // echo "Usertype is   : ",$_SESSION["UserType"];
    $sql = "SELECT * FROM OrderInProgressItems WHERE ClientID =  '". $_SESSION["UserEmail"]."'  ";
    $rez = mysqli_query($conn,$sql);
    $followingdata = $rez->fetch_assoc();
    $OrderID = $followingdata["OrderID"];

    $sql2 = "DELETE FROM `OrderInProgressCBM` WHERE OrderID = '$OrderID' ";
    $sql3 = "DELETE FROM `OrderInProgressItems` WHERE OrderID = '$OrderID' ";
    mysqli_query($conn,$sql2);
    mysqli_query($conn,$sql3);
    header("location:client_dash.php");

  }




?>