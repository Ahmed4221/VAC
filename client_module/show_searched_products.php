
<!-- saved from url=(0083)file:///Users/rafayabbas/Documents/Personal/VAC/vendor_module/start_sale_page_1.htm -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>alert('$message');";
}


  $user = $_SESSION["UserEmail"];
  $conn = require '../connection.php';
  $getting_vendor_products_sql = "SELECT * FROM `Vendors_Products` where Vendor_id='".$user."' and Approved=1 ";
  $barcodes = [];
  $getting_vendor_products = mysqli_query($conn,$getting_vendor_products_sql);
  while($row = mysqli_fetch_assoc($getting_vendor_products))
  {
    $barcodes[] = $row['Barcode'];
  }
  
  }
  else{
      //redirect to the login page
      header('Location: ../index.php'); }

?&gt;

<!-- saved from url=(0069)file:///Users/rafayabbas/Documents/Personal/VAC/start_sale_page_1.htm -->

    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>See Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- flipbox css-->

    <link rel="stylesheet" href="./show_searched_products_files/flip_box.css">
    <link rel="shortcut icon" type="image/png" href="file:///Users/rafayabbas/Documents/Personal/srtdash-admin-dashboard-master/srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./show_searched_products_files/bootstrap.min.css">
    <link rel="stylesheet" href="./show_searched_products_files/font-awesome.min.css">
    <link rel="stylesheet" href="./show_searched_products_files/themify-icons.css">
    <link rel="stylesheet" href="./show_searched_products_files/metisMenu.css">
    <link rel="stylesheet" href="./show_searched_products_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./show_searched_products_files/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="./show_searched_products_files/export.css" type="text/css" media="all">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="./show_searched_products_files/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./show_searched_products_files/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./show_searched_products_files/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./show_searched_products_files/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./show_searched_products_files/typography.css">
    <link rel="stylesheet" href="./show_searched_products_files/default-css.css">
    <link rel="stylesheet" href="./show_searched_products_files/styles.css">
    <link rel="stylesheet" href="./show_searched_products_files/responsive.css">

    
    <!-- modernizr css -->
    <script src="./show_searched_products_files/modernizr-2.8.3.min.js"></script>

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
 <a class="navbar-brand" href="admin_dash.php">VAC</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="true" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="navbar-collapse collapse in show" id="navbarSupportedContent-333" aria-expanded="true" style="">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item active" style="
     width: 70px;
 ">
 <a class="nav-link waves-effect waves-light" href="admin_dash.htm">Home
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
 <a class="dropdown-item waves-effect waves-light" href="view_all_vendors.php">Order (In Progress)</a>
 <a class="dropdown-item waves-effect waves-light" href="view_vendor_requests.php">Order Sent For Confirmation</a>
  
 
 
 
 
  
 <a class="dropdown-item waves-effect waves-light" href="view_vendor_requests.php">Order Pending Confirmation</a><a class="dropdown-item waves-effect waves-light" href="view_vendor_requests.php">Placed Order Status</a></div>
 </li>
 
 
 
 
 
   
 
 <li class="nav-item">
 <a class="nav-link waves-effect waves-light" href="settings.htm">Sale</a>
 </li></ul>
 
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
  
    <!-- page container area start -->

    <div class="products-to-sale" style="
    margin: 2rem;
    background: white;
    padding: 4rem;">
    <div class="row justify-content-center">
       
      <div class="col-md-3 col-sm-6 col-10 mt-3 mb-3 ml-3 mr-3 d-flex justify-content-center" style="/* text-align: center; */align-items: center;align-content: center;/* background-image: url(&quot;./images/start_sale_product_dummy.jpg&quot;); *//* background-size: contain; */margin-top: 4rem !important;">
        <div class="flip-box" style=" border: 0;">
            <div class="flip-box-inner">
              <div class="flip-box-front" style="background-image: linear-gradient(0deg, rgba(37,167,173,0.6292892156862745) 0%, rgba(21,26,33,0.654499299719888) 50%, rgba(0,7,255,0.3603816526610645) 100%) , url('. $ImageToShow.');background-size: cover;border-radius: 17px;">
                <!-- Insert The product Name here-->
                <h2 style="margin-top: 28%;color: antiquewhite;">Name</h2>
              <h2 style="/* margin-top: 28%; */color: #fcfdff;font-size: 16px;">Price (php)</h2></div>
              <div class="flip-box-back" style="background-image: linear-gradient(0deg, rgba(125,125,125,0.7861519607843137) 0%, rgba(4,0,0,0.6460959383753502) 100%), url('.$ImageToShow.') ; background-size: cover;border-radius: 17px;">
                <!-- Insert barcode after  sign in the href -->
                <a href="file:///Users/rafayabbas/Documents/Personal/VAC/vendor_module/start_sale_page_2.php?barcode=%27.$barcodes[$counter].%27"> 
                    <button type="button" class="btn btn-success start-sale-button" style="
                    margin-top: 27%;
                    background: linear-gradient(90deg, rgba(27,215,228,1) 0%, rgba(6,0,159,1) 100%);
                    border: 0;
                    background: linear-gradient(to right, #52A0FD 0%, #00e2fa 80%, #00e2fa 100%);
                    color: whitesmoke;
                    border-radius: 25px;
                ">View Product</button>
                </a>
              </div>
            </div>
          </div>
    </div>
       
    </div>
    
    
</div>
    
        
    <!-- page container area end -->
  
    <!-- jquery latest version -->
    <script src="./show_searched_products_files/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./show_searched_products_files/popper.min.js"></script>
    <script src="./show_searched_products_files/bootstrap.min.js"></script>
    <script src="./show_searched_products_files/owl.carousel.min.js"></script>
    <script src="./show_searched_products_files/metisMenu.min.js"></script>
    <script src="./show_searched_products_files/jquery.slimscroll.min.js"></script>
    <script src="./show_searched_products_files/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="./show_searched_products_files/jquery.dataTables.js"></script>
    <script src="./show_searched_products_files/jquery.dataTables.min.js"></script>
    <script src="./show_searched_products_files/dataTables.bootstrap4.min.js"></script>
    <script src="./show_searched_products_files/dataTables.responsive.min.js"></script>
    <script src="./show_searched_products_files/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="./show_searched_products_files/plugins.js"></script>
    <script src="./show_searched_products_files/scripts.js"></script>
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
  


</body></html>