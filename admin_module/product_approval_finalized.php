<?php
session_start();

if($_SESSION['loggedIn'] and  ($_SESSION["UserType"]=="admin")){
          //making connection
          $conn = require '../connection.php';
          $barcode = $_GET['ProductBarcode'];
          echo $barcode;
          $category = $_GET['CategorySelected'];
          echo $category;
          $subcategory = $_GET['SubCategorySelected'];
          echo $subcategory;
          $Description = $_GET['DescriptionSelected'];
          echo $Description;
          $image = $_GET['ImageSelected'];
          $image = str_replace("http://localhost/Freelance","/opt/lampp/htdocs/Freelance",$image);
          echo $image;

          $updateProduct = "UPDATE `Product` SET 
                            `ImagePath`= '".$image."',
                            `Product_Category`='".$category."',
                            `productSubCategory`='".$subcategory."',
                            `Description`='".$Description."'
                             WHERE Barcode = '".$barcode."' ";

         mysqli_query($conn,$updateProduct);
         header('Location: view_vendor_product_requests.php');


}
else{
  //redirect to the login page
  header('Location: ../index.php'); }


?>