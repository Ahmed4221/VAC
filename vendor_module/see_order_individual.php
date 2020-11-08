<!DOCTYPE html>
<!-- saved from url=(0067)file:///Users/rafayabbas/Documents/Personal/VAC/see_all_orders.php# -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="file:///Users/rafayabbas/Documents/Personal/srtdash-admin-dashboard-master/srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./see_order_individual_files/bootstrap.min.css">
    <link rel="stylesheet" href="./see_order_individual_files/font-awesome.min.css">
    <link rel="stylesheet" href="./see_order_individual_files/themify-icons.css">
    <link rel="stylesheet" href="./see_order_individual_files/metisMenu.css">
    <link rel="stylesheet" href="./see_order_individual_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./see_order_individual_files/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="./see_order_individual_files/export.css" type="text/css" media="all">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="./see_order_individual_files/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./see_order_individual_files/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./see_order_individual_files/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./see_order_individual_files/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./see_order_individual_files/typography.css">
    <link rel="stylesheet" href="./see_order_individual_files/default-css.css">
    <link rel="stylesheet" href="./see_order_individual_files/styles.css">
    <link rel="stylesheet" href="./see_order_individual_files/responsive.css">

    
    <!-- modernizr css -->
    <script src="./see_order_individual_files/modernizr-2.8.3.min.js"></script>

    
</head>

<body>

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

  
    <!-- page container area start -->
    <div class="page-container sbar_collapsed">
       
        <!-- main content area start -->
        <div class="main-content" style="min-height: 382px;">
            <!-- header area start -->
            
            <!-- header area end -->
            <!-- page title area start -->
            
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row"><!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="data-tables datatable-dark">
                                    <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row"><div class="col-sm-12">
                                                        <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row"><div class="col-sm-12">
                                                                <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table id="dataTable3" class="text-center dataTable no-footer dtr-inline" role="grid" aria-describedby="dataTable3_info" style="width: 1291px;">
                                        <thead class="text-capitalize" style="background: linear-gradient(90deg, rgba(4,2,11,1) 0%, rgba(27,0,255,1) 54%, rgba(6,1,6,1) 97%);">
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 317px;" aria-label="Product Name: activate to sort column descending" aria-sort="ascending">Product Name</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 277px;" aria-label="Barcode: activate to sort column ascending">Barcode</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 193px;" aria-label="Quantity: activate to sort column ascending">Quantity</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 312px;" aria-label="Amount: activate to sort column ascending">Amount</th></tr>
                                        </thead>
                                        <tbody>  
                                        <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">Product Name</td>
                                                <td class="">123456876543456</td>
                                                <td class="">46</td>
                                                <td class="">5000</td>
                                                
                                                
                                            </tr><tr role="row" class="even">
                                                <td tabindex="0" class="sorting_1">Product Name</td>
                                                <td class="">123456876543456</td>
                                                <td class="">46</td>
                                                <td class="">5000</td>
                                                
                                                
                                            </tr><tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">Product Name</td>
                                                <td class="">123456876543456</td>
                                                <td class="">46</td>
                                                <td class="">5000</td>
                                                
                                                
                                            </tr></tbody>
                                    </table></div></div></div></div></div>
    <span style="
    display: inline-block;
" id="order_status_container"><h4 style="
    display: inline-block;
"> Status: </h4> <h4 id="order_status" style="
    display: inline-block;
           ">Pending Vendor Approval</h4></span>
    </div></div></div></div></div></div></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="./see_order_individual_files/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./see_order_individual_files/popper.min.js"></script>
    <script src="./see_order_individual_files/bootstrap.min.js"></script>
    <script src="./see_order_individual_files/owl.carousel.min.js"></script>
    <script src="./see_order_individual_files/metisMenu.min.js"></script>
    <script src="./see_order_individual_files/jquery.slimscroll.min.js"></script>
    <script src="./see_order_individual_files/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="./see_order_individual_files/jquery.dataTables.js"></script>
    <script src="./see_order_individual_files/jquery.dataTables.min.js"></script>
    <script src="./see_order_individual_files/dataTables.bootstrap4.min.js"></script>
    <script src="./see_order_individual_files/dataTables.responsive.min.js"></script>
    <script src="./see_order_individual_files/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="./see_order_individual_files/plugins.js"></script>
    <script src="./see_order_individual_files/scripts.js"></script>

    <!-- Script for adding button and doing action on Status -->
    <script>
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
    </script>

</body></html>