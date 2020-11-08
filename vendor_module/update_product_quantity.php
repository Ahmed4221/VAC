<?php
session_start();

if($_SESSION['loggedIn']){
  $user = $_SESSION["UserEmail"];
  $conn = require 'connection.php';
  $getting_vendor_products_sql = "SELECT * FROM `Vendors_Products` where Vendor_id='".$user."' ";
  $barcodes = [];
  $price = [];
  $Qty = [];
  $getting_vendor_products = mysqli_query($conn,$getting_vendor_products_sql);
  while($row = mysqli_fetch_assoc($getting_vendor_products))
  {
    $barcodes[] = $row['Barcode'];
    $price[] = $row['price_per_ctn'];  
    $Qty [] = $row['Quantity']; 
  }
  
  }
  else{
      //redirect to the login page
      header('Location: index.php'); }

?>

<!DOCTYPE html>
<!-- saved from url=(0073)file:///Users/rafayabbas/Documents/Personal/VAC/vendor_product_status.php -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style="">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Update Quantity</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  
  <!-- Google Fonts Roboto -->
  
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./add_products_bulk_page_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./add_products_bulk_page_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <!-- style css -->
    <link rel="stylesheet" href="./mydatatable_files/typography.css">
    <link rel="stylesheet" href="./mydatatable_files/responsive.css">
<!-- modernizr css -->
    <script src="./mydatatable_files/modernizr-2.8.3.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
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
                                <th><span>Quantity</span></th>
                                <th><span>New Quantity</span></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                            $counter = 0;
                                            foreach ($barcodes as $barcode){
                                                $sql = "Select * from `Product` where Barcode = '".$barcode."'";
                                                $res = mysqli_query($conn,$sql);
                                                $followingdata = $res->fetch_assoc();

                                            $output = '<tr>
                                            <td>
                                                
                                                <a href="file:///Users/rafayabbas/Documents/Personal/VAC/vendor_product_status.php#" class="user-link">'.$followingdata['Product_Name'].'</a>
                                                
                                            </td>
                                            <td contenteditable="">'.$barcode.'</td>
                                            <td>
                                                <a href="file:///Users/rafayabbas/Documents/Personal/VAC/vendor_product_status.php#">'.$Qty[$counter].'</a>
                                            </td>
                                            <td style="
                                                padding: 0;
                                                padding-top: 8px;">
                                            <a href = "update_product_quantity_2.php?barcode='.$barcode.'&Product_Name='.$followingdata['Product_Name'].'&Quantity='.$Qty[$counter].'">
                                            <button class="btn btn-info btn-block"  type="submit" name="Submit" style="
                                                width: 60%;
                                                border-radius: 35px;
                                                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 26%, rgba(0,212,255,1) 100%);
                                                height: 41px;
                                            ">Change</button>
                                            </a>
                                            </td>
                                            
                                        </tr>';
                                                        
                                                $counter = $counter+1;
                                                echo $output;
                                            }

                                        ?>


                                
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
      mystatus[i].parentNode.innerHTML = '<span class="product_approval_status" style="font-weight: bold; color: rgb(255, 118, 1);margin-right: 34px">To be Changed</span><form action="" method="post" style = "display:inline-block;"><button type="submit" name="product_edit_submit" class="btn peach-gradient" style="margin: 0;padding: 6px;width: 80px;border-radius: 30px;position: relative;">Edit</button></form>';
mystatus[i].parentNode.style.width = "28%";
    }

  }
</script>

<script src="./mydatatable_files/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./mydatatable_files/popper.min.js"></script>
    <script src="./mydatatable_files/bootstrap.min.js"></script>
    <script src="./mydatatable_files/owl.carousel.min.js"></script>
    <script src="./mydatatable_files/metisMenu.min.js"></script>
    <script src="./mydatatable_files/jquery.slimscroll.min.js"></script>
    <script src="./mydatatable_files/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="./mydatatable_files/jquery.dataTables.js"></script>
    <script src="./mydatatable_files/jquery.dataTables.min.js"></script>
    <script src="./mydatatable_files/dataTables.bootstrap4.min.js"></script>
    <script src="./mydatatable_files/dataTables.responsive.min.js"></script>
    <script src="./mydatatable_files/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="./mydatatable_files/plugins.js"></script>
    <script src="./mydatatable_files/scripts.js"></script>

</body></html>