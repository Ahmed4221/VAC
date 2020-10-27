<?php
session_start();

if($_SESSION['loggedIn']){
    // echo $_SESSION["UserEmail"], "    has logged in \n";
    // echo "<br>";
    // echo "Usertype is   : ",$_SESSION["UserType"];
}
else{
    //redirect to the login page
    header('Location: index.php'); }



?>

<!DOCTYPE html>
<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.htm -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
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
  <a class="nav-link waves-effect waves-light" href="vendor_dash.htm">Home
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
      
  </div>
</li>



<li class="nav-item">
  <a class="nav-link waves-effect waves-light" href="see_all_orders.php">Orders
    
  </a>
</li></ul>
<ul class="navbar-nav ml-auto nav-flex-icons">



</ul>
  <a href="logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Log out
      </a>
</div>
</nav>

<!-- nav end -->

<div class="row row-cols-1 row-cols-md-2" style="
  width: 70%;
  margin: auto;
  margin-top: 6rem;
">
<div class="col col-md-6 mb-4">
  <!-- Card -->
  <div class="card " style="
  width: 65%;
  margin: auto;
">

    <!--Card image-->
    <div class="view overlay" style="
  border-radius: 12px;
">
      <img class="card-img-top" src="./images/add_product_homepage.png" alt="Card image cap" style="
  border-radius: 15px;
  height: 15vw;
  width: auto;
  margin-left: 15%;
">
      <a href="add_product_page.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Add a Product</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="add_product_page.php"><button type="button" class="btn btn-light-blue btn-md">Add Product</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
<div class="col col-md-6 mb-4">
  <!-- Card -->
  <div class="card" style="
  width: 65%;
  margin: auto;
">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="./images/see_orders_homepage.jpeg" alt="Card image cap" style="
  border-radius: 15px;
  height: 15vw;
  width: auto;
  margin-left: 15%;
">
      <a href="see_all_orders.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">See all Orders</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="see_all_orders.php"><button type="button" class="btn btn-light-blue btn-md">See Orders</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
<div class="col col-md-6 mb-4">
  <!-- Card -->
  <div class="card" style="
  width: 65%;
  margin: auto;
">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="./images/update_stock_homepage.png" alt="Card image cap" style="
  border-radius: 15px;
  height: 15vw;
  width: auto;
  margin-left: 15%;
">
      <a href="update_product_quantity.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Update your Stock</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="update_product_quantity.php"><button type="button" class="btn btn-light-blue btn-md">Update</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
<div class="col col-md-6 mb-4">
  <!-- Card -->
  <div class="card" style="
  width: 65%;
  margin: auto;
">

    <!--Card image-->
    <div class="view overlay" style="
">
      <img class="card-img-top" src="./images/shipment_homepage.svg" alt="Card image cap" style="
  border-radius: 15px;
  height: 15vw;
  width: auto;
  margin-left: 15%;
">
      <a href="add_shipment_detail.php">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Shipment Details</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="add_shipment_detail.php"><button type="button" class="btn btn-light-blue btn-md">See Details</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
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

      console.log(document.getElementById("order_status").innerText);
      var status = document.getElementById("order_status").innerText;
      var status_container = document.getElementById("order_status_container").innerHTML;
      if(status == "Pending Vendor Approval")
      {
          status_container += '<form action="#" method="post" style="DISPLAY: INLINE-BLOCK;"><button type="submit" value ="approve" name="approve_btn" class="btn btn-outline-success waves-effect" style="margin-left: 30px;margin-right: 30px;">Approve</button>';
          status_container += '<button type="submit" value = "disapprove" name="disapprove_btn" class="btn btn-outline-danger waves-effect">Disapprove</button> </form>';
          
      }
      else if(status == "Pending Client Confirmation")
      {
          
      }
      else if(status == "Pending Shipment Update")
      {
          status_container += '<form action="#" method="post" style="DISPLAY: INLINE-BLOCK;" ><button type="submit" value="add_shipment" name="add_shipment_btn" class="btn btn-outline-primary waves-effect" style="margin-left: 30px;margin-right: 30px;" >Add Shipment Details</button> </form>';
      }
      document.getElementById("order_status_container").innerHTML = status_container;
  });
  </script>

</body></html>