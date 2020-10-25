<?php
    error_reporting(0);
    session_start();
     // check if that session is true, else redirect to the login page  
    if($_SESSION['loggedIn']){
        //allow
        $user = $_SESSION["UserEmail"];
        //making connection
        $conn = require 'connection.php';
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if(isset($_POST["Submit"])){

            $brand_name=$_POST['brand_name'];
            $product_name=$_POST['product_name'];
            $product_category=$_POST['category'];
            $product_sub_category=$_POST['sub_category'];
            $price_per_ctn = $_POST['price_per_ctn'];
            $barcode = $_POST['barcode'];
            $weight = $_POST['weight'];
            $per_ctn_quantity = $_POST['per_ctn_quantity'];
            $length = $_POST['product_length'];
            $width = $_POST['product_width'];
            $height = $_POST['product_height'];
            $quantity = $_POST['product_quantity'];
            $product_region = $_POST['product_region'];
            $UAE_ALL = $_POST['uae_export'];
            $product_pics =$_FILES["product_pic"]["name"];
            $vendor_product_image_id = $user."_Product_".$barcode."_".$product_pics;
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $destination_path = $destination_path.="products/";
            $product_image_target_path = $destination_path . basename($vendor_product_image_id);


            $message = "Error";
            //checking if that kind of product already exists in our Database
            $sql = "SELECT * FROM `Product` where Barcode='".$barcode."' ";
            $product_exists = mysqli_query($conn,$sql);
            //means product does not exist
            if (mysqli_num_rows($product_exists)==0){
              //if does not exist now adding the product in our databaswe
              $sql = "INSERT INTO `Product`(`Barcode`, `ImagePath`, `Product_Category`,`productSubCategory`, `Product_Name` , `Brand_Name`) 
                      VALUES ('".$barcode."','".$product_image_target_path."','".$product_category."','".$product_sub_category."' ,'".$product_name."' , '".$brand_name."' )";
              if (mysqli_query($conn,$sql)){
                $message = "New Product added in Inventory";
              }
            }

            
            //checking if product already exists for that vendor
            $check_product_for_vendor = "SELECT * FROM `Vendors_Products` WHERE Barcode = '".$barcode."' and Vendor_id = '".$user."' ";
            $product_exists_for_vendor = mysqli_query($conn,$check_product_for_vendor);
            if (mysqli_num_rows($product_exists_for_vendor)==0){

            //adding that product for that vendor
            $sql = "INSERT INTO `Vendors_Products`(`Barcode`, `price_per_ctn`, `weight`, `per_ctn_quantity`, `length`, `width`, `height`, `product_region`, `UAE_ALL`, `Vendor_id` , `Approved`) 
                    VALUES ('".$barcode."','".$price_per_ctn."','".$weight."','".$per_ctn_quantity."','".$length."','".$width."','".$height."',
                            '".$product_region."','".$UAE_ALL."','".$user."',0)";
                    
                    if (mysqli_query($conn,$sql)){
                      if (strpos($message, 'Error') !== false) {
                        $message = "The product has been added for you and sent for approval";
                      }
                      $message = $message."  . The product has been added for you and sent for approval";
                      //if product is added now update the picture
                      move_uploaded_file($_FILES['product_pic']['tmp_name'], $product_image_target_path);
                    }
                    else{
                      echo mysqli_error($conn);
                      $message = $message."  . The product could not be added for you";
                    }

            }
            else{
              $message = $message."  . A product with same barcode exists for you, to add quantity go to update stock";
            }

            echo "<script type='text/javascript'>alert('$message');</script>";
      }
  }
  else{
  //redirect to the login page
  header('Location: /index.php'); }

?>






<!DOCTYPE html>
<!-- saved from url=(0111)file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/Real%20project/add_product_vendor_1.htm -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./add_product_page_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./add_product_page_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./add_product_page_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./add_product_page_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./add_product_page_files/style.css">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<style>
  .number-input input[type="number"] {
-webkit-appearance: textfield;
-moz-appearance: textfield;
appearance: textfield;
}

.number-input input[type=number]::-webkit-inner-spin-button,
.number-input input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
}

.number-input {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.number-input button {
-webkit-appearance: none;
background-color: transparent;
border: none;
align-items: center;
justify-content: center;
cursor: pointer;
margin: 0;
position: relative;
}

.number-input button:before,
.number-input button:after {
display: inline-block;
position: absolute;
content: '';
height: 2px;
transform: translate(-50%, -50%);
}

.number-input button.plus:after {
transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
text-align: center;
}

.number-input.number-input {
border: 1px solid #ced4da;
width: 10rem;
border-radius: .25rem;
}

.number-input.number-input button {
width: 2.6rem;
height: .7rem;
}

.number-input.number-input button.minus {
padding-left: 10px;
}

.number-input.number-input button:before,
.number-input.number-input button:after {
width: .7rem;
background-color: #495057;
}

.number-input.number-input input[type=number] {
max-width: 4rem;
padding: .5rem;
border: 1px solid #ced4da;
border-width: 0 1px;
font-size: 1rem;
height: 2rem;
color: #495057;
}

@media not all and (min-resolution:.001dpcm) {
@supports (-webkit-appearance: none) and (stroke-color:transparent) {

.number-input.def-number-input.safari_only button:before,
.number-input.def-number-input.safari_only button:after {
margin-top: -.3rem;
}
}
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</head>
<body>

  <!-- Start your project here-->  
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="
    background-color: #33b5e5 !important;
    margin-bottom: 70px !important;
">
  <a class="navbar-brand" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Action</a>
          <a class="dropdown-item waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Another action</a>
          <a class="dropdown-item waves-effect waves-light" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/index.html#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      
      
    </ul>
  </div>
</nav>
<!--/.Navbar -->


    <!-- Material input -->
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
  <form style="
  width: 100%;  
" enctype="multipart/form-data" method="post" action="add_product_page.php">

  <div class="text-center">
      <p class="h4 mb-4">Add Product</p>

      <p>Increase your sales by increasing diversity</p>

      
  </div>
<p>Do you want to upload multiple products through csv. 
      <b> 
      <a href="add_products_bulk_page.htm" target="_blank">Click here</a></b> 

</p>

  <input type="text" id="brand_name" class="form-control mb-4" placeholder="Brand Name" required="" name="brand_name">

  <input type="text" id="product_name" class="form-control mb-4" placeholder="Product Name" required="" name="product_name">
<textarea rows="10" type="text" id="product_description" class="form-control mb-4" placeholder="Enter description" required="" name="product_description" style="
  height: 145px;
"></textarea>
<label> Product's Category </label>
  <select  id="category" class="form-control mb-4" placeholder="Product Category" required="" name="category">
  </select>
  <label> Product's Sub Category </label>
  <select  id="sub_category" class="form-control mb-4" placeholder="Product Sub-Category" required="" name="sub_category">
  </select>
  <input type="number" id="price_per_ctn" class="form-control mb-4" min="0" placeholder="Price per CTN ($$$)" required="" name="price_per_ctn"><label> Choose value metric </label>

<select id="product_value" name="product_value" class="form-control mb-4" value="All" required="">
 
</select>
    
  <div class="input-group mb-4">
      
      <div class="custom-file">
          <input type="file" class="custom-file-input" accept="image/*" capture="" id="product_pic" required="" aria-describedby="fileInput" name="product_pic">
          <label class="custom-file-label" for="product_pic">Add picture of Product</label>
      </div>
  </div>
  
  <input type="number" id="barcode" class="form-control mb-4" placeholder="Enter Barcode" required="" name="barcode">

  <input type="number" id="weight" step="0.1" class="form-control mb-4" min="0" placeholder="Enter Weight ( KGs )" required="" name="weight">

   <input type="number" id="per_ctn_quantity" step="1" class="form-control mb-4" min="0" placeholder="Enter per CTN quantity" required="" name="per_ctn_quantity">


    <label> Packaging Dimensions' Details ( ft e.g 2.3 feet) </label>
  <div style="
  display: flex;
">

    <input type="number" id="length" step="0.1" class="form-control mb-4" min="0" required="" placeholder="Length" style="
  width: 32%;
  margin-right: 15px;
" name="product_length">


    <input type="number" id="width" step="0.1" class="form-control mb-4" min="0" required="" placeholder="Width" style="
  width: 32%;
  margin-right: 15px;
" name="product_width">


    <input type="number" id="height" step="0.1" class="form-control mb-4" min="0" required="" placeholder="Height" style="
  width: 32%;
" name="product_height">

  </div>
<input type="number" id="quantity" step="1" class="form-control mb-4" min="0" required="" placeholder="Quantity Available" name="product_quantity"><label> Enter sugested export region </label>

<select id="product_region" name="product_region" class="form-control mb-4" value="All" required="" placeholder="Select the region where this product sells most">
  <option value="All">All</option>
  <option value="Africa">Africa</option>
  <option value="Asia">Asia</option>
  <option value="America">America</option>
  <option value="Europe">Europe</option>
  <option value="Middle East">Middle East</option>
</select>

<label> Product's sale authorization information </label>
<br><input type="radio" id="uae_export" name="uae_export" required="" value="UAE" style="
  margin-right: 30px;
"><label> Can Sell in UAE also </label> 
<input type="radio" id="uae_export" name="uae_export" required="" value="Export" style="
  margin-right: 30px;
  margin-left: 30px;
"><label> Only Export</label><br><br>




  
  <button class="btn btn-info btn-block" type="submit" name="Submit">Submit for Approval</button>


</form></div></div>
  



<div class="hiddendiv common"></div>
<script>
  $(document).ready(function(){
      $('input[type="file"]').change(function(e){
          var fileName = e.target.files[0].name;
          alert('The file "' + fileName +  '" has been selected.');
      });
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
</body></html>