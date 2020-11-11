<?php
session_start();
$conn = require 'connection.php';
$barcode = $_GET['incoming_barcode'];
$user = $_SESSION["UserEmail"];
$showSuggestedChanegs = "SELECT * FROM `VendorProductFeedback` where Barcode = '".$barcode."' and VendorID = '".$user."' and Resolved=0 ";
$SuggestedText = mysqli_query($conn,$showSuggestedChanegs);
$SuggestedChangesfollowingdata = $SuggestedText->fetch_assoc();

//case 1:to show all the previously saved data
if($_SESSION['loggedIn'] and !isset($_POST["Submit"])){



$sql = "SELECT * FROM  `Vendors_Products` where Barcode = '".$barcode."' and Vendor_id = '".$user."'";
$res = mysqli_query($conn,$sql);
$followingdata = $res->fetch_assoc();

$sql = "SELECT * FROM  `Product` where Barcode = '".$barcode."'";
$res = mysqli_query($conn,$sql);
$productfollowingdata = $res->fetch_assoc();



}

//case 2:to submit all the change 
else if(isset( $_POST["Submit"]) and $_SESSION['loggedIn'] ){
            $conn = require 'connection.php';
            $user = $_SESSION["UserEmail"];
            $product_unit = $_POST["product_value"];
            $product_description = $_POST["product_description"];
            $brand_name=$_POST['brand_name'];
            $product_name=$_POST['product_name'];
            $product_category="-";
            $product_sub_category="-";
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
            // $product_pics =$_FILES["product_pic"]["name"];
            // $vendor_product_image_id = $user."_Product_".$barcode."_".$product_pics;
            // $destination_path = getcwd().DIRECTORY_SEPARATOR;
            // $destination_path = $destination_path.="products/";
            // $product_image_target_path = $destination_path . basename($vendor_product_image_id);
            $product_image_target_path = "EditedProduct";


            $message = "Error";            
            //checking if product already exists for that vendor
            $check_product_for_vendor = "DELETE FROM `Vendors_Products` WHERE Barcode = '".$barcode."' and Vendor_id = '".$user."' ";
            $product_delete_for_vendor = mysqli_query($conn,$check_product_for_vendor);
 

            //adding that product for that vendor
            $sql = "INSERT INTO `Vendors_Products`(`Barcode`, `price_per_ctn`, `weight`,`Quantity` ,`per_ctn_quantity`, `length`, `width`, `height`, `product_region`, `UAE_ALL`, `Vendor_id` , `Approved`) 
                    VALUES ('".$barcode."','".$price_per_ctn."','".$weight."','".$quantity."','".$per_ctn_quantity."','".$length."','".$width."','".$height."',
                            '".$product_region."','".$UAE_ALL."','".$user."',0)";
                    
                    if (mysqli_query($conn,$sql)){
                      if (strpos($message, 'Error') !== false) {
                        $message = "The product has been edited for you and sent for approval";
                      }
                      $message = "The product has been edited for you and sent for approval";

                      $Updatecase = "UPDATE `VendorProductFeedback`
                                               SET  Resolved=1 
                                               where Barcode = '".$barcode."' and VendorID = '".$user."' ";
                      mysqli_query($conn,$Updatecase);

                      echo "<script>
                      alert('The product has been edited for you and sent for approval');
                      window.location.href='vendor_dash.php';
                      </script>";

                    }
                    else{
                      echo mysqli_error($conn);
                      $message = $message."  . The product could not be added for you";

                    }

            


            






  }



else{
    //redirect to the login page
    header('Location: ../index.php'); }

?>
<!-- saved from url=(0068)file:///Users/rafayabbas/Documents/Personal/VAC/add_product_page.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>

<!-- saved from url=(0111)file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/Real%20project/add_product_vendor_1.php -->

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./edit_added_product_page_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./edit_added_product_page_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./edit_added_product_page_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./edit_added_product_page_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./edit_added_product_page_files/style.css">


  <link rel="stylesheet" href="../admin_module/Common_files/custom_css_all.css">
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
<script src="./edit_added_product_page_files/jquery.min.js" type="text/javascript"></script>




  <!-- Start your project here-->  
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
  <a class="nav-link waves-effect waves-light" href="vendor_dash.php">Home
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
  <a href="../logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Log out
      </a>
</div>
</nav>

<!-- nav end -->

<div class = "my_custom_card">
  <div class = "row">
    <div class = "col-lg-2 col-md-3"></div>
    <div class = "col-lg-8 col-md-6">
      <h3 class = "card_heading">Changes Suggested by Admin</h3>
      <p class = "paragraph_tag" style= "text-align: center;">

      <?php echo $SuggestedChangesfollowingdata['Suggestion']; ?>

      </p>
    </div>
  </div>
  </div>
    <!-- Material input -->
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
  <form style="
  width: 100%;  
" enctype="multipart/form-data" method="post" action="edit_added_product_page.php">

  <div class="text-center">
      <p class="h4 mb-4">Edit Product</p>

      <p>Increase your sales by increasing diversity</p>

      
  </div>

  <?php
  echo '<label> Brand Name </label>';
  $temp = '<input type="text" id="brand_name" readonly class="form-control mb-4" value='.$productfollowingdata['Brand_Name'] .' placeholder='.$productfollowingdata['Brand_Name'] .' required="" name="brand_name">';
  echo $temp;

  echo '<label> Product Name </label>';
  $temp = '<input type="text" id="product_name" readonly class="form-control mb-4" value='.$productfollowingdata['Product_Name'].' placeholder='.$productfollowingdata['Product_Name'].' required="" name="product_name">';
  echo $temp;

  echo '<label> Products Description </label>';
  $temp = '<textarea rows="10" type="text" readonly id="product_description" class="form-control mb-4" value='.$productfollowingdata['Description'].' placeholder='.$productfollowingdata['Description'].' required="" name="product_description" style="
  height: 145px;
"></textarea>';
  echo $temp;
  
  
  
  echo '<label> Price Per Ctn </label>';
  $temp = '<input type="number" id="price_per_ctn" class="form-control mb-4" min="0" value='.$followingdata['price_per_ctn'].' placeholder='.$followingdata['price_per_ctn'].' required="" name="price_per_ctn"><label> Choose value metric </label>';
  echo $temp;

  echo '<label> Products Metric Value </label>';
  echo '<select id="product_value" name="product_value" class="form-control mb-4" value="All" required="">';
  $sql =  "SELECT * FROM `Value_Metrics`";
  $metric_result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($metric_result))
  {
      $val = $row['Symbol'];
      
      $str =  '<option value='.$val.'>'.$val.'</option>';
      echo $str;
  }
 
  echo '</select>';
    
  echo '<label> Products Barcode </label>';
  echo '<input type="number" id="barcode" readonly class="form-control mb-4" value='.$barcode.' placeholder='.$barcode.' required="" name="barcode">';
  echo '<label> Products Weight </label>';
  echo '<input type="number" id="weight" step="0.1" class="form-control mb-4" min="0" value='.$followingdata['weight'].' placeholder='.$followingdata['weight'].' required="" name="weight">';
  echo '<label> Products Per Ctn Quantity </label>';
  echo' <input type="number" id="per_ctn_quantity" step="1" class="form-control mb-4" min="0" value='.$followingdata['per_ctn_quantity'].' placeholder='.$followingdata['per_ctn_quantity'].' required="" name="per_ctn_quantity">';


    echo'<label> Packaging Dimensions Details ( ft e.g 2.3 feet) </label>';

  echo'  
  <div style="
  display: flex;
">

<span style="
    display: block;
">
    <label> Length </label>
<input type="number" id="length" step="0.1" class="form-control mb-4" min="0" required="" value='.$followingdata['length'].' placeholder='.$followingdata['length'].' style="
  width: 90%;
  /* margin-right: 15px; */
" name="product_length">
</span>

<span style="
    display: block;
">
<label> Width </label>
<input type="number" id="length" step="0.1" class="form-control mb-4" min="0" required="" value='.$followingdata['width'].' placeholder='.$followingdata['width'].' style="
  width: 90%;
  /* margin-right: 15px; */
" name="product_width">
</span>

<span style="
    display: block;
">
<label> Height </label>
<input type="number" id="length" step="0.1" class="form-control mb-4" min="0" required="" value='.$followingdata['height'].' placeholder='.$followingdata['height'].' style="
  width: 90%;
  /* margin-right: 15px; */
" name="product_height">
</span>



  </div>

  <label> Quantity </label>  
<input type="number" id="quantity" step="1" class="form-control mb-4" min="0" required="" value='.$followingdata['Quantity'].' placeholder='.$followingdata['Quantity'].' name="product_quantity"><label> Enter sugested export region </label>

<select id="product_region" name="product_region" class="form-control mb-4" value="All" required="" value='.$followingdata['product_region'].' placeholder='.$followingdata['product_region'].'>
  <option value="All">All</option>
  <option value="Africa">Africa</option>
  <option value="Asia">Asia</option>
  <option value="America">America</option>
  <option value="Europe">Europe</option>
  <option value="Middle East">Middle East</option>
</select>

<label> Products sale authorization information </label>
<br><input type="radio" id="uae_export" name="uae_export" required="" value="UAE" style="
  margin-right: 30px;
"><label> Can Sell in UAE also </label> 
<input type="radio" id="uae_export" name="uae_export" required="" value="Export" style="
  margin-right: 30px;
  margin-left: 30px;
"><label> Only Export</label><br><br>



';

?>
<button class="btn btn-info btn-block" type="submit" name="Submit">Submit Changes for Approval</button>
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