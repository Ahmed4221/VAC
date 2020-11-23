<?php
session_start();
// if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {
//     echo $_SESSION["UserEmail"], "    has logged in \n";
//     echo "<br>";
//     echo "Usertype is   : ",$_SESSION["UserType"];
// }




?>

<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>

<!-- saved from url=(0072)file:///Users/rafayabbas/Documents/Personal/VAC/see_order_individual.php -->

    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Client - Dashboard</title>
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
            <a class="dropdown-item waves-effect waves-light" href="order_pending_confirmation.php">Order Pending Confirmation</a><a class="dropdown-item waves-effect waves-light" href="view_vendor_requests.php">Placed Order Status</a>
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

<!-- Carousel -->

<div class="container" style="
    margin-left: 0;
    margin-right: 0;
    padding: 0;
    height: 31vw;
">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="
    width: 100vw;
    height: 31vw;
    padding: 0;
">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 31vw;font-family: 'Glyphicons Halflings';">
      <div class="item">
                <h1 style="
            position: absolute;
            top: 68%;
            z-index: 2;
            left: 24%;
            color: #f8f8ffb5;
            font-size: 4vw;
        "> Don’t worry, we have it </h1>
        <img src="./images/banner_1.jpg" alt="Los Angeles" style="">
        
      </div>

      
    
      <div class="item">
        <h1 style="
    position: absolute;
    top: 56%;
    z-index: 2;
    left: 25%;
    color: #f8f8ffb5;
    font-size: 4vw;
"> Expect more. Pay less </h1>
        <img src="./images/banner_2.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item active">
        <h1 style="
    position: absolute;
    top: 68%;
    z-index: 2;
    left: 26%;
    color: #f8f8ffb5;
    font-size: 4vw;
"> Discover the difference </h1>
        <img src="./images/banner_3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Carousel End-->



<div class="my_custom_card">

  <div class="container">
    <div class="card_heading">
      <h3> Select Categories </h3>
    </div>
    <div class="row">
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="category_container">
          <label> Product's Category </label>
          <select id="category" class="form-control mb-4" placeholder="Product Category" required="" name="category" style="
    height: 32px;
"><option value="All Categories">All Categories</option><option value="Beverages">Beverages</option><option value="Dairy &amp; Eggs">Dairy &amp; Eggs</option><option value="Meats &amp; Seafood">Meats &amp; Seafood</option><option value="Fresh Vegetable &amp; Fruits">Fresh Vegetable &amp; Fruits</option><option value="Personal Care">Personal Care</option><option value="Home Care">Home Care</option><option value="Laundry">Laundry</option><option value="Baby">Baby</option><option value="Snacks">Snacks</option><option value="Bakery">Bakery</option><option value="Sauces &amp; Dressing">Sauces &amp; Dressing</option><option value="Soups &amp; Oil">Soups &amp; Oil</option><option value="Frozen Foods">Frozen Foods</option><option value="Packet &amp; Cereals">Packet &amp; Cereals</option><option value="Pasta &amp; Rice">Pasta &amp; Rice</option><option value="Condiments">Condiments</option><option value="Canned &amp; Jars">Canned &amp; Jars</option><option value="Deli">Deli</option><option value="Food to Go">Food to Go</option><option value="Pet Care">Pet Care</option><option value="Stationary &amp; Misc">Stationary &amp; Misc</option><option value="Tobbacco &amp; Accessories">Tobbacco &amp; Accessories</option><option value="Non Muslim">Non Muslim</option></select>
          

        </div>
      </div>

      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="sub_category_container">
          <label> Product's Sub Category </label>
          <select id="sub_category" class="form-control mb-4" placeholder="Product Sub-Category" required="" name="sub_category" style="
    height: 32px;
"><option value="All Sub Categories">All Sub Categories</option></select>
 
         </div>
      </div>
    </div>

    <div class="row" style="margin-top : 38px">
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="product_region_container">
          <label> Suggested Region </label>
          <select id="product_region" name="product_region" class="form-control mb-4" value="All" required="" placeholder="Select the region where this product sells most" style="
    height: 32px;
">
            <option value="All">All</option>
            <option value="Africa">Africa</option>
            <option value="Asia">Asia</option>
            <option value="America">America</option>
            <option value="Europe">Europe</option>
            <option value="Middle East">Middle East</option>
          </select>
        </div>
      </div>
    
      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-5 col-md-10 ">
        <div class="export_authorization_container" style="
    text-align: center;
">
          <label> Product's sale authorization information </label>
          <br><input type="radio" id="uae_export" name="uae_export" required="" value="UAE" style="
            margin-right: 30px;
          "><label> Can Sell in UAE also </label> 
          <input type="radio" id="uae_export" name="uae_export" checked="checked" required="" value="Export" style="
            margin-right: 30px;
            margin-left: 30px;
          "><label> Only Export</label><br><br>
        </div>
      </div>
    </div>
    <div class="row" style="
    margin-top: 93px;
    ">
    
      <div class="col-lg-4 col-md-2"></div>
      <div class="col-lg-6 col-md-10 ">
        <div class="button_container">
         <label> Search Product by Barcode </label>
         <input type="number" id="barcode" class="form-control mb-4" placeholder="Enter Barcode" required="" name="barcode">

        </div>
      </div>


      </div>
    
    <div class="row" style="
margin-top: 93px;
">

      <div class="col-lg-1 col-md-2"></div>
      <div class="col-lg-11 col-md-10 ">
        <div class="button_container">
          <button class="custom_radio_button" id="submit_all" onclick = "search()">Search</button>
        </div>
      </div>

      
    </div>
 </div>


</div>

<!--/.Navbar -->


<!-- Script to search according to given input fields -->
 <script>
$( document ).ready(function() {
  category = "All"
  sub_category = "All" 
  suggested_region = "All"
  export_authorization = "Export"
  barcode = ""
  search = function(){
    category = $("#category").val();
    sub_category = $("#sub_category").val();
    suggested_region = $("#product_region").val();
    export_authorization = $("input[name='uae_export']:checked").val();
    barcode = $("#barcode").val();

    console.clear();
    console.log("category : " , category);
    console.log("sub_category : " , sub_category);
    console.log("suggested_region : " , suggested_region);
    console.log("export_authorization : " , export_authorization);
    console.log("barcode : " , barcode);
  }
})

   </script>




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

  <!-- Script for category and sub categor selection -->
  <script>
    $(document).ready(function(){
        
        var sub_category = [['All Sub Categories'],['Water','Soft Drinks','Juices','Ice Tea & Coffee','Energy Drink','Malt Beverages','Sports Drink','Ice','Sparkling','Powdered Beverage'],
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
      var category = ['All Categories','Beverages','Dairy & Eggs','Meats & Seafood','Fresh Vegetable & Fruits','Personal Care','Home Care','Laundry','Baby','Snacks','Bakery','Sauces & Dressing','Soups & Oil','Frozen Foods','Packet & Cereals','Pasta & Rice','Condiments','Canned & Jars','Deli','Food to Go','Pet Care','Stationary & Misc' ,'Tobbacco & Accessories', 'Non Muslim'];
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

<!-- Footer  -->


</footer></body></html>