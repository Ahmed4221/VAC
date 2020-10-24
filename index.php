<?php
    error_reporting(0);
    //making connection
    $conn = require 'connection.php';
    // Check connection
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
            echo "User not found" ;}
          else { 
            
            $row = mysqli_fetch_row($result);
            $usertype =  $row[2]; // the usertype value
            $_SESSION["UserEmail"] = $email;
            $_SESSION["UserType"] = $usertype;
            header("Location: dashboard.php");
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
  <link rel="stylesheet" href="./signin_page_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./signin_page_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./signin_page_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./signin_page_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./signin_page_files/style.css">
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
.Navbar -->
</br></br></br></br></br></br></br></br></br></br></br>
<div class="row mx-md-4">
    
<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-sm-12 " style="
    display: inline-block;
">

<!-- Default form login -->
<div style="height: 392px;width: 100%;">
    
    <!-- Default form login -->
<form action="index.php" method="post" class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign in</p>

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
    <button class="btn btn-info btn-block my-4 waves-effect waves-light" name = "Submit" type="Submit">Sign in</button>



    <!-- Register -->
   
</form>
</div>
    <!-- Terms of service -->
    <p>Don't have an account 
        <b>Signup</b> here 
            <!-- Sign UP button -->
    <a href="Client_Signup.php"> 
    <button class="btn btn-info btn-block my-4 waves-effect waves-light" name = "Submit" type="Submit">Sign Up</button> 
    </a>

</p






<!-- Default form login -->



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



</div>
    
  



<div class="hiddendiv common"></div></body></html>