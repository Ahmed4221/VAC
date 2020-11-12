<?php
session_start();

if($_SESSION['loggedIn']){
    $conn = require 'connection.php';
    $user = $_SESSION["UserEmail"];
    $barcode = $_GET['barcode'];
    $discount = $_GET['saleDiscount'];
    $message = "";
  //============================MAKING UPDATED PRICE ====================================
    
    $gettingPrice = "SELECT * FROM `Vendors_Products` WHERE Barcode = '".$barcode."' and Vendor_id = '".$user."'";
    $res = mysqli_query($conn,$gettingPrice);
    $followingdata = $res->fetch_assoc();
    $price = $followingdata['price_per_ctn'];
    $updatedPrice = $price / 100;
    $updatedPrice = $updatedPrice*$discount;
    $updatedPrice = $price - $updatedPrice;

  
  //===================================CHECKING IF SALE ALREADY EXIST ON THE SAME ITEM FROM SAME VENDOR   =========================
  $checkingPreviousSale = "SELECT * FROM `SaleOnProducts` where  Vendor_id = '".$user."' and
                                                                  Barcode = '".$barcode."' and
                                                                  (CURDATE() between StartDate and EndDate ) ";
  $res2 = mysqli_query($conn,$checkingPreviousSale);
  if (mysqli_num_rows($res2)>0){
    $message = "Either there is already a request for this sale or you are in the middle of sale for the same product";

  }
  else{
  //=======================================ADDING IN SALES========================================================
  $today = $date = date('Y-m-d H:i:s');
  $numberOfDayes = $_GET['daysOfSale'];
  $numberOfDayes = ' + '.(string)$numberOfDayes.' days';
  $endDate =  date('Y-m-d H:i:s', strtotime($today.$numberOfDayes));
  $saleStartQuery = "INSERT INTO `SaleOnProducts`(`Vendor_id`, `Barcode`, `StartDate`, `EndDate`, `DiscountPercentage`, `Approved`,`UpdatedAmount`) 
                    VALUES ('".$user."',
                            '".$barcode."',
                            '".$today."',
                            '".$endDate."',
                            '".$discount."',
                            '0',
                            '".$updatedPrice."')";
    if(mysqli_query($conn,$saleStartQuery)){                         
    $message = "The sale for ".(string)$discount." % has been started on item barcode ".(string)$barcode;}
    else{
        echo $saleStartQuery;
    }


}

    header("Location:start_sale_page_1.php?SaleSetMessage={$message}");
  
  
  
  }
  else{
      //redirect to the login page
      header('Location: ../index.php'); }

?>