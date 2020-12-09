<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
          //making connection
          $conn = require '../connection.php';
          $Vendorid = $_GET['VendorEmail'];
          $barcode = $_GET['ProductBarcode'];
          // echo $barcode;
          $category = $_GET['CategorySelected'];
          // echo $category;
          $subcategory = $_GET['SubCategorySelected'];
          // echo $subcategory;
          $Description = $_GET['DescriptionSelected'];
          // echo $Description;
          $image = $_GET['ImageSelected'];
          $image = str_replace("http://localhost/Freelance","/opt/lampp/htdocs/Freelance",$image);
          // echo $image;

        
          $FirstTime = $_GET['IsFirstTime'];
          if ($FirstTime==0){
          $updateProduct = "UPDATE `Product` SET 
                            `ImagePath`= '".$image."',
                            `Description`='".$Description."'
                             WHERE Barcode = '".$barcode."' ";

         mysqli_query($conn,$updateProduct);

        
        //commision setting and updating price
        $commisionQuery = "SELECT * FROM `Product` WHERE  Barcode = '$barcode' ";
        $rez = mysqli_query($conn,$commisionQuery);
        $followingdata = $rez->fetch_assoc();
        $Commision = $followingdata['Commision'];
        $updatedPriceWithCommision = "SELECT * FROM  `Vendors_Products` 
        WHERE  Barcode = '$barcode' AND Vendor_id = '$Vendorid'  ";
        $results = mysqli_query($conn,$updatedPriceWithCommision);
        $followingdata = $results->fetch_assoc();
        $previousPrice = $followingdata['price_per_ctn'];
        $newPrice = $previousPrice + (($previousPrice/100)*$Commision);
        $query = "UPDATE `Vendors_Products` SET  price_per_ctn = '$newPrice' WHERE  Barcode = '$barcode' AND Vendor_id = '$Vendorid' ";
        mysqli_query($conn,$query);


         header('Location: view_vendor_product_requests.php');
      }

      if ($FirstTime==1){
        $Commision = $_GET['ProductCommission'];
        $updateProduct = "UPDATE `Product` SET 
                          `ImagePath`= '".$image."',
                          `Product_Category`='".$category."',
                          `productSubCategory`='".$subcategory."',
                          `Commision`='".$Commision."',
                          `Description`='".$Description."'
                           WHERE Barcode = '".$barcode."' ";

       mysqli_query($conn,$updateProduct);

       //commision setting and updating price
       $updatedPriceWithCommision = "SELECT * FROM  `Vendors_Products` 
                                      WHERE  Barcode = '$barcode' AND Vendor_id = '$Vendorid'  ";
       $results = mysqli_query($conn,$updatedPriceWithCommision);
       echo $updatedPriceWithCommision;
       $followingdata = $results->fetch_assoc();
       $previousPrice = $followingdata['price_per_ctn'];
       $newPrice = $previousPrice + (($previousPrice/100)*$Commision);
       $query = "UPDATE `Vendors_Products` SET  price_per_ctn = '$newPrice' WHERE  Barcode = '$barcode' AND Vendor_id = '$Vendorid' ";
       mysqli_query($conn,$query);

       header('Location: view_vendor_product_requests.php');
    }


}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>