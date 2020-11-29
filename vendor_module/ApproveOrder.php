<?php
session_start();

if($_SESSION['loggedIn']){
$user = $_SESSION["UserEmail"];
$conn = require '../connection.php';
$rowid  = $_GET['rowID'];
$sql = "UPDATE `OrdersPlacedDetails` SET VendorApproved = 1 WHERE RowNumber = '$rowid' ";
mysqli_query($conn,$sql);
header('Location: vendor_dash.php');

}
else{
    //redirect to the login page
    header('Location: ../index.php'); }
?>