


<?php
session_start();
$followingdata='';
$temp="Ahmed";
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {
  $conn = require '../connection.php';
    // echo $_SESSION["UserEmail"], "    has logged in \n";
    // echo "<br>";
    // echo "Usertype is   : ",$_SESSION["UserType"];
    $vendorsProducts = "SELECT * FROM `Vendors_Products` WHERE Barcode='".$_GET['barcode']."' AND Vendor_id = '".$_GET['vendorid']."' ";
    $results = mysqli_query($conn,$vendorsProducts);
    $followingdataVendorProducts = $results->fetch_assoc();
    
}




?>

<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>

<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->

    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add To Order</title>
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


<div class = "sticky_menu" > 
  <button class ="btn btn-primary custom_button_primary custom_primary_clicked container_buttons" name = "100" data-toggle="tooltip" title="" data-original-title="Click to choose 20 ft container" id = "20ft">20 ft</button>
  <button class ="btn btn-primary custom_button_primary container_buttons" data-toggle="tooltip" name = "150" title=""  data-original-title="Click to choose 40 ft container"  id = "40ft" >40 ft</button>
  <button class ="btn btn-primary custom_button_primary container_buttons" data-toggle="tooltip" name = "200" title="" data-original-title="Click to choose 60 ft container"  id = "40ftHC">60 ft</button>

</div>
<div class="progress" id= "progress_bar_container" style="
    top: 20rem;
    margin-top: 0;
    margin-bottom: 0;
    height: 2rem;
    border-color: #28a744;
    border-style: solid;
    border-width: 1px;
    width: 314px;
    font-size: 17px;
    position: sticky;
    background-color: #dcf1ff;
    z-index: 2;
">

  <div class="progress-bar bg-success" id = "progress_bar" role="progressbar" style="width: 25%;border: 0;z-index: 2;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  </div>
</div>
        
<script>
   $(document).ready(function(){
    var cont1 = document.getElementById("20ft");
    var cont2 = document.getElementById("40ft");
    var cont3 = document.getElementById("60ft");
    $(".custom_button_primary").click(function() {
      if($(this).hasClass("custom_primary_clicked")){
      $(this).removeClass("custom_primary_clicked");
      }
      else{
      $(".custom_button_primary").removeClass("custom_primary_clicked");
      $(this).addClass("custom_primary_clicked");
      }
    })
   });
  </script>
<!-- nav end -->

<!-- Products Start -->

<?php
      // $barcode = $_GET['barcode'];
      $query = "SELECT * FROM `Product` WHERE Barcode = '".$_GET['barcode']."'   ";
      $result = mysqli_query($conn,$query);
      $followingdata = $result->fetch_assoc();
    
    ?>
<div class= "my_custom_card">

  <div class = "container">
<div class="row mt-20">
  <div class="col-md-5">
    <img class = "selected_image_container" src=<?php 
    $ImagePath = $followingdata['ImagePath'];
    $ImagePath = str_replace("/opt/lampp/htdocs/Freelance","..",$ImagePath);
    
    
    echo $ImagePath;?> >
  </div>
  <div class="col-md-7">



    <div class="single-product-details">
      <!-- Insert the product id as name (php)-->
      <h2 name="product id"> <?php echo $followingdata['Product_Name'];?> <label style="
        font-size: large;
    "> <?php echo $followingdata['Brand_Name'];?> </label></h2>
      <p> <?php echo $_GET['price_per_ctn'];?> $</p>
      <p><?php echo $followingdata['Description'];?></p>

        <h5> <span id="quantityPerCtn"><?php echo $_GET['per_ctn_qty'];?></span> units per CTN </h5>
        <div class="number" style="
    margin-top: 19px;
">
          <span class="minus" data-toggle="tooltip" title="" data-original-title="Click to increase CTN quantity!" >-</span>
          <input id="counter_input" type="text" value="1">
          <span class="plus" data-toggle="tooltip" title="" data-original-title="Click to decrease CTN quantity!" >+</span>
        </div>
       
      
        <button class = "btn-grad" id = "add_btn" onclick = "add_to_order(this)" style = "margin-top:40px;
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
    margin-top: 2rem;"
    > Add to Order </button>
        
        

      
      
      
      
      
    </div>
  </div>
</div>

</div>
</div>



<!-- Product End -->





<!-- Place order Button -->
<!-- <div class= "my_custom_card">
  <div class = "container"> 
    <div class="row mt-20">
      
      <button class = "btn-grad" onclick = "place_order_clicked(this)"> Place Order </button>

    </div>
  </div>
</div> -->


  <!-- Place Order Button End -->





<!--/.Navbar -->
<script>
  
  $(document).ready(function() {
    add_to_order = function(elem){
      
      if(check_cbm(quantity)) {
        $(elem).css = ({
    'background-color' : '#0eb334 !important' , 
    'color' : 'white !important' , 
    'margin-top' : '40px'
    });
    $(elem).html("Added");
    console.log(quantity,vendor_stock);
    if(quantity > vendor_stock)
    {
      window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1))
        + "add_product_to_order_2.php?" 
        + "&allowed_cbm=" + cbm
        + "&individual_cbm=" + individual_cbm
        + "&current_cbm=" + (current_cbm )
        + "&container_selected=" + container_selected
        + "&quantity=" + quantity
        + "&product_id=" + "<?php echo $followingdataVendorProducts['Barcode'] ?>"
        + "&vendor_id=" + "<?php echo $followingdataVendorProducts['Vendor_id'] ?>";
    }
    else{
      window.location.href = (window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1))
        + "order_placed.php?" 
        + "&allowed_cbm=" + cbm
        + "&individual_cbm=" + individual_cbm
        + "&current_cbm=" + (current_cbm )
        + "&container_selected=" + container_selected
        + "&quantity=" + quantity
        + "&product_id=" + "<?php echo $followingdataVendorProducts['Barcode'] ?>"
        + "&vendor_id=" + "<?php echo $followingdataVendorProducts['Vendor_id'] ?>";
    }
    
    
    }
  }
  });
  </script>

<!-- Order Placed Script -->
<script>
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
   $(document).ready(function() {
////////// Initializing Global Variables ///////////
containers = {100:"20ft" , 150:"40ft" , 200:"40ftHC"};
cbm = GetURLParameter("cbm_allowed"); 
// Insert the length,width and height below from php, key is the product id which is defined in the name attribute of <h2> tag for name of the product

var l = "<?php echo $followingdataVendorProducts['length'] ?>";
var w = "<?php echo $followingdataVendorProducts['width'] ?>";
var h = "<?php echo $followingdataVendorProducts['height'] ?>";
var stock = "<?php echo $followingdataVendorProducts['Quantity'] ?>"

  length = parseInt(l); 
  width = parseInt(w);
  height = parseInt(h);
  individual_cbm = length*width*height;
  console.log("here",individual_cbm);
  vendor_stock = parseInt(stock); // Add stock available through php
first_product = false;
if(cbm == null) {
  first_product = true;
  cbm = -1;
  current_cbm = 0;
  console.log("yo bro");
  quantity = 1;
  container_selected = "None"
  $("#"+containers[100]).trigger("click");
}
else{
  cbm = parseInt(cbm);
  $("#"+containers[cbm]).trigger("click");
  current_cbm = parseInt(GetURLParameter("current_cbm"));
  container_selected = GetURLParameter("container_selected");
  quantity = parseInt(GetURLParameter("quantity"));
  var $input = $('#counter_input');
  $input.val(quantity);
  $input.change();
}
console.log(cbm," ",current_cbm," ",individual_cbm," ",quantity);


product_id = $(".single-product-details").children().eq(0).attr('name');

//?cbm=100&current_cbm=40&container_selected=40ft HC&quantity=3&product_id=product_id1
//////////// Global Variables End /////////////////
    

   
  
    console.log("First Script Start Script for CALCULATING CBM");

   ///// Show Container Full Alert Function /////
    show_container_full_alert = function() {
      console.log("show container full alert");
        alert("Container selected by you is full, Decrease the Quantities or Upgrade the Container Size");
    }

    ///// Container Selected Function  /////

    $(".container_buttons").click(function() {
      console.log("container selected function");
      var elem = this;
      console.log(elem);
      if(!($(elem).hasClass("custom_primary_clicked")))
      {
          cbm = -1;
          container_selected = "none";
      }
      else{
          var selected_container_id = $(elem).attr('name');
          
          if(selected_container_id == "100")
          {
            container_selected = "20ft";
          }
          else if(selected_container_id =="150")
          {
            container_selected = "40ft"
          }
          else if(selected_container_id == "200")
          {
            container_selected = "40ftHC";
          }
          
          cbm = parseInt(selected_container_id);
      }
      console.log("Selected Container CBM : " , cbm);
      handle_progress_bar();
    });

    check_cbm = function(new_quantity){
      if((( new_quantity*individual_cbm ) + current_cbm ) > cbm)
      {
        if(cbm < 0)
        {
          return true;
        }
        show_container_full_alert();
        return false;
      }
      return true;

    }
    
  



// Script for HANDLING CHANGE IN PRODUCT QUANTITY -->


    console.log("2nd Script start Script for HANDLING CHANGE IN PRODUCT QUANTITY ");
    
    

  
    
    $(".minus, .plus").click(function() {
        console.log(" minus plus clicked function ");

      
        
        if($(this).hasClass('minus'))
        {
          
          
            if(quantity > 0)
            {
            decrease_quantity(this);
            quantity=quantity-1;
            handle_progress_bar();
            }
          
          
        }
        else{
            
          if(check_cbm(quantity+1))
          {
            
            increase_quantity(this);
            quantity = quantity+1;
            handle_progress_bar();
          }
          
        }
        console.log("final quantity : " ,quantity);
       
        
    })
 


  handle_progress_bar = function() {
    var percent = ((current_cbm + (individual_cbm*quantity))*100)/cbm;
    
    console.log(percent);
    $("#progress_bar").html(((percent).toString()+"%") );
    $("#progress_bar").removeClass();

    $("#progress_bar").addClass("progress-bar");

    $("#progress_bar").css('width',(percent.toString() + "%"));
    if(percent <= 25)
    {
      $("#progress_bar").addClass("bg-success");
      $("#progress_bar").parent().css("border-color","##28a745");
    }
    else if(percent <= 50)
    {
      $("#progress_bar").addClass("bg-info");
      $("#progress_bar").parent().css("border-color","#17a2b8");
    }
    else if(percent <= 75)
    {
      $("#progress_bar").addClass("bg-warning");
      $("#progress_bar").parent().css("border-color","#ffc107");
    }
    else if(percent <= 99)
    {
      $("#progress_bar").addClass("bg-danger");
      $("#progress_bar").parent().css("border-color","#dc3545");
    }
    else if(percent == 100)
    {
      $("#progress_bar").addClass("bg-danger");
      $("#progress_bar").parent().css("border-color","#dc3545");
      $("#progress_bar").html("Container Full");
    }
    else if(percent >= 100)
    {
      $("#progress_bar").addClass("bg-danger");
      $("#progress_bar").parent().css("border-color","#dc3545");
      $("#progress_bar").html("Container Overloaded");
    }
}
handle_progress_bar();
});
</script>
 

 <!-- Script for deleting a product -->
<script>
  function delete_from_order(mybtn) {
      console.log("3rd Script Start Script for deleting a product");
      

      mybtn.style = "background-color: #ff3030 !important;color: white !important;margin-top:40px;";
      mybtn.innerHTML = "Deleted";
      console.log($(mybtn).parent().children().eq(0).attr("name"));
      delete product_quantities[$(mybtn).parent().children().eq(0).attr("name")];
      mybtn.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
  }
</script>


<!-- Footer -->

<script>
$(document).ready(function() {

decrease_quantity = function (elem) {
  console.log( "decrease quantity function");
var $input = $(elem).parent().find('input');
var count = parseInt($input.val()) - 1;
count = count < 0 ? 0 : count;
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
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
    

<!-- Footer  -->


</footer></body></html>