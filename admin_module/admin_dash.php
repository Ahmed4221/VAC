<?php
session_start();

if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="admin")) {
    // echo $_SESSION["UserEmail"], "    has logged in \n";
    // echo "<br>";
    // echo "Usertype is   : ",$_SESSION["UserType"];
}
else{
    //redirect to the login page
    header('Location: ../index.php'); }



?>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>

<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->

    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="file:///Users/rafayabbas/Documents/Personal/srtdash-admin-dashboard-master/srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./admin_dash_files/bootstrap.min.css">
    <link rel="stylesheet" href="./admin_dash_files/font-awesome.min.css">
    <link rel="stylesheet" href="./admin_dash_files/themify-icons.css">
    <link rel="stylesheet" href="./admin_dash_files/metisMenu.css">
    <link rel="stylesheet" href="./admin_dash_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./admin_dash_files/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="./admin_dash_files/export.css" type="text/css" media="all">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="./admin_dash_files/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./admin_dash_files/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./admin_dash_files/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./admin_dash_files/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./admin_dash_files/typography.css">
    <link rel="stylesheet" href="./admin_dash_files/default-css.css">
    <link rel="stylesheet" href="./admin_dash_files/styles.css">
    <link rel="stylesheet" href="./admin_dash_files/responsive.css">

    <!-- My Custom Css -->
    <link rel="stylesheet" href="./Common_files/custom_css_all.css">
    
    <!-- modernizr css -->
    <script src="./admin_dash_files/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Footer files -->
    



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
<a class="navbar-brand" href="admin_dash.php">VAC</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link waves-effect waves-light" href="admin_dash.php">Home
<span class="sr-only">(current)</span>
</a>
</li>

<li class="nav-item dropdown" style="
    border-style: groove;
    border-color: #315cd6;
    border-width: 1px;
    border-radius: 10px;
    margin-right: 10px;
">
<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
    display: inline-block;
">Vendors</a>
<span class="badge badge-danger" style="
    margin-left: -5px;
    position: relative;
    margin-right: 5px;
">New</span>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item waves-effect waves-light" href="view_all_vendors.php">All Vendors</a>
<a class="dropdown-item waves-effect waves-light" href="view_vendor_requests.php">Approval Requests</a>
 




 
</div>
</li>



<li class="nav-item dropdown" style="
    border-style: groove;
    border-color: #315cd6;
    border-width: 1px;
    border-radius: 10px;
    margin-right: 10px;
">
<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
    display: inline-block;
">Clients</a>
<span class="badge badge-danger" style="
    margin-left: -5px;
    position: relative;
    margin-right: 5px;
">New</span>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item waves-effect waves-light" href="view_all_clients.php">All Clients</a>
<a class="dropdown-item waves-effect waves-light" href="view_client_requests.php">Client Approval Requests</a>
 




 
</div>
</li><li class="nav-item dropdown" style="
    border-style: groove;
    border-color: #315cd6;
    border-width: 1px;
    border-radius: 10px;
    margin-right: 10px;
">
<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
    display: inline-block;
">Products</a>
<span class="badge badge-danger" style="
    margin-left: -5px;
    position: relative;
    margin-right: 5px;
">New</span>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item waves-effect waves-light" href="view_all_products.php">All Products</a>
<a class="dropdown-item waves-effect waves-light" href="view_vendor_product_requests.php">Prodcut Approvals</a>
 

 


 
</div>
</li><li class="nav-item dropdown" style="
    border-style: groove;
    border-color: #315cd6;
    border-width: 1px;
    border-radius: 10px;
    margin-right: 10px;
">
<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
    display: inline-block;
">Sale</a>
<span class="badge badge-danger" style="
    margin-left: -5px;
    position: relative;
    margin-right: 5px;
">New</span>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item waves-effect waves-light" href="view_all_sales.php">Current Sales</a>
<a class="dropdown-item waves-effect waves-light" href="view_sale_requests.php">Sale Approval Requests</a>
 


</div>
</li><li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item waves-effect waves-light" href="settings.php">Add Value Metric</a>





 
</div>
</li>
<span>
<a class="nav-link waves-effect waves-light" href="see_order_status.php" style = "display:inline-block;">Shipment
  </a>
  <span class="badge badge-danger" style="
  margin-left: -1px;
  position: relative;
  margin-right: 5px;
  height: 17px;
  margin-top: 10px;
">New</span>

</span>



</ul>
<ul class="navbar-nav ml-auto nav-flex-icons">









</ul>
<a href="../logout.php" class="btn btn-info btn-lg">
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
      <h4 class="card-title">Product Approvals</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="view_vendor_product_requests.php"><button type="button" class="btn btn-light-blue btn-md">Approve</button></a>

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
      <h4 class="card-title">Client Approvals</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="view_client_requests.php"><button type="button" class="btn btn-light-blue btn-md">Approve</button></a>

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
      <h4 class="card-title">Vendor Approvals</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
        card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a href="view_vendor_requests.php"><button type="button" class="btn btn-light-blue btn-md">Approve</button></a>

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
      <a href="see_order_status.php">
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
      <a href="see_order_status.php"><button type="button" class="btn btn-light-blue btn-md">See Details</button></a>

    </div>

  </div>
  <!-- Card -->
</div>
</div>


<!--/.Navbar -->


 




<!-- Footer -->

<footer class="container-fluid bg-grey py-5" style="
    background: aliceblue;
">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 ">
                 <div class="logo-part" style="
    text-align: center;
">
    <h1 style="
    text-transform: uppercase;
    background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 6vw;
    letter-spacing: 20px;
"> VAC </h1>
                    <p style="
    color: #36c0c8;
    text-align: center;
">934 Khudadaad Heigths, ISB 19406</p>
                    <p>Get anything, no matter how much, anywhere.</p>
                 </div>
              </div>
              
           </div>
        </div>
        
     </div>
  </div>
  
<!-- Script to Show RED MARKERS Around Latest Notifications -->
<script>

$( document ).ready(function(){
  // Enter the following variables 1 or 0 through PHP: 1 if show red around nav against relevant tab, 0 if not
  vendor_update = 0;
  client_update = 0;
  product_update = 1;
  sale_update = 0;
  shipment_update = 0;
  my_updates_arr = [vendor_update,client_update,product_update,sale_update,shipment_update];

  hide_new_badge = function(my_div){
    console.log(my_div);
    $(my_div).css('border', 'none');
    $(my_div).children().eq(1).css('display', 'none');
    

  }
  console.log("updates array : ", my_updates_arr);
  vendor = $("#navbarSupportedContent-333 > ul.navbar-nav.mr-auto > li:nth-child(2)");
  client = $("#navbarSupportedContent-333 > ul.navbar-nav.mr-auto > li:nth-child(3)");
  product = $("#navbarSupportedContent-333 > ul.navbar-nav.mr-auto > li:nth-child(4)");
  sale = $("#navbarSupportedContent-333 > ul.navbar-nav.mr-auto > li:nth-child(5)");
  shipment = $("#navbarSupportedContent-333 > ul.navbar-nav.mr-auto > span");
  my_updates_arr_2 = [vendor,client,product,sale,shipment];

  for (var i = 0;i < 5;i++) {
    if(my_updates_arr[i] == 0)
    {
      hide_new_badge(my_updates_arr_2[i]);
    }
  }

 
})

</script>

  <!-- Footer End -->
  <!-- jquery latest version -->
  <script src="./admin_dash_files/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="./admin_dash_files/popper.min.js"></script>
  <script src="./admin_dash_files/bootstrap.min.js"></script>
  <script src="./admin_dash_files/owl.carousel.min.js"></script>
  <script src="./admin_dash_files/metisMenu.min.js"></script>
  <script src="./admin_dash_files/jquery.slimscroll.min.js"></script>
  <script src="./admin_dash_files/jquery.slicknav.min.js"></script>

  <!-- Start datatable js -->
  <script src="./admin_dash_files/jquery.dataTables.js"></script>
  <script src="./admin_dash_files/jquery.dataTables.min.js"></script>
  <script src="./admin_dash_files/dataTables.bootstrap4.min.js"></script>
  <script src="./admin_dash_files/dataTables.responsive.min.js"></script>
  <script src="./admin_dash_files/responsive.bootstrap.min.js"></script>
  <!-- others plugins -->
  <script src="./admin_dash_files/plugins.js"></script>
  <script src="./admin_dash_files/scripts.js"></script>

  <!-- Script for adding button and doing action on Status -->
  <!-- <script>
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
  </script> -->


<!-- Footer  -->


</footer></body></html>