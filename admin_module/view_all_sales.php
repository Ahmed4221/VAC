<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';
        //   echo "connection made";
        $sql = "SELECT * FROM `SaleOnProducts` WHERE `Approved` = 1 AND EndDate >= CURDATE()";
        $query = mysqli_query($conn,$sql);
        
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>

<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->

  
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>View All Sales</title>
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

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendors</a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item waves-effect waves-light" href="view_all_vendors.php">All Vendors</a>
                    <a class="dropdown-item waves-effect waves-light" href="view_vendor_requests.php">Approval Requests</a>
                </div>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clients</a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item waves-effect waves-light" href="view_all_clients.php">All Clients</a>
                    <a class="dropdown-item waves-effect waves-light" href="view_client_requests.php">Client Approval Requests</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item waves-effect waves-light" href="view_all_products.php">All Products</a>
                    <a class="dropdown-item waves-effect waves-light" href="view_vendor_product_requests.php">Prodcut Approvals</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sale</a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item waves-effect waves-light" href="view_all_sales.php">Current Sales</a>
                    <a class="dropdown-item waves-effect waves-light" href="view_sale_requests.php">Sale Approval Requests</a>
                </div>
            </li>
            <a class="nav-link waves-effect waves-light" href="settings.php">Settings
            </a>
            </li>

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
width: 100%;
height: 200px;
">
</div>



<!--/.Navbar -->



 <!-- page container area start -->
 <div class="page-container sbar_collapsed">
       
  <!-- main content area start -->
  <div class="main-content" style="min-height: 498px;">
      <!-- header area start -->
      
      <!-- header area end -->
      <!-- page title area start -->
      
      <!-- page title area end -->
      <div class="main-content-inner">
          <div class="row"><!-- Dark table start -->
              <div class="col-12 mt-5">
                  <div class="card">
                      <div class="card-body">
                          
                          <div class="data-tables datatable-dark">
                              <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                              <div class="row"><div class="col-sm-12">
                                                  <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                      <div class="row"><div class="col-sm-12">
                                                          <table id="dataTable3" class="text-center dataTable no-footer dtr-inline" role="grid" aria-describedby="dataTable3_info" style="width: 1291px;">
                                  <thead class="text-capitalize" style="background: linear-gradient(90deg, rgba(4,2,11,1) 0%, rgba(27,0,255,1) 54%, rgba(6,1,6,1) 97%);">
                                      <tr role="row">
                                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 20%;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Vendor ID</th>
                                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 10%;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Sale ID</th>
                                          <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 20%;" aria-label="Position: activate to sort column ascending">Start Date</th>
                                          <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 20%;" aria-label="Position: activate to sort column ascending">End Date</th>
                                          <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 10%;" aria-label="Office: activate to sort column ascending">Discount</th>
                                          <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 20%;" aria-label="Age: activate to sort column ascending">Product ID</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                      $counter = 0;
                                      while($row = mysqli_fetch_assoc($query)){
                                          $duration = $row['Vendor_id'];
                                          $output = '                                        
                                          <tr role="row" class="odd">
                                          <td tabindex="0" class="sorting_1">'.$row['Vendor_id'].'</td>
                                          <td class="">'.$row['SaleID'].'</td>
                                          <td class="">'.$row['StartDate'].'</td>
                                          <td class="">'.$row['EndDate'].'</td>
                                          <td class="">'.$row['DiscountPercentage'].'</td>
                                          <td class="">'.$row['Barcode'].'</td>
                                         
                                      </tr>';
                                          $counter = $counter+1;
                                          echo $output;
                                      }

                                  ?>

                                 </tbody>
                              </table></div></div></div></div></div></div></div></div></div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Dark table end -->
          </div>
      </div>
  </div>
  <!-- main content area end -->
  <!-- footer area start-->
  
  <!-- footer area end-->
</div>
<!-- page container area end -->



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

<!-- Script for Approve or Disapprove -->

<script>
    $( document ).ready(function() {
        function approved(sale_id) {
            window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) + "sale_approved.php?SaleId=" + sale_id;
        }
        function dissapproved(sale_id) {
            window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) + "sale_dissapproved.php?SaleId=" + sale_id;
        }
    })
    </script>
<!-- Footer  -->


</footer></body></html>