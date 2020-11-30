<?php
session_start();

if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="admin" or $_SESSION["UserType"]=="vendor")) {
    // echo $_SESSION["UserEmail"], "    has logged in \n";
    // echo "<br>";
    // echo "Usertype is   : ",$_SESSION["UserType"];
    $conn = require '../connection.php';
    $sql = "SELECT * FROM `OrderTracking` WHERE OrderID = '".$_GET['orderID']."'";
    $rez = mysqli_query($conn,$sql);
    $followingdata = $rez->fetch_assoc();
    $CurrentStatus = $followingdata['Status'];
}
else{
    //redirect to the login page
    header('Location: ../index.php'); }



?>

<!DOCTYPE html>
<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UPDATE - TRACKING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="file:///Users/rafayabbas/Documents/Personal/srtdash-admin-dashboard-master/srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./vendor_dash_files/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor_dash_files/font-awesome.min.css">
    <link rel="stylesheet" href="./vendor_dash_files/themify-icons.css">
    <link rel="stylesheet" href="./vendor_dash_files/metisMenu.css">
    <link rel="stylesheet" href="./vendor_dash_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor_dash_files/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="./vendor_dash_files/export.css" type="text/css" media="all">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="./vendor_dash_files/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./vendor_dash_files/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor_dash_files/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor_dash_files/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./vendor_dash_files/typography.css">
    <link rel="stylesheet" href="./vendor_dash_files/default-css.css">
    <link rel="stylesheet" href="./vendor_dash_files/styles.css">
    <link rel="stylesheet" href="./vendor_dash_files/responsive.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="./custom_css_vendor/shipment_status.css">
    <!-- modernizr css -->
    <script src="./vendor_dash_files/modernizr-2.8.3.min.js"></script>

    
</head>

<body>

  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="
       background-color: #33b5e5 !important;
       /* margin-bottom: 70px !important; */
       background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
       background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
       background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
       background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
       background-image: linear-gradient(60deg, #3d3393 0%, #2b76b9 37%, #2cacd1 65%, #35eb93 100%);
       ">
<a class="navbar-brand" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">VAC</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
  <a class="nav-link waves-effect waves-light" href="vendor_dash.php">Home
    <span class="sr-only">(current)</span>
  </a>
</li>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Products
  </a>
  <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
    <a class="dropdown-item waves-effect waves-light" href="see_all_products.php">See All Products</a>
    <a class="dropdown-item waves-effect waves-light" href="add_product_page.php">Add a Product</a>
      
    <a class="dropdown-item waves-effect waves-light" href="add_products_bulk_page.php">Add Products in Bulk</a>
    <a class="dropdown-item waves-effect waves-light" href="vendor_product_status.php">New Product Status</a>
    <a class="dropdown-item waves-effect waves-light" href="update_product_quantity.php">Update Stock of Products</a>
    <a class="dropdown-item waves-effect waves-light" href="start_sale_page_1.php">Start Sale</a>
      
  </div>
</li>



<li class="nav-item">
  <a class="nav-link waves-effect waves-light" href="see_all_orders.php">Orders
    
  </a>
</li></ul>
<ul class="navbar-nav ml-auto nav-flex-icons">



</ul>
  <a href="../logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Log out
      </a>
</div>
</nav>

<!-- nav end -->

<div class="container" style="
    margin-left: 0;
    margin-right: 0;
">
  <article class="card" style="
    width: 147%;
    margin-left: 2vh;
">
      <header class="card-header"> My Orders / Tracking </header>
      <div class="card-body">
          <h6>Order ID: <span id="order_id">123123123</span></h6>
          
          <div class="track">
              <div class="step active">
                <span class="icon">
                    <i class="fa fa-check" style="margin-top: 28%;"></i> 
                </span> 
                <span class="text">Order confirmed</span> 
              </div>
              <div class="step" style="
"> 
                <span class="text" style="
    top: -32px;
    position: relative;
">Order being processed</span>
                <span class="icon" style="
    top: -32px;
"> 
                  <i class="fa fa-user" style="margin-top: 28%;"></i> 
                </span>
              </div>
              <div class="step"> 
                <span class="icon" style=""> 
                  <i class="fa fa-truck" style="margin-top: 28%;"></i> 
                </span> 
                <span class="text">Dispatched to Central Warehouse</span> 
              </div>
              <div class="step"> 
                <span class="text" style="
    top: -32px;
    position: relative;
">Received at Warehouse</span> 
                <span class="icon" style="
    top: -32px;
    position: relative;
"> 
                  <i class="fa fa-box" style="margin-top: 28%;"></i> 
                </span>
              </div>
              <div class="step"> 
                <span class="icon"> 
                  <i class="fa fa-box" style="margin-top: 28%;"></i> 
                </span> 
                <span class="text">Shipped From Warehouse</span> 
              </div>
              <div class="step"> 
                <span class="text" style="
    top: -32px;
    position: relative;
">Received</span> 
                <span class="icon" style="
    top: -32px;
    position: relative;
"> 
                  <i class="fa fa-box" style="margin-top: 28%;"></i> 
                </span> 
                
              </div>
          </div>
          <hr>
          
          
          <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
    <label style="
    margin-left: 26%;
"> Update Status </label>
<select id="change_shipment_status">
<option value="1">Order Confirmed</option>
  <option value="2">Order Being Processed</option>
  <option value="3">Dispatched To Central Warehouse</option>
</select>
    <button class="btn btn-success" href="#" style="
    float: right;
" onclick="update_status()">Update</button>
      </div>
  </article>
</div>
<!--/.Navbar -->

  <!-- page container area start -->
  
  <!-- page container area end -->
  <!-- offset area start -->
  
  <!-- offset area end -->
  <!-- jquery latest version -->
  <script src="./vendor_dash_files/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="./vendor_dash_files/popper.min.js"></script>
  <script src="./vendor_dash_files/bootstrap.min.js"></script>
  <script src="./vendor_dash_files/owl.carousel.min.js"></script>
  <script src="./vendor_dash_files/metisMenu.min.js"></script>
  <script src="./vendor_dash_files/jquery.slimscroll.min.js"></script>
  <script src="./vendor_dash_files/jquery.slicknav.min.js"></script>

  <!-- Start datatable js -->
  <script src="./vendor_dash_files/jquery.dataTables.js"></script>
  <script src="./vendor_dash_files/jquery.dataTables.min.js"></script>
  <script src="./vendor_dash_files/dataTables.bootstrap4.min.js"></script>
  <script src="./vendor_dash_files/dataTables.responsive.min.js"></script>
  <script src="./vendor_dash_files/responsive.bootstrap.min.js"></script>
  <!-- others plugins -->
  <script src="./vendor_dash_files/plugins.js"></script>
  <script src="./vendor_dash_files/scripts.js"></script>

  <!-- Script for adding button and doing action on Status -->
  <script>
      $( document ).ready(function() {
  console.log( "ready!" );

      shipment_status = "<?php echo $CurrentStatus ?>";
      order_id = "<?php echo $_GET['orderID'] ?>";
      $('select option[value="'+shipment_status+'"]').attr("selected",true);
      $("#order_id").text( order_id );
      adjust_shipment_status = function(status_index) {
        $(".track").children().removeClass("active");
        let my_classes = $(".track").children();
        for (let i = 0; i < status_index; i++) {
          my_classes.eq(i).addClass("active");
        }
      }

      adjust_shipment_status(shipment_status);

      $("#change_shipment_status").change(function() {
        shipment_status = parseInt( $(this).children("option:selected").val());
        adjust_shipment_status(shipment_status);


        
      })
      barcode = "<?php echo $_GET['barcode'] ?>";
      update_status = function() {
        window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) + "UpdateShipmentStatus.php?orderId=" + order_id + "&shipment_status=" + shipment_status+ "&barcode="+ barcode;
   
      }
  });
  </script>

</body></html>