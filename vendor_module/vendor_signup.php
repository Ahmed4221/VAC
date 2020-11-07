<?php
    error_reporting(0);
    //making connection
    $conn = require 'connection.php';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST["Submit"])){

        $name =$_POST['Name']; 
        $email=$_POST['defaultSubscriptionFormEmail'];
        $password=$_POST['passwdInput'];
        $trade =$_FILES["TradeLisenceImage"]["name"];
        $vat =$_FILES["VATImage"]["name"];
        $passport =$_FILES["PassportImage"]["name"];
        if (isset($email) and isset($password) and isset($trade) and isset($vat) and isset($passport)  ) {
          
          $trade = $email."_TradeLisence_".$trade;
          $vat = $email."_VAT_".$vat;
          $passport = $email."_PASSPORT_".$passport;
          $counter = 0;
          $destination_path = getcwd().DIRECTORY_SEPARATOR;
          $destination_path = $destination_path.="uploads/";

          $passport_target_path = $destination_path . basename($passport);
          if (move_uploaded_file($_FILES['PassportImage']['tmp_name'], $passport_target_path)){
            $counter += 1;
          }

          $vat_target_path = $destination_path . basename($vat);
          if (move_uploaded_file($_FILES['VATImage']['tmp_name'], $vat_target_path)){
            $counter += 1;
          }
          
          $trade_target_path = $destination_path . basename($trade);
          if (move_uploaded_file($_FILES['TradeLisenceImage']['tmp_name'], $trade_target_path)){
            $counter += 1;
          }

            //inserting new vendor information
            $sql = "INSERT INTO `Vendor`(`Name`, `Email`, `Password`, `Trade_Lisence`, `VATForm`, `Passport/Emirateid`, `Approved`)  
            VALUES ('".$name."','".$email."','".$password."','".$trade_target_path."',
                    '".$vat_target_path."','".$passport_target_path."',0)";
        
            if (mysqli_query($conn,$sql)) {
              $counter +=1 ;

            } 
            if ($counter==4){
              echo "<script>
              alert('Congratulations! Your Account has been submitted for approval successfully');
              window.location.href='index.php';
              </script>";
            }
            else{
              $result_message= 'Sorry there was an error in signing up as vendor. Please try again';
              echo "<script type='text/javascript'>alert('$result_message');</script>";
              $sql = "DELETE FROM `Vendor` WHERE `Email`='".$email."' ";
              unlink($vat_target_path);
              unlink($trade_target_path);
              unlink($passport_target_path);
            }


          
        
        }
   
  }

?>
<!DOCTYPE html>
<!-- saved from url=(0102)file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/Real%20project/sign_signup.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Vendor Signup</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./vendor_signup_1_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./vendor_signup_1_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./vendor_signup_1_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./vendor_signup_1_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./vendor_signup_1_files/style.css">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body>
</br></br></br></br></br>
  <!-- Start your project here-->  
  <!--Navbar 
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="
    background-color: #33b5e5 !important;
    margin-bottom: 70px !important;
">
  <a class="navbar-brand" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Action</a>
          <a class="dropdown-item waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Another action</a>
          <a class="dropdown-item waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      
      
    </ul>
  </div>
</nav>
r -->


    <!-- Material input -->
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
<form action=" vendor_signup.php" =""="" method="post" enctype="multipart/form-data" style="width: 100%;  ">

    <div class="text-center">
        <p class="h4 mb-4">Vendor SignUp</p>

        <p>Join our team, and reach the client</p>

        
    </div>

    <input type="text" name="Name" id="defaultSubscriptionFormName" name="defaultSubscriptionFormName" class="form-control mb-4" placeholder="Name">

    <input type="email" id="defaultSubscriptionFormEmail" name="defaultSubscriptionFormEmail"  class="form-control mb-4" placeholder="E-mail">

    <input type="password" name="passwdInput" id="passwdInput" class="form-control mb-4" placeholder="Password">

    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="TradeLisenceImage" id="fileInput" aria-describedby="fileInput">
            <label class="custom-file-label" for="fileInput">Trade License</label>
        </div>
    </div>

    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="VATImage" id="fileInput" aria-describedby="fileInput">
            <label class="custom-file-label" for="fileInput">VAT Registration Form</label>
        </div>
    </div>
  
    <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileInput" name="PassportImage" aria-describedby="fileInput">
                <label class="custom-file-label" for="fileInput">Passport / Emirates ID</label>
            </div>
        </div>
  
  

    
    <button class="btn btn-info btn-block" name = "Submit" type="submit">Submit for Approval</button>


</form></div></div>
  



<div class="hiddendiv common"></div></body></html>