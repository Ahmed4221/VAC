<?php

    error_reporting(0);
    //making connection
    $conn = require '../connection.php';
    $result_message = "";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_POST["Submit"])){

        $firstname=$_POST['defaultRegisterFormFirstName'];
        $lastname=$_POST['defaultRegisterFormLastName'];
        $email=$_POST['defaultRegisterFormEmail'];
        $password=$_POST['defaultRegisterFormPassword'];

        if (isset($email) and isset($password) and isset($firstname) and isset($lastname) ) {
          
          //inserting new suer information in client table
          $sql = "INSERT INTO `Client`(`FirstName`, `LastName`, `Email`, `Password`) 
                  VALUES ('".$firstname."','".$lastname."','".$email."','".$password."')";
          if (mysqli_query($conn,$sql)) {
            //inserting new suer information in users table
            $sql = "INSERT INTO `Users`(`Email`, `Password`, `UserType`) 
                    VALUES ('".$email."','".$password."','Client')";
            mysqli_query($conn,$sql) or die(mysqli_error($conn));

            echo "<script>
            alert('Congratulations! Your user account is all set to go');
            window.location.href='../index.php';
            </script>";
          } else {
            $result_message= 'Sorry there was an error in signing up. Please try again';
            echo "<script type='text/javascript'>alert('$result_message');</script>";

          }
           
        
        }
   
  }

?>


<!DOCTYPE html>
<!-- saved from url=(0102)file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/Real%20project/sign_signup.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Client Signup</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./signup_page_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./signup_page_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./signup_page_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./signup_page_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./signup_page_files/style.css">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body>


  
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
Navbar -->

<div class="row mx-md-4">
    
<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-12 " style="
    display: inline-block;
">

<!-- Default form login -->

<!-- Default form login -->
<div style="height: 315px;width: 100%;margin-top: 110.25px;display: block;margin-bottom: 36px;">
<!-- Default form register -->
<form action="Client_Signup.php" method="post" class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="defaultRegisterFormEmail" class="form-control" placeholdermb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    
    
    

    
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block waves-effect waves-light" name="Submit" type="submit">Sign Up</button>

    
    

    
    
    
    

    <hr>

    <!-- Terms of service -->
    <p>Are you a 
        <b>Vendor</b> sign up 
        <a href="../vendor_module/vendor_signup.php" >here</a>

</p></form>
<!-- Default form register -->
</div>


    </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="./signup_page_files/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="./signup_page_files/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./signup_page_files/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="./signup_page_files/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>



</div>
    
  



<div class="hiddendiv common"></div></body></html>