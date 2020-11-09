<?php

error_reporting(0);
session_start();
require '../common_files/functions.php';
 // check if that session is true, else redirect to the login page  
if($_SESSION['loggedIn']){
    //allow
    $user = $_SESSION["UserEmail"];
    //making connection
    $conn = require '../connection.php';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST["Submit"])){
      $csv_mimetypes = array(
        'text/csv',
        'application/csv',
        'text/comma-separated-values',
        'application/excel',
        'application/octet-stream',
        'application/txt',
    );
    
    if (in_array($_FILES['product_file_upload']['type'], $csv_mimetypes)) {
        // possible CSV file
        // could also check for file content at this point
        $the_big_array = csv_to_array($_FILES['product_file_upload']['tmp_name'], $delimiter=',');
        $temp_array = [];
        $total_counter = 0;
        $success_counter = 0;

        foreach($the_big_array as $item) {
          $temp = bulk_insertion($item['Unit_Value'],
          $item['Production_Description'],
          $item["Brand_Name"],
          $item['Product_Name'],
          $item['Category'],
          $item['Sub_Category'],
          $item['Price_per_Ctn'],
          $item['Barcode'],
          $item['Weight'],
          $item['Per_Ctn_Quantity'],
          $item['Length'],
          $item['Weight'],
          $item['Height'],
          $item['Quantity'],
          $item['ProductRegion'],
          $item['UAE_ALL'],
          $conn);
          $total_counter = $total_counter+1;
          $success_counter = $success_counter+$temp;
          
        
      }
      $result_message = "Out of Total :".$total_counter." , ".$success_counter."items have been successfully stored";
      echo "<script type='text/javascript'>alert('$result_message');</script>";
    }
    else{
      $message = "The file format is not supported. Please upload a valid file with .csv extension";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }



    }
  }
  else{
    //redirect to the login page
    header('Location: ../index.php'); }


?>


<!DOCTYPE html>
<!-- saved from url=(0068)file:///Users/rafayabbas/Documents/Personal/VAC/add_product_page.php -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style="">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Add in Bulk</title>
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
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<style>
  .tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

button {
    display: inline-block;
    height: 60px;
    padding: 0;
    margin: 0;
    vertical-align: top;
    width: 60px;
}

#close-image img {
    display: block;
    height: 60px;  
    width: 80px;
}

#close-CSS {
    background-image: url( 'images/ms-excel-logo.png' );
    background-size: 100px 130px;
    height: 134px;  
    width: 104px;
}


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


    <!-- Material input -->
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
<form action="add_products_bulk_page.php" method="post" enctype="multipart/form-data" style="
    width: 100%;  
">
</br>
    <div class="text-center">
        <p class="h4 mb-4">Add Products</p>

        <p>Increase your sales by increasing diversity</p>

        
    </div>
<p>Do you want to upload products individually. 
        <b> 
        <a href="add_product_page.php" >Click here</a></b> 

</p>
<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>



<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" name = "product_file_upload" required aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div> 
  <br><br>
    <button class="btn btn-info btn-block" name="Submit" type="submit">Submit for Approval</button>


</form></div></div>
  



<div class="hiddendiv common"></div>

<script>
  $(document).ready(function(){
      $('input[type="file"]').change(function(e){
          var fileName = e.target.files[0].name;
          alert('The file "' + fileName +  '" has been selected.');
      });
  });
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


    <script>
        var data = [
      // [62,'dada','ACHA','na leyna ye wala','kg',21,21,'Bevrages','softdrink','Africa','UAE',22,22,22,22,22,16]
    ];
    
    
    function download_csv() {
        var csv = 'Barcode,Product_Name,Brand_Name,Production_Description,Unit_Value,Per_Ctn_Quantity,Price_per_Ctn,Category,Sub_Category,ProductRegion,UAE_ALL,Price,Weight,Length,Width,Height,Quantity\n';
        data.forEach(function(row) {
                csv += row.join(',');
                csv += "\n";
        });
    
        console.log(csv);
        var hiddenElement = document.createElement('a');
        hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
        hiddenElement.target = '_blank';
        hiddenElement.download = 'SampleBulkUpload.csv';
        hiddenElement.click();
}
</script>

<!-- <button style="background: url(images/ms-excel-logo.png)" onclick="download_csv()">Download CSV</button> -->
</br></br></br>
<center>
  <b>
<p style="color:blue;">If you do not know how to user Bulk Upload, Please click on the "Excel" button below to download sample format. 
</b>
</p >
<p style="color:red;">A sample row has already been filled for your convinience, Please remove it. 

</p>
</center>
</br></br>
<center >
<button onclick="download_csv()"  id="close-image"  ><img  src="images/ms-excel-logo.png"></button>
</center>
</br>

<center>
<a href="#" data-html="true" data-toggle="tooltip" title="1) The first row alread added is a dummy for your understanding, please remove it.
 2) Barcode is unique for each item. If you already have this item then it will not be updated.
 3) Quantity shall not be updated from here . To update quantity go to update quantity.
 4) In column UAE_ALL Type UAE if your product is valid for UAE sales and type Export if your product is also elligible for export
 5) In the column named Product Region type in the region in which your product is mostly sold.
 6) Information related to a single product should be filled in a single row.
 7) Please use the value matrics such as kg or lt for kilogram and litre.
 8) Once you have filled in all the information required click on browse, then upload and submit for approval">For information on how to fill this Excel sheeet hover over this text</a>

</center>
  </body></html>