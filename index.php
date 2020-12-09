<?php

    error_reporting(0);
    //making connection
    $conn = require 'connection.php';
    // Check connection
    require 'common_files/functions.php';
    RevertSalesProducts();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST["Submit"])){

        $email=$_POST['defaultLoginFormEmail'];
        $password=$_POST['defaultLoginFormPassword'];
        if (isset($email) and isset($password) ) {
          
          //checking if the user exists
          $sql = "SELECT * from `Users` where Email='".$email."' and Password ='".$password."' ";
          $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)==0) {
            
            #checking if vendor account is under set-up
            $sql_vendorchange = "SELECT * from `Vendor` where Email='".$email."' and Password ='".$password."' and Approved=-1 ";
            $result = mysqli_query($conn,$sql_vendorchange);
            if (mysqli_num_rows($result)>0){
              session_start();
              $_SESSION["UserEmail"] = $email;
              $_SESSION['TemporaryloggedIn'] = true;
              header("Location: vendor_module/suggested_changes_vendor_side.php");
            }

            #checking if client account is during set-up
            $sql_vendorchange = "SELECT * from `Client` where Email='".$email."' and Password ='".$password."' and Approved=-1 ";
            $result = mysqli_query($conn,$sql_vendorchange);
            if (mysqli_num_rows($result)>0){
              session_start();
              $_SESSION["UserEmail"] = $email;
              $_SESSION['ClientTemporaryloggedIn'] = true;
              header("Location: client_module/suggested_changes_client_side.php");
            }


            $msg = "User not found" ;
            echo "<script type='text/javascript'>alert('$msg');</script>";}
          else { 

            $row = mysqli_fetch_row($result);
            $usertype =  $row[2]; // the usertype value
            session_start();
            $_SESSION["UserEmail"] = $email;
            $_SESSION["UserType"] = $usertype;
            $_SESSION['loggedIn'] = true;
            if ($usertype == "Client"){ 
            header("Location: client_module/client_dash.php");}
            if ($usertype == "vendor"){ 
              header("Location: vendor_module/vendor_dash.php");}
            if ($usertype == "admin"){ 
              header("Location: admin_module/admin_dash.php");}

          }
        
        }
   
  }

?>
<!DOCTYPE html>
<!-- saved from url=(0102)file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/Real%20project/sign_signup.htm -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Index</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./common_files/signin_page_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./common_files/signin_page_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./common_files/signin_page_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./common_files/signin_page_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./common_files/signin_page_files/style.css">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body>

  <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="
  background-color: #33b5e5 !important;
  margin-bottom: 70px !important;
  height: 61px;
  background: linear-gradient(90deg, rgba(34,185,167,1) 0%, rgba(0,32,60,1) 48%, rgba(35,35,195,1) 100%);
  ">
  <h1 class="navbar-brand" href="#" style="
  font-family: initial;
  font-size: xx-large;
  margin-left: auto;
  margin-right: auto;
  font-weight: 800;
  color: white;
  ">Welcome to Export House</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  
  </nav>
</br></br></br></br></br></br></br></br></br></br></br>
<div class="row mx-md-4" style="
margin-top: -12rem;
">

<div class="col-lg-4 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1" style="
display: inline-block;
">

<!-- Default form login -->
<div style="height: 392px;width: 100%;">

<!-- Default form login -->
<form action="index.php" method="post" class="text-center border border-light p-5">

<p class="h4 mb-4">Client Sign in</p>

<!-- Email -->
<input type="email" name="defaultLoginFormEmail" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" name="defaultLoginFormPassword" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4 waves-effect waves-light" name="Submit" type="Submit">Sign in</button>



<!-- Register -->

</form>
</div>
<!-- Terms of service -->
<p>Don't have an account 
    <b>Signup</b> here 
        <!-- Sign UP button -->
<a href="client_module/Client_Signup.php"> 
<button class="btn btn-info btn-block my-4 waves-effect waves-light" name="Submit" type="Submit">Sign Up</button> 
</a>

</p>



</div>
<!-- End your project here-->

<!-- jQuery -->
<script type="text/javascript" src="./signin_page_files/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="./signin_page_files/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="./signin_page_files/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="./signin_page_files/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>



<div class="col-lg-4 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1" style="
display: inline-block;
">

<!-- Default form login -->
<div style="height: 392px;width: 100%;">

<!-- Default form login -->
<form action="index.php" method="post" class="text-center border border-light p-5">

<p class="h4 mb-4">Vendor Sign In</p>

<!-- Email -->
<input type="email" name="defaultLoginFormEmail" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" name="defaultLoginFormPassword" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4 waves-effect waves-light" name="Submit" type="Submit">Sign in</button>



<!-- Register -->

</form>
</div>
<!-- Terms of service -->
<p>Don't have an account 
    <b>Signup</b> here 
        <!-- Sign UP button -->
<a href="vendor_module/vendor_signup.php"> 
<button class="btn btn-info btn-block my-4 waves-effect waves-light" name="Submit" type="Submit">Sign Up</button> 
</a>

</p>



</div></div>
    
  



<div class="hiddendiv common"></div></body></html>