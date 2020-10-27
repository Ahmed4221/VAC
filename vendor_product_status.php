<?php
session_start();

if($_SESSION['loggedIn']){
$user = $_SESSION["UserEmail"];
$conn = require 'connection.php';
$getting_vendor_products_sql = "SELECT * FROM `Vendors_Products` where Vendor_id='".$user."' ";
$barcodes = [];
$status = [];
$Qty = [];
$getting_vendor_products = mysqli_query($conn,$getting_vendor_products_sql);
while($row = mysqli_fetch_assoc($getting_vendor_products))
{
  $barcodes[] = $row['Barcode'];
  $status[] = $row['Approved'];  
  $Qty [] = $row['Quantity']; 
}

}
else{
    //redirect to the login page
    header('Location: index.php'); }

?>
<!DOCTYPE html>
<!-- saved from url=(0111)file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/Real%20project/add_product_vendor_1.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./vendor_product_status_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./vendor_product_status_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./vendor_product_status_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./vendor_product_status_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./vendor_product_status_files/style.css">
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

</head>
<body>

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
  <a href="logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Log out
      </a>
</div>
</nav>

<!-- nav end -->


    <div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Product Name</span></th>
                                <th><span>Barcode</span></th>
                                <th ><span>Packaging</span></th>
                                <th><span>Status</span></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                $counter = 0;
                                foreach ($barcodes as $barcode){
                                  $sql = "Select * from `Product` where Barcode = '".$barcode."'";
                                  $res = mysqli_query($conn,$sql);
                                  $followingdata = $res->fetch_assoc();
                                  if ($status[$counter]=="0"){
                                    $output = '<tr>
                                    <td>
                                        
                                        <a href="#" class="user-link">'.$followingdata['Product_Name'].'</a>
                                        
                                    </td>
                                    <td>'.$barcode.'</td>
                                    <td>
                                        <a href="#">'.$Qty[$counter].' Units</a>
                                    </td>
                                    <td>
                                        <span class="product_approval_status">Pending</span>
                                    </td>
                                    
                                    </tr>';

                                  }
                                  if ($status[$counter]=="1"){
                                    $output = '<tr>
                                    <td>
                                        
                                        <a href="#" class="user-link">'.$followingdata['Product_Name'].'</a>
                                        
                                    </td>
                                    <td>'.$barcode.'</td>
                                    <td>
                                        <a href="#">'.$Qty[$counter].' Units</a>
                                    </td>
                                    <td>
                                        <span class="product_approval_status">Approved</span>
                                    </td>
                                    
                                    </tr>';
                                  

                                  }
                                  if ($status[$counter]=="-1"){
                                    $output = '<tr>
                                    <td>
                                        
                                        <a href="#" class="user-link">'.$followingdata['Product_Name'].'</a>
                                        
                                    </td>
                                    <td>'.$barcode.'</td>
                                    <td>
                                        <a href="#">'.$Qty[$counter].' Units</a>
                                    </td>
                                    <td>
                                        <span class="product_approval_status">To be Changed</span>
                                    </td>
                                    
                                    </tr>';
                                  
                                  

                                  }
                                  echo $output;
                                  $counter = $counter + 1;
                                }
                              


                              ?>

                            </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
<script>
  var mystatus= document.getElementsByClassName("product_approval_status");
  console.log(mystatus);
  console.log(mystatus[0].innerText);
  for (i =0; i < mystatus.length;i++)
  {
    console.log(i);
    console.log(mystatus[i].innerText);
    mystatus[i].style.fontWeight = "bold";
    if (mystatus[i].innerText == "Approved"){
      mystatus[i].style.color = "#11bb6d";
     
    }
    else if (mystatus[i].innerText == "Pending")
    {
      mystatus[i].style.color = "#e00303";
      
    }
    else if (mystatus[i].innerText == "To be Changed"){
      mystatus[i].parentNode.innerHTML = '<span class="product_approval_status" style="font-weight: bold; color: rgb(255, 118, 1);margin-right: 34px">To be Changed</span><a href= "edit_added_product_page.php?incoming_barcode='+mystatus[i].parentNode.parentNode.children[1].innerText+'"><button type="submit" name="product_edit_submit" class="btn peach-gradient" style="margin: 0;padding: 6px;width: 80px;border-radius: 30px;position: relative;" >Edit</button></a>';
mystatus[i].parentNode.style.width = "28%";
    }

  }
</script>


</body></html>