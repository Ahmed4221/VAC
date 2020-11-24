


<?php
session_start();
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {
    echo $_SESSION["UserEmail"], "    has logged in \n";
    echo "<br>";
    echo "Usertype is   : ",$_SESSION["UserType"];
}




?>

<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>

<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->

    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Place Order</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
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
  <a class="navbar-brand" href="client_dash.php">VAC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse in show" id="navbarSupportedContent-333" aria-expanded="true" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="
      width: 70px;
      ">
        <a class="nav-link waves-effect waves-light" href="client_dash.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item dropdown" style="
      width: 83px;
      ">
          <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
          width: 70px;
          ">Orders</a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item waves-effect waves-light" href="order_in_progress.php">Order (In Progress)</a>
            <a class="dropdown-item waves-effect waves-light" href="order_sent_for_confirmation.php">Order Sent For Confirmation</a>
            <a class="dropdown-item waves-effect waves-light" href="order_pending_confirmation.php">Order Pending Confirmation</a>
            <a class="dropdown-item waves-effect waves-light" href="see_order_status.php">Placed Order Status</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="see_sale.php">Sale</a>
      </li>
    </ul>

    <a href="../logout.php" class="btn btn-info btn-lg" style="
        float: right;
        height: 39px;
        font-size: 13px;
        margin-top: 0.45%;
    ">
      <span class="glyphicon glyphicon-log-out"></span> Log out
    </a>
  </div>
</nav>

        

<!-- nav end -->

<!-- Products Start -->


<div class="my_custom_card">

  <div class="container" style="
    border-bottom: solid;
    padding-bottom: 36px;
    padding-top: 36px;
    border-bottom-color: #ffffff;
    border-bottom-width: 2px;
    border-bottom-style: groove;
">
   
    <div class="col-md-5">
      <img class="selected_image_container" src="./images/product_1.jpg">
    </div>
    <div class="col-md-7">
      <div class="single-product-details">
        <!-- Insert the product id as name (php)-->
        <h2 class="product_name"> Cocal Cola <label style="
          font-size: large;
      " class="product_brand"> Brand </label></h2>
        <p> <span class="product_price">300</span> $</p>
        <h6 style="display: inline-block;">Barcode : </h6>
          <label class="product_barcode">121312121</label>
          <h5> <span class="product_quantity_per_ctn">5</span> units per CTN </h5>
          <div class="number" style="
      margin-top: 19px;
  ">
  <h6 style="display: inline-block;">Quantity : </h6>
  <label class="product_quantity">8</label>
             </div>
         
        
          <button class="btn-grad" id="add_btn" onclick="edit_product(this)" style="margin-top:40px;
         margin: 10px;
      padding: 15px 45px;
      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      box-shadow: 0 0 20px #eee;
      border-radius: 31px;
      display: block;
      height: 3rem;
      margin-left: auto;
      margin-right: auto;
      border-color: #77A1D3;
      border-style: solid;
      padding-top: 4px;
      margin-left: 0;
      margin-right: 0;
      margin: 0;
      margin-top: 2rem;"> Edit Product </button>
          
          
  
        
        
        
        
        
      </div>
    </div>
  </div>

  <div class="container" style="
    border-bottom: solid;
    padding-bottom: 36px;
    padding-top: 36px;
    border-bottom-color: #ffffff;
    border-bottom-width: 2px;
    border-bottom-style: groove;
">
   
    <div class="col-md-5">
      <img class="selected_image_container" src="./images/product_1.jpg">
    </div>
    <div class="col-md-7">
      <div class="single-product-details">
        <!-- Insert the product id as name (php)-->
        <h2 class="product_name"> Cocal Cola <label style="
          font-size: large;
      " class="product_brand"> Brand </label></h2>
        <p> <span class="product_price">300</span> $</p>
        <h6 style="display: inline-block;">Barcode : </h6>
          <label class="product_barcode">121312121</label>
          <h5> <span class="product_quantity_per_ctn">5</span> units per CTN </h5>
          <div class="number" style="
      margin-top: 19px;
  ">
  <h6 style="display: inline-block;">Quantity : </h6>
  <label class="product_quantity">8</label>
             </div>
         
        
          <button class="btn-grad" id="add_btn" onclick="edit_product(this)" style="margin-top:40px;
         margin: 10px;
      padding: 15px 45px;
      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      box-shadow: 0 0 20px #eee;
      border-radius: 31px;
      display: block;
      height: 3rem;
      margin-left: auto;
      margin-right: auto;
      border-color: #77A1D3;
      border-style: solid;
      padding-top: 4px;
      margin-left: 0;
      margin-right: 0;
      margin: 0;
      margin-top: 2rem;"> Edit Product </button>
          
          
  
        
        
        
        
        
      </div>
    </div>
  </div>

  <div class="container" style="
    border-bottom: solid;
    padding-bottom: 36px;
    padding-top: 36px;
    border-bottom-color: #ffffff;
    border-bottom-width: 2px;
    border-bottom-style: groove;
">
   
    <div class="col-md-5">
      <img class="selected_image_container" src="./images/product_1.jpg">
    </div>
    <div class="col-md-7">
      <div class="single-product-details">
        <!-- Insert the product id as name (php)-->
        <h2 class="product_name"> Cocal Cola <label style="
          font-size: large;
      " class="product_brand"> Brand </label></h2>
        <p> <span class="product_price">300</span> $</p>
        <h6 style="display: inline-block;">Barcode : </h6>
          <label class="product_barcode">121312121</label>
          <h5> <span class="product_quantity_per_ctn">5</span> units per CTN </h5>
          <div class="number" style="
      margin-top: 19px;
  ">
  <h6 style="display: inline-block;">Quantity : </h6>
  <label class="product_quantity">8</label>
             </div>
         
        
          <button class="btn-grad" id="add_btn" onclick="edit_product(this)" style="margin-top:40px;
         margin: 10px;
      padding: 15px 45px;
      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      box-shadow: 0 0 20px #eee;
      border-radius: 31px;
      display: block;
      height: 3rem;
      margin-left: auto;
      margin-right: auto;
      border-color: #77A1D3;
      border-style: solid;
      padding-top: 4px;
      margin-left: 0;
      margin-right: 0;
      margin: 0;
      margin-top: 2rem;"> Edit Product </button>
          
          
  
        
        
        
        
        
      </div>
    </div>
  </div>
  
</div>
</div>




<!-- Product End -->





<!-- Place order Button -->
<div class= "my_custom_card">
  <div class = "container"> 
    <div class="row">
      
      <button class = "btn-grad" onclick = "place_order_clicked(this)"> Place Order </button>

    </div>
  </div>
</div> 


  <!-- Place Order Button End -->



<script>
  $( document ).ready(function() {
    edit_product = function(product) {
      var all_attributes = $(product).parent().children();
      var product_barcode = $(all_attributes).eq(3).text();
      var product_quantity = $(all_attributes).eq(5).children().eq(1).text();
      //console.clear();
      console.log(all_attributes);
      console.log("product barcode : " , product_barcode);
      console.log("product quantity : " , product_quantity);

      window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1))
        + "edit_product.php?" 
        + "&allowed_cbm=" + cbm
        + "&individual_cbm=" + individual_cbm
        + "&current_cbm=" + (current_cbm + individual_cbm*quantity)
        + "&container_selected=" + container_selected
        + "&quantity=" + quantity
        + "&product_id=" + product_id;
      }

    }
  })
</script>

<!--/.Navbar -->


<!-- Order Placed Script -->
<!-- <script>
  
   $(document).ready(function() {
    function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}
////////// Initializing Global Variables ///////////
container_selected = GetURLParameter("container_selected");

cbm = parseInt(GetURLParameter("allowed_cbm")); 
current_cbm = parseInt(GetURLParameter("current_cbm"));
individual_cbm = parseInt(GetURLParameter("individual_cbm"));
quantity = parseInt(GetURLParameter("quantity"));
product_id = GetURLParameter("product_id");

console.log(cbm , " " ,current_cbm , " " ,individual_cbm , " " , quantity ," " ,product_id, " ", container_selected);
//////////// Global Variables End /////////////////
    

 });

 </script>
<script>
  $(document).ready(function() {
    $("#confirm_button").click(function() {
      window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1))
        + "order_placed.php?" 
        + "&allowed_cbm=" + cbm
        + "&individual_cbm=" + individual_cbm
        + "&current_cbm=" + (current_cbm + individual_cbm*quantity)
        + "&container_selected=" + container_selected
        + "&quantity=" + quantity
        + "&product_id=" + product_id;
    })
  });
</script> -->
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
  
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
    

<!-- Footer  -->


</footer></body></html>