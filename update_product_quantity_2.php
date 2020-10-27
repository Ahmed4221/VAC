<?php
    error_reporting(0);
    session_start();
    
    //making connection
    $conn = require 'connection.php';
    $result_message = "";
    if ($_SESSION['loggedIn']){
          if(isset($_POST["Submit"])){
            $user = $_SESSION["UserEmail"];
              $quantity=$_POST['new_product_quantity'];
                //inserting new suer information in client table

                $sql = "UPDATE `Vendors_Products` SET `Quantity`= '".$quantity."' WHERE Barcode ='".$_GET['barcode']."' and Vendor_id = '".$user."' ";

                if (mysqli_query($conn,$sql)) {
                  echo "<script>
                  alert('Congratulations! Your Quantity has been updated');
                  window.location.href='update_product_quantity.php';
                  </script>";

                } else {
                  $result_message= 'Sorry there was an error in updating the quantity. Please try again';
                  echo "<script type='text/javascript'>alert('$result_message');</script>";

                }
                

        
        }
    }

  else{
    //redirect to the login page
    header('Location: index.php');
    // echo "Not logged in"; }
  }


?>
<!DOCTYPE html>
<!-- saved from url=(0075)file:///Users/rafayabbas/Documents/Personal/VAC/update_product_quantity.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="file:///Users/rafayabbas/Documents/Personal/ecommerce%20daada%20project/MDB-Free_4.19.1/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./update_product_quantity_2_files/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="./update_product_quantity_2_files/css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./update_product_quantity_2_files/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./update_product_quantity_2_files/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./update_product_quantity_2_files/style.css">
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

<form enctype="multipart/form-data" method="post" action="update_product_quantity_2.php?barcode=<?php echo $_GET['barcode']?>" style="
    border-width: 2px;
">
    <div class="container bootstrap snippets bootdey" style="
    border-width: 1px;
    border-color: #ffffff;
    background-color: whitesmoke;
    /* background: linear-gradient(90deg, rgba(246,246,247,1) 0%, rgba(177,176,186,1) 54%, rgba(106,103,106,1) 97%); */
    border-style: groove;
    -webkit-box-shadow: 0px 0px 22px 1px rgba(0,0,0,0.31);
    -moz-box-shadow: 0px 0px 22px 1px rgba(0,0,0,0.31);
    box-shadow: 0px 0px 22px 1px rgba(0,0,0,0.31);
    border-radius: 10px;
">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    
<div class="table-responsive">
                        <table class="table user-list" style="margin-top: 32px;margin-bottom: 0;">
                            <thead>
                                <tr style="
    text-align: center;
">
                                <th style="
"><span style="">Product Name</span></th>
                                <th><span>Barcode</span></th>
                                <th><span>Current Quantity</span></th>
                                <th><span>New Quantity</span></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr style="
    text-align: center;
">
                                  <td>
                                      
                                      <a href="file:///Users/rafayabbas/Documents/Personal/VAC/vendor_product_status.php#" class="user-link"><?php echo $_GET['Product_Name']; ?></a>
                                      
                                  </td>
                                  <td><?php echo $_GET['barcode']; ?></td>
                                  <td>
                                      <a href="file:///Users/rafayabbas/Documents/Personal/VAC/vendor_product_status.php#"><?php echo $_GET['Quantity']; ?></a>
                                  </td>
                                  
                                  
                              <td style="
    padding-top: 8px;
">
                                        <input type="number" id="new_quantity" step="1" class="form-control mb-4" min="0" required="" placeholder="Change Quantity" name="new_product_quantity" style="
    width: 40%;
    margin: auto;
">
                                    </td></tr>
                              
                                
                                
                            </tbody>
                        </table>
                    <button class="btn btn-info btn-block" onclick="location.href = 'update_product_quantity2.php';" type="submit" name="Submit" style="
    width: 45%;
    border-radius: 35px;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 26%, rgba(0,212,255,1) 100%);
    height: 41px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 2rem;
">Change</button></div>
    

                </div>
            </div>
        </div>
    </div>
</div>
</form>


  
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


</body></html>