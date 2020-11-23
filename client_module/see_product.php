


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
    <title>See Product</title>
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
<a class="navbar-brand" href="admin_dash.htm">VAC</a>
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
<div class = "sticky_button" onclick="see_cart()"> <span id = "cart_text"> See Cart </span><img id = "cart_icon" src="images/cart_icon.png" style="
  height: 30px;
  margin-left: 13px;
"></div>

<div class= "my_custom_card">

  <div class = "container">
<div class="row mt-20">
  <div class="col-md-5">
    <img class = "selected_image_container" src="./images/product_1.jpg" >
  </div>
  <div class="col-md-7">
    <div class="single-product-details">
      
      <h2> Cocal Cola <label style="
        font-size: large;
    "> Brand </label></h2>
      <p> 300 $</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Phasellus imperdiet, nulla et dictum interdum, nisi lorem 
        egestas vitae scel<span id="dots">...</span><span id="more">er
          enim ligula venenatis dolor. Maecenas nisl est, ultrices n
          ec congue eget, auctor vitae massa. Fusce luctus vestibu
          lum augue ut aliquet. Nunc sagittis dictum nisi, sed ulla
          mcorper ipsum dignissim ac. In at libero sed nunc venena
          tis imperdiet sed ornare turpis. Donec vitae dui eget te
          llus gravida venenatis. Integer fringilla congue eros n
          on fermentum. Sed dapibus pulvinar 
          nibh tempor 
          porta.</span> <span id = "seeMoreBtn" onclick = "seeMoreFunction()" style = " color: #33daa3;
          cursor: pointer;
          font-weight: bolder;"> See more </span></p>

        <h5> <span id="quantityPerCtn">5</span> units per CTN </h5>

        <button class = "btn btn-success custom_button" id="add_btn" onclick = "add_to_order()" style = "margin-top:40px;"> Add to Order </button>
        
      
      <script>
        function add_to_order() {
          var mybtn = document.getElementById('add_btn');
         
          mybtn.style = "background-color : #0eb334 !important;color: white !important;margin-top:40px;";
          mybtn.innerHTML = "Added";
        }
        </script>
      
      <script>
        $(document).ready(function() {
        
        decrease_quantity = function (elem) {
          console.log( "decrease quantity function");
        var $input = $(elem).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
        }
        increase_quantity = function (elem) {
          console.log("increase quantity function");
        var $input = $(elem).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
        }
        });
        </script>
      
      
      
    </div>
  </div>
</div>

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
  

  <script>
    function seeMoreFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("seeMoreBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    function see_cart(){
      
    }
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