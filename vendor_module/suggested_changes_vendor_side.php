<?php
session_start();
require '../common_files/functions.php';
$conn = require '../connection.php';
$notes="";
if($_SESSION['TemporaryloggedIn'] ){
    //   echo "Usertype is   : ",$_SESSION["UserType"];
              //making connection

              
              $email =  $_SESSION["UserEmail"];
            //   echo $email;
              $sql = "SELECT * from `VendorFeedback` where VendorID = '$email'  ";
              
              $res = mysqli_query($conn,$sql);
              $followingdata = $res->fetch_assoc();
              $notes = $followingdata['SuggestedEdit'];



              $sql2 = "SELECT * from `Vendor` where Email = '$email'  ";
              $res = mysqli_query($conn,$sql2);
              $followingdata = $res->fetch_assoc();
              $coming_email = $followingdata['Email'];
              $coming_name = $followingdata['Name'];


              if (isset($_POST['Submit'])){
                  //first deleting the previous records
                  delete_vendor_while_update($coming_email);

                $name =$coming_name; 
                $email=$coming_email;
                $password=$followingdata['Password'];
                $trade =$_FILES["TradeLisenceImage"]["name"];
                //removing spaces
                $trade = preg_replace('/\s+/', '_', $trade);
                $vat =$_FILES["VATImage"]["name"];
                //removing spaces
                $vat = preg_replace('/\s+/', '_', $vat);
                $passport =$_FILES["PassportImage"]["name"];
                //removing spaces
                $passport = preg_replace('/\s+/', '_', $passport);
                if (isset($email) and isset($password) and isset($trade) and isset($vat) and isset($passport)  ) {
                  
                  $trade = $email."_TradeLisence_".$trade;
                  $vat = $email."_VAT_".$vat;
                  $passport = $email."_PASSPORT_".$passport;
                  $counter = 0;
                  $destination_path = getcwd().DIRECTORY_SEPARATOR;
                  $destination_path = $destination_path.="uploads/";
        
                  $passport_target_path = $destination_path . basename($passport);
                  if (move_uploaded_file($_FILES['PassportImage']['tmp_name'], $passport_target_path)){
                    $counter += 1;
                  }
        
                  $vat_target_path = $destination_path . basename($vat);
                  if (move_uploaded_file($_FILES['VATImage']['tmp_name'], $vat_target_path)){
                    $counter += 1;
                  }
                  
                  $trade_target_path = $destination_path . basename($trade);
                  if (move_uploaded_file($_FILES['TradeLisenceImage']['tmp_name'], $trade_target_path)){
                    $counter += 1;
                  }
        
                    //inserting new vendor information
                    $sql = "INSERT INTO `Vendor`(`Name`, `Email`, `Password`, `Trade_Lisence`, `VATForm`, `Passport/Emirateid`, `Approved`)  
                    VALUES ('".$name."','".$email."','".$password."','".$trade_target_path."',
                            '".$vat_target_path."','".$passport_target_path."',0)";
                
                    if (mysqli_query($conn,$sql)) {
                      $counter +=1 ;
        
                    }
                    
                    //inserting new vendor information in users table
                    // $sql = "INSERT INTO `Users`(`Email`, `Password`, `UserType`) VALUES ('".$email."','".$password."','vendor')";        
                    // if (mysqli_query($conn,$sql)) {
                    //   $counter +=1 ;
        
                    // } 
        
                    if ($counter==4){
                      echo "<script>
                      alert('Congratulations! Your Account Changes has been submitted for approval successfully');
                      window.location.href='../index.php';
                      </script>";
                      $sql9 = "UPDATE `VendorFeedback` SET `Resolved`=1 WHERE VendorID = '$email'";
                      $res = mysqli_query($conn,$sql9);
                      
                    }
                    else{
                      //delete records on unsuccessful insertion or moving of files
                      $result_message= 'Sorry there was an error in signing up as vendor. Please try again';
                      echo "<script type='text/javascript'>alert('$result_message');</script>";
                      $sql = "DELETE FROM `Vendor` WHERE `Email`='".$email."' ";
                      $sql = "DELETE FROM `Users` WHERE `Email`='".$email."' ";
                      mysqli_query($conn,$sql);
                      mysqli_query($conn,$sql2);
                      unlink($vat_target_path);
                      unlink($trade_target_path);
                      unlink($passport_target_path);
                    }
        
        
                  
                
                }


              }
  
    }
    else{
      //redirect to the login page
      header('Location: ../index.php');
    }


?>
<!DOCTYPE html>
<!-- saved from url=(0069)file:///Users/rafayabbas/Documents/Personal/VAC/start_sale_page_1.htm -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- flipbox css-->

    <link rel="stylesheet" href="./start_sale_page_1_files/flip_box.css">
    <link rel="shortcut icon" type="image/png" href="file:///Users/rafayabbas/Documents/Personal/srtdash-admin-dashboard-master/srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./start_sale_page_1_files/bootstrap.min.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/font-awesome.min.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/themify-icons.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/metisMenu.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="./start_sale_page_1_files/export.css" type="text/css" media="all">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="./start_sale_page_1_files/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./start_sale_page_1_files/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="./start_sale_page_1_files/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./start_sale_page_1_files/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./start_sale_page_1_files/typography.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/default-css.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/styles.css">
    <link rel="stylesheet" href="./start_sale_page_1_files/responsive.css">

    
    <!-- modernizr css -->
    <script src="./start_sale_page_1_files/modernizr-2.8.3.min.js"></script>

    
</head>
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
<a class="nav-link waves-effect waves-light" href="#">Home
<span class="sr-only">(current)</span>
</a>
</li>


</li></ul>
<ul class="navbar-nav ml-auto nav-flex-icons">



</ul>
<a href="../logout.php" class="btn btn-info btn-lg">
 <span class="glyphicon glyphicon-log-out"></span> Log out
</a>
</div>
</nav>

<!-- nav end -->
    </br>
    <div class="text-center" style="
    margin-bottom: 26px;" >
                    <p class="h4 mb-4">These are your current documents as per your previous submission. </p>
            
                    <p>Kindly scroll below to see changes recommended by admins and upload all your documents again.</p>
            
                    
                </div>

    <!-- page container area start -->
    <div class="page-container sbar_collapsed">
       
      <!-- main content area start -->
      <div class="main-content" style="min-height: 498px;">
          <!-- header area start -->
          
          <!-- header area end -->
          <!-- page title area start -->
          
          <!-- page title area end -->
          <div class="main-content-inner">
          <div class="row"><!-- Dark table start
                  <div class="col-12 mt-5">
                      <div class="card">
                        <div class="card-body" style="
                        height: 140px;
                    ">      
                              <div class="data-tables datatable-dark">
                                  <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                      <div class="row">
                                          <div class="col-sm-12">
                                              <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                  <div class="row"><div class="col-sm-12">
                                                      <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                          <div class="row"><div class="col-sm-12">
                                                              <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                  <div class="row">
                                                                      <div class="col-sm-12"><table id="dataTable3" class="text-center dataTable no-footer dtr-inline" role="grid" aria-describedby="dataTable3_info" style="width: 1294px;">
                                      <thead class="text-capitalize" style="background: linear-gradient(90deg, rgba(4,2,11,1) 0%, rgba(27,0,255,1) 54%, rgba(6,1,6,1) 97%);">
                                          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 252px;" aria-label="Vendor Name: activate to sort column descending" aria-sort="ascending">Vendor Name</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 218px;" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 151px;" aria-label="Trade Licence: activate to sort column ascending">Trade Licence</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 244px;" aria-label="VAT Registration: activate to sort column ascending">VAT Registration</th><th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 189px;" aria-label="Passport / Emirates ID : activate to sort column ascending">Passport / Emirates ID </th></tr>
                                      </thead>
                                      <tbody>
                                                                               
                                               
    
                                     <tr role="row" class="odd">
                                              <td tabindex="0" class="sorting_1"><?php echo $coming_name; ?></td>
                                              <td class="email_table"><?php echo $coming_email; ?></td>
                                              <td class=""> <a href="../vendor_module/uploads/h@h.com_TradeLisence_Screenshot_from_2020-02-26_10-52-00.png" download="TradeLisence" data-popup-open="popup-certificate" class="certificate-image"><img class="popup-certificate-image" src=<?php echo $trade; ?> alt=""></a></td>
                                              <td class=""> <a href="../vendor_module/uploads/h@h.com_VAT_Screenshot_from_2020-03-20_17-54-42.png download=" vat"="" data-popup-open="popup-certificate" class="certificate-image"><img class="popup-certificate-image" src=<?php echo $vat; ?> alt=""></a></td>
                                              <td class=""> <a href="../vendor_module/uploads/h@h.com_PASSPORT_Screenshot_from_2020-06-17_22-58-59.png download=" passport="" emirate_id"data-popup-open="popup-certificate" class="certificate-image"><img class="popup-certificate-image" src=<?php echo $passport; ?> alt=""></a></td>
                                              
                                          </tr></tbody>
                                  </table></div></div></div></div></div></div></div></div></div></div></div></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Dark table end -->
              </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-10 offset-sm-1 col-12">
              <form action=" suggested_changes_vendor_side.php"  method="post" enctype="multipart/form-data" style="width: 100%;  ">
            
                <div class="text-center">
                    <p class="h4 mb-4">Change Information</p>
            
                    <p>Join our team, and reach the client</p>
            
                    
                </div>
            
                <input type="text" disabled name="Name" id="defaultSubscriptionFormName" class="form-control mb-4" value = <?php echo $coming_name; ?>  placeholder=<?php echo $coming_name; ?>  required="">
            
                <input type="email" disabled id="defaultSubscriptionFormEmail" name="defaultSubscriptionFormEmail" class="form-control mb-4" value = <?php echo $coming_email; ?>  placeholder=<?php echo $coming_email; ?> required="">
            
                
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="TradeLisenceImage" id="fileInput" aria-describedby="fileInput" required="">
                        <label class="custom-file-label" for="fileInput">Trade License</label>
                    </div>
                </div>
            
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="VATImage" id="fileInput" aria-describedby="fileInput" required="">
                        <label class="custom-file-label" for="fileInput">VAT Registration Form</label>
                    </div>
                </div>
              
                <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileInput" name="PassportImage" aria-describedby="fileInput" required="">
                            <label class="custom-file-label" for="fileInput">Passport / Emirates ID</label>
                        </div>
                    </div>
              
              
            
                
                <button class="btn btn-info btn-block" name="Submit" type="submit">Submit for Approval</button>
            
            
            </form></div>
    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-1 col-10" style="
">
    <h3 style="margin-left: 5vw;margin-top: 2vh;"> Notes from Admin </h3>
<div class="para_container" name="admin_notes" style="
    background-color: white;
    margin-right: 5vw;
    margin-top: 8vh;
    padding: 2vw;
    /* text-align: center; */
">
    
    <p class="instructions">
        <?php
            echo $notes;
        ?>
    

    </p>
    </div>
</div>
</div>
      </div>
      <!-- main content area end -->

      
      <!-- footer area start-->
      
      <!-- footer area end-->
    </div>
    <!-- page container area end -->
  
    <!-- jquery latest version -->
    <script src="./start_sale_page_1_files/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./start_sale_page_1_files/popper.min.js"></script>
    <script src="./start_sale_page_1_files/bootstrap.min.js"></script>
    <script src="./start_sale_page_1_files/owl.carousel.min.js"></script>
    <script src="./start_sale_page_1_files/metisMenu.min.js"></script>
    <script src="./start_sale_page_1_files/jquery.slimscroll.min.js"></script>
    <script src="./start_sale_page_1_files/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="./start_sale_page_1_files/jquery.dataTables.js"></script>
    <script src="./start_sale_page_1_files/jquery.dataTables.min.js"></script>
    <script src="./start_sale_page_1_files/dataTables.bootstrap4.min.js"></script>
    <script src="./start_sale_page_1_files/dataTables.responsive.min.js"></script>
    <script src="./start_sale_page_1_files/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="./start_sale_page_1_files/plugins.js"></script>
    <script src="./start_sale_page_1_files/scripts.js"></script>

    <!-- Script to Popuplate the form -->
    <script>
      $( document ).ready(function(){
        document.getElementById("defaultSubscriptionFormName").placeholder= document.getElementsByClassName("sorting_1")[0].innerText;
        
        document.getElementById("defaultSubscriptionFormEmail").placeholder= document.getElementsByClassName("email_table")[0].innerText;
       
        // document.querySelector("#dataTable3_wrapper > div:nth-child(1)").style.display="none"
        document.querySelector("#dataTable3_wrapper  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div:nth-child(1)").style.display="none";
        document.querySelector("#dataTable3_wrapper  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div:nth-child(3)").style.display="none";
        document.querySelector("#dataTable3_wrapper  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div  > div:nth-child(2)").style="margin-top:-15px";
      
    })
      </script>

</body></html>