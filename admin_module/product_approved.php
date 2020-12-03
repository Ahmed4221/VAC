<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
//   echo "Usertype is   : ",$_SESSION["UserType"];
          //making connection
          $conn = require '../connection.php';
        //   echo "connection made";

        //getting default image from products table
        $defaultImageQuery = "SELECT * FROM `Product` where Barcode =  '".$_GET['ProductBarcode']."' ";
        $defaultImageQueryResult = mysqli_query($conn,$defaultImageQuery);
        $defaultImageQueryResult = $defaultImageQueryResult->fetch_assoc();
        $defaultProductImage = $defaultImageQueryResult['ImagePath'];
        $defaultProductDescription = $defaultImageQueryResult['Description'];
        $defaultProductImageToShow = str_replace("/opt/lampp/htdocs/Freelance","..",$defaultProductImage);
        // echo $defaultProductImage;
        // echo $defaultProductDescription;

        //getting  image given by this vendor
        $customImageQuery = "SELECT * FROM `PictureOptions` where Barcode =  '".$_GET['ProductBarcode']."' and VendorName =  '".$_GET['VendorEmail']."'";
        $customImageQueryResult = mysqli_query($conn,$customImageQuery);
        $customImageQueryResult = $customImageQueryResult->fetch_assoc();
        $customProductImage = $customImageQueryResult['Picture'];
        $customProductImageToShow = str_replace("/opt/lampp/htdocs/Freelance","..",$customProductImage);
        // echo $customProductImage;


        //getting  description given by this vendor
        $customDescQuery = "SELECT * FROM `DescriptionOptions` where Barcode =  '".$_GET['ProductBarcode']."' and VendorName =  '".$_GET['VendorEmail']."'";
        $customDescQueryResult = mysqli_query($conn,$customDescQuery);
        $customDescQueryResult = $customDescQueryResult->fetch_assoc();
        $customProductDescription = $customDescQueryResult['Description_added'];
        // echo $customProductDescription;

        






        
}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>
<!-- saved from url=(0075)file:///Users/rafayabbas/Documents/Personal/VAC/admin_module/admin_dash.php -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>


<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->

  
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>View Vendor Requests</title>
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
  

<style>
.certificate-image {
        display: inline-block;
        border: 1px solid #ddd;
        position: relative;
    }
        .certificate-image img {
            height: 40px;
        }
        .certificate-image:hover {
            -webkit-transform-origin: 50% 0%;
            -ms-transform-origin: 50% 0%;
            -moz-transform-origin: 50% 0%;
            -o-transform-origin: 50% 0%;
            -ms-transform: scale(8); /* IE 9 */
            -moz-transform: scale(8); /* Firefox */
            -o-transform: scale(8); /* Opera */
            transform: scale(8);
            z-index: 1001;
            border-color: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
            overflow: hidden;
        }

</style>

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
</li><li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
<div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item waves-effect waves-light" href="view_all_products.php">All Products</a>
<a class="dropdown-item waves-effect waves-light" href="view_vendor_product_requests.php">Prodcut Approvals</a>






</div>
</li><li class="nav-item dropdown">
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
height: 50px;
">
</div>



<!--/.Navbar -->



 <!-- page container area start -->
 <div class="page-container sbar_collapsed" style="
    height: auto;
">
       <div class="my_custom_card">

        <div class="container">
          <div class="card_heading">
            <h3> Select Image </h3>
          </div>
          <div class="row">
            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-5 col-md-10 ">
              <div class="img_container">
                <img id="default_img_id" class="myImg pointer_cursor transform_on_hover" src="<?php" echo="" $defaultproductimagetoshow;="" ?=""> alt="Default Image" style="width:100%;height: 400px;border-radius: 20px;"&gt;
              </div>
            </div>

            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-5 col-md-10 ">
              <div class="img_container">
                <img id="new_img_id" class="myImg pointer_cursor transform_on_hover" src="<?php" echo="" $customproductimagetoshow;="" ?=""> alt="Default Image" style="width:100%;height: 400px;border-radius: 20px;"&gt;
              </div>
            </div>
          </div>
          <div class="row" style="
    margin-top: 93px;
">
            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-5 col-md-10 ">
              <div class="button_container">
                <button class="custom_radio_button" id="default_img">Select Default Image</button>
              </div>
            </div>

            <div class="col-lg-1 col-md-2"></div>
            <div class="col-lg-5 col-md-10 ">
              <div class="button_container">
                <button class="custom_radio_button" id="new_img">Select New Image</button>
              </div>
            </div>
          </div>
       </div>
  
  
</div>

<div class="my_custom_card">

  <div class="container">
    <div class="card_heading">
      <h3> Select Description </h3>
    </div>
    <div class="row">
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="para_container">
         <p class="paragraph_tag" id="desc_default">

          <!--?php echo $defaultProductDescription;  ?-->
         </p>

        </div>
      </div>

      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="para_container">
          <p class="paragraph_tag" id="desc_new">
          <!--?php echo $customProductDescription;  ?-->
          </p>
 
         </div>
      </div>
    </div>
    <div class="row" style="
margin-top: 93px;
">
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="button_container">
          <button class="custom_radio_button" id="default_desc_btn">Select Default Description</button>
        </div>
      </div>

      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="button_container">
          <button class="custom_radio_button" id="new_desc_btn">Select New Description</button>
        </div>
      </div>
    </div>
 </div>


</div>


<div class="my_custom_card" id="category_selection_div">

  <div class="container">
    <div class="card_heading">
      <h3> Select Categories </h3>
    </div>
    <div class="row">
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="category_container">
          <label> Product's Category </label>
          <select id="category" class="form-control mb-4" placeholder="Product Category" required="" name="category"><option value="Beverages">Beverages</option><option value="Dairy &amp; Eggs">Dairy &amp; Eggs</option><option value="Meats &amp; Seafood">Meats &amp; Seafood</option><option value="Fresh Vegetable &amp; Fruits">Fresh Vegetable &amp; Fruits</option><option value="Personal Care">Personal Care</option><option value="Home Care">Home Care</option><option value="Laundry">Laundry</option><option value="Baby">Baby</option><option value="Snacks">Snacks</option><option value="Bakery">Bakery</option><option value="Sauces &amp; Dressing">Sauces &amp; Dressing</option><option value="Soups &amp; Oil">Soups &amp; Oil</option><option value="Frozen Foods">Frozen Foods</option><option value="Packet &amp; Cereals">Packet &amp; Cereals</option><option value="Pasta &amp; Rice">Pasta &amp; Rice</option><option value="Condiments">Condiments</option><option value="Canned &amp; Jars">Canned &amp; Jars</option><option value="Deli">Deli</option><option value="Food to Go">Food to Go</option><option value="Pet Care">Pet Care</option><option value="Stationary &amp; Misc">Stationary &amp; Misc</option><option value="Tobbacco &amp; Accessories">Tobbacco &amp; Accessories</option><option value="Non Muslim">Non Muslim</option></select>
          

        </div>
      </div>

      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="sub_category_container">
          <label> Product's Sub Category </label>
          <select id="sub_category" class="form-control mb-4" placeholder="Product Sub-Category" required="" name="sub_category"><option value="Water">Water</option><option value="Soft Drinks">Soft Drinks</option><option value="Juices">Juices</option><option value="Ice Tea &amp; Coffee">Ice Tea &amp; Coffee</option><option value="Energy Drink">Energy Drink</option><option value="Malt Beverages">Malt Beverages</option><option value="Sports Drink">Sports Drink</option><option value="Ice">Ice</option><option value="Sparkling">Sparkling</option><option value="Powdered Beverage">Powdered Beverage</option></select>
 
         </div>
      </div>
    </div>
    
 </div>


</div>

<div class="my_custom_card" >

  <div class="container">
    <div class="card_heading product_commission_setting">
      <h3> Set Commision for client </h3>
    </div>
    <div class="row product_commission_setting">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-10 " style="
            margin-left: 4rem;
        ">
        <div class="add_metric_container" style="text-align: center;">
          <span style="
                display: block;
            "> 
    
            <label style="
                  display: block;
                  margin-right: 5vw;
              "> Product Commision (%)
            </label>
    
    
            <input type="number" id="commission_percentage" class="form-control mb-4" name="new_metric" style="
                display: block;
                width: 45%;
                margin-left: 6rem;
            ">
          
          </span></div>
        </div>
      
    
      </div>
    </div>
    <div class="row" style="
    margin-top: 93px;
    ">
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-11 col-md-10 ">
        <div class="button_container">
          <button class="custom_radio_button" id="submit_all" style="
    margin-left: -5rem;
">Submit All</button>
        </div>
      </div>

      
    </div>
 </div>


</div>

    
</div>
<!-- page container area end -->

<!-- The Modal -->
<div id="myModal" class="modal" style="display: none; background: rgba(0, 0, 0, 0.48);overflow-y:auto;">
  <span class="close" style="
    margin-top: 4%;
    margin-right: 19%;
    color: white;
">×</span>
  <img class="modal-content" id="img01" src="file:///Users/rafayabbas/Documents/Personal/VAC/admin_module/images/my_modal_img.png" style="
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 6%;
">
  <div id="caption">Passport/ Emirates IDForm</div>
</div>

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
    

    function approved(vendor_email) {
        window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) + "vendor_approved.php?VendorEmail=" + vendor_email;
    }
    function dissapproved(vendor_email) {
        window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) + "vendor_disapproved.php?VendorEmail=" + vendor_email;
    }
    function edits(vendor_email) {
        window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) + "vendor_edits.php?VendorEmail=" + vendor_email;
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

<!-- Script for modal -->
<script>
  $(document).ready(function() {


    // Category div deletion when product is coming for second time and product commision adding 

    var isFirstTime = 0; //PHP
    if(isFirstTime == 0) { 
      $("#category_selection_div").hide();
      $(".product_commission_setting").hide();
    }
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

document.querySelectorAll('.myImg').forEach(item => {
  item.addEventListener('click', event => {
    //handle click
    modal.style.display = "block";
  modalImg.src = event.target.src;
  captionText.innerHTML = event.target.alt;
  })
})

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
  })
</script>



<!-- Script to handle radio button clicks-->
<script>
  $(document).ready(function() {
    img_selected = "";
    var default_image_btn = document.getElementById("default_img");
    var new_image_btn = document.getElementById("new_img");
    var default_image = document.getElementById("default_img_id")
    var new_image = document.getElementById("new_img_id")
     $(default_image_btn).click(function(){
      if($(default_image_btn).hasClass("custom_radio_button"))
      {
      $(default_image_btn).removeClass("custom_radio_button");
      $(default_image_btn).addClass("custom_radio_button_selected");
      default_image_btn.innerText = "Selected";
      $(default_image).addClass("selected_image");
      img_selected = default_image.src;
      }
      else{
      $(default_image_btn).addClass("custom_radio_button");
      $(default_image_btn).removeClass("custom_radio_button_selected");
      default_image_btn.innerText = "Select Default Image";
      $(default_image).removeClass("selected_image");
      img_selected = "";
      }
      if($(new_image_btn).hasClass("custom_radio_button_selected"))
      {
        $(new_image_btn).addClass("custom_radio_button");
      $(new_image_btn).removeClass("custom_radio_button_selected");
      new_image_btn.innerText = "Select Default Image";
      $(new_image).removeClass("selected_image");
      }
      console.log("image selected : " , img_selected);
    })
    $(new_image_btn).click(function(){

      if($(default_image_btn).hasClass("custom_radio_button_selected"))
      {
        $(default_image_btn).addClass("custom_radio_button");
      $(default_image_btn).removeClass("custom_radio_button_selected");
      default_image_btn.innerText = "Select Default Image";
      $(default_image).removeClass("selected_image");

      }
      
      if($(new_image_btn).hasClass("custom_radio_button"))
      {
      $(new_image_btn).removeClass("custom_radio_button");
      $(new_image_btn).addClass("custom_radio_button_selected");
      new_image_btn.innerText = "Selected";
      $(new_image).addClass("selected_image");
      img_selected = new_image.src;
      }
      else{
      $(new_image_btn).addClass("custom_radio_button");
      $(new_image_btn).removeClass("custom_radio_button_selected");
      new_image_btn.innerText = "Select New Image";
      $(new_image).removeClass("selected_image");
      img_selected = "";
      }
      
      console.log("image selected : " , img_selected);

    })
  })
</script>


<script>
  $(document).ready(function() {
    desc_selected = "";
    var default_desc_btn = document.getElementById("default_desc_btn");
    var new_desc_btn = document.getElementById("new_desc_btn");
    var default_desc = document.getElementById("desc_default")
    var new_desc = document.getElementById("desc_new")
     $(default_desc_btn).click(function(){
      if($(default_desc_btn).hasClass("custom_radio_button"))
      {
      $(default_desc_btn).removeClass("custom_radio_button");
      $(default_desc_btn).addClass("custom_radio_button_selected");
      default_desc_btn.innerText = "Selected";
      $(default_desc).addClass("selected_desc");
      desc_selected = default_desc.innerText;
      }
      else{
      $(default_desc_btn).addClass("custom_radio_button");
      $(default_desc_btn).removeClass("custom_radio_button_selected");
      default_desc_btn.innerText = "Select Default Description";
      $(default_desc).removeClass("selected_desc");
      desc_selected = "";
      }
      if($(new_desc_btn).hasClass("custom_radio_button_selected"))
      {
        $(new_desc_btn).addClass("custom_radio_button");
      $(new_desc_btn).removeClass("custom_radio_button_selected");
      new_desc_btn.innerText = "Select Default Image";
      $(new_desc).removeClass("selected_desc");
      }

      console.log("Description Selected: " , desc_selected);
    })
    $(new_desc_btn).click(function(){

      if($(default_desc_btn).hasClass("custom_radio_button_selected"))
      {
        $(default_desc_btn).addClass("custom_radio_button");
      $(default_desc_btn).removeClass("custom_radio_button_selected");
      default_desc_btn.innerText = "Select Default Image";
      $(default_desc).removeClass("selected_desc");
      }
      
      if($(new_desc_btn).hasClass("custom_radio_button"))
      {
      $(new_desc_btn).removeClass("custom_radio_button");
      $(new_desc_btn).addClass("custom_radio_button_selected");
      new_desc_btn.innerText = "Selected";
      $(new_desc).addClass("selected_desc");
      desc_selected = new_desc.innerText;
      }
      else{
      $(new_desc_btn).addClass("custom_radio_button");
      $(new_desc_btn).removeClass("custom_radio_button_selected");
      new_desc_btn.innerText = "Select New Description";
      $(new_desc).removeClass("selected_desc");
      desc_selected = "";
      }
      
      console.log("Description Selected: " , desc_selected);

    })
  })
</script>


<!-- Script to handle toggle buttons end -->
<!-- Script to handle categories and sub-categories -->
<script>
  $(document).ready(function(){
      
      var sub_category = [['Water','Soft Drinks','Juices','Ice Tea & Coffee','Energy Drink','Malt Beverages','Sports Drink','Ice','Sparkling','Powdered Beverage'],
      ['Yoghurt','Laban Drink','Spreads','Shelf Milk','Soya & Others','Desserts','Powdered Milk','Smoothies','Ghee','Spreads'],
      ['Processed Meat','Fresh Chicken','Fresh Beef','Fresh Mutton','Fresh Sea Food','Sausages','Burger','Deli Meat & Cold Cuts','Dried'],
      ['Fruits','Vegetables','Fresh Herbs'],
      ['Family Planning','Female Care','Soaps & Hand Wash','Body Wash & Shower','Oral Care','Male Grooming','Hair Care','Deodorant','Healthcare','Facial & Skin Care','Coloration','Sanitizer','Sanitary Protection','Kids Care','First Aid & General Health','Foot Care','Perfumes & Body Spray'],
      ['Dishwash','Multi Purpose','Bathroom','Kitchen','Air Freshener','Antiseptic','Odor Remover','Hygiene','Insect Repellant','Pest Control','Plastics, Foils & Bags','Cleaning Tools','Utensils','Disposable & Glass Ware','Batteries','Shoe Care','Tissue & Toilet Paper','barbeque'],
      ['Stain Remover','Fabric Softner','Detergent','Accessories'],
      ['Baby Food','Diapers','Bath','Accessories','Baby Care'],
      ['Ice Cream','Chocolates','Chips','Gum & Candy','Biscuits','Nuts, Dried Fruits & Seeds','Custards','Dips & Salsa','Dessert','Cakes','Popcorn','Sweets, Mints & Gum','dates'],
      ['Toast','Bread','Buns & Rolls','Healthy Breads','Pastry','Baguette','Snacks','Baking Products','Dessert'],
      ['Cooking Sauce','Ketchup','Mayonnaise','Salad Dressing','Hot Sauce','Mustard','Syrup','Paste'],
      ['Cooking Oil','Vinegar','Soups'],
      ['Chicken','Meat','Ice','Vegetables & Fruits','Seafood','Wraps & Rolls','Pizza & Breads','Ice Cream & Desserts'],
      ['Cereals','Cereal Bars','Oatmeal','Packet Soup','Home Baking','Tea & Coffee','Flour','ready to cook'],
      ['Pasta','Noodles','Rice','Pulses & Grains'],
      ['Spices','Sugar','Salt','Artificial Sweeteners','Food Color & Flavor','Seasoning'],
      ['Fish','Beef','Chicken','Fruits','Turkey','Beans & Vegetables','Pickles & Olives','Pickles & Olives','Dressing & Mayo','Pasta Sauce','Jam, Honey & Spreads','Home Baking','Savoury'],
      ['Cold Cuts','Pickles'],
      ['Sandwich','Salad','Meals'],
      ['Pet Grooming','Pet Food','Pet Care'],
      ['Electronic Items','Greeting Cards','Office Supplies','Storage Solutions','Toys'],
      ['Ciggarettes','Shisha Flavour','Shisha','Coal','Lighter'],
      ['Pork','Frozen','Canned','Chips']
    ];
    var category = ['Beverages','Dairy & Eggs','Meats & Seafood','Fresh Vegetable & Fruits','Personal Care','Home Care','Laundry','Baby','Snacks','Bakery','Sauces & Dressing','Soups & Oil','Frozen Foods','Packet & Cereals','Pasta & Rice','Condiments','Canned & Jars','Deli','Food to Go','Pet Care','Stationary & Misc' ,'Tobbacco & Accessories', 'Non Muslim'];
    var category_text="";
    
    for (var i=0;i<category.length;i++){
category_text += '<option value="'+category[i]+'">'+category[i]+'</option>';
    }
    document.getElementById("category").innerHTML = category_text;
    document.getElementById("category").onchange = function() {
      var sub_category_text = "";
      for (var i=0;i<category.length;i++){
        if(document.getElementById("category").value == category[i]){
          for(var j=0;j<sub_category[i].length;j++){
            sub_category_text+='<option value="'+sub_category[i][j]+'">'+sub_category[i][j]+'</option>';
          }
          
        }
      }
      document.getElementById("sub_category").innerHTML = sub_category_text;
    }
    document.getElementById("category").onchange();
  });
</script>

<!-- Script to submitt everything -->
<script>
  var submit_all_btn = document.getElementById("submit_all");
  $(submit_all_btn).click(function(){
    console.log(img_selected);
    console.log(desc_selected);

    category_selected = document.getElementById("category").value;
    sub_category_selected = document.getElementById("sub_category").value;
    commission_value = document.getElementById("commission_percentage").value;
    console.log(category_selected);
    console.log(sub_category_selected);
    if(img_selected == "")
    {
      alert("Please select an image");
    }
    else if(desc_selected == ""){
      alert("Please select a description");
    }
    else{
      
      // Add as many parameters as you want at the end in the same format as before.
      
      // vendor_email = '<?=$_GET['VendorEmail']; ?>' ;
      // barcode = '<?=$_GET['ProductBarcode']; ?>' ;
      window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1)) 
      + "product_approval_finalized.php?VendorEmail=" + vendor_email 
      + "&ProductBarcode=" + barcode
      + "&CategorySelected="+ category_selected
      + "&SubCategorySelected="+ sub_category_selected
      + "&ImageSelected="+ img_selected
      + "&DescriptionSelected="+ desc_selected
      + "&ProductCommission=" + commission_value
       ;
  
    }
  })
  </script>
<!-- Footer  -->


</footer></body></html>


