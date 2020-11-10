<?php
function UploadVendorDocs($fname) {
    $destination_path = getcwd().DIRECTORY_SEPARATOR;
    $destination_path = $destination_path.="uploads/";
    $target_path = $destination_path . basename($trade);
    $count = 0;
    if (move_uploaded_file($_FILES['PassportImage']['tmp_name'], $target_path)){
        return true;
    }
    else{
        return false;
    }
}

function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}


function delete_vendor_while_update($email){
  $conn = require '../connection.php';
 
//   echo $email;
  $sql = "DELETE from `Vendor` where Email = '$email'  ";
  $res = mysqli_query($conn,$sql);
//   echo $sql;


  //removing files
  $sql2 = "SELECT * from `Vendor` where Email = '$email'";
  $res = mysqli_query($conn,$sql2);
  $followingdata = $res->fetch_assoc();
  $followingdata['Trade_Lisence'] = str_replace("/opt/lampp/htdocs/Freelance","",$followingdata['Trade_Lisence']);
  $followingdata['VATForm'] = str_replace("/opt/lampp/htdocs/Freelance","",$followingdata['VATForm']); 
  $followingdata['Passport/Emirateid'] = str_replace("/opt/lampp/htdocs/Freelance","",$followingdata['Passport/Emirateid']);
  // echo  $followingdata['Passport/Emirateid'];
  unlink($followingdata['Trade_Lisence']);
  unlink($followingdata['VATForm']);
  unlink($followingdata['Passport/Emirateid']);


// inserting new vendor information in users table
$sql = "DELETE FROM `Users`where `Email`='".$email."'";        
mysqli_query($conn,$sql);

}


function bulk_insertion($product_unit,
                        $product_description,
                        $brand_name,
                        $product_name,
                        $price_per_ctn,
                        $barcode,
                        $weight,
                        $per_ctn_quantity,
                        $length,
                        $width,
                        $height,
                        $quantity,
                        $product_region,
                        $UAE_ALL,
                        $conn){

        $product_unit = $product_unit;
        $user = $_SESSION["UserEmail"];
        $product_description = $product_description;
        $brand_name=$brand_name;
        $product_name=$product_name;
        $product_category="-";//$product_category;
        $product_sub_category="-";//$product_sub_category;
        $price_per_ctn = $price_per_ctn;
        $barcode = $barcode;
        $weight = $weight;
        $per_ctn_quantity = $per_ctn_quantity;
        $length = $length;
        $width = $width;
        $height = $height;
        $quantity = $quantity;
        $product_region = $product_region;
        $UAE_ALL = $UAE_ALL;
        $product_image_target_path = "BulkImage";
        $worked = 0;

        $message = "Error";
        //checking if that kind of product already exists in our Database
        $sql = "SELECT * FROM `Product` where Barcode='".$barcode."' and Approved = 1";
        $product_exists = mysqli_query($conn,$sql);
        //means product does not exist
        if (mysqli_num_rows($product_exists)==0){
          //if does not exist now adding the product in our databaswe
          $sql = "INSERT INTO `Product`(`Barcode`, `ImagePath`, `Product_Category`,`productSubCategory`, `Product_Name` , `Brand_Name`,`Description`,`Unit`,`Approved` ) 
                  VALUES ('".$barcode."','".$product_image_target_path."','".$product_category."','".$product_sub_category."' ,'".$product_name."' , '".$brand_name."' ,'".$product_description."' , '".$product_unit."',0 )";
          if (mysqli_query($conn,$sql)){
            $message = "New Product added in Inventory";
          }
        }

        
        //checking if product already exists for that vendor
        $check_product_for_vendor = "SELECT * FROM `Vendors_Products` WHERE Barcode = '".$barcode."' and Vendor_id = '".$user."' ";
        $product_exists_for_vendor = mysqli_query($conn,$check_product_for_vendor);
        if (mysqli_num_rows($product_exists_for_vendor)==0){

        //adding that product for that vendor
        $sql = "INSERT INTO `Vendors_Products`(`Barcode`, `price_per_ctn`, `weight`,`Quantity` ,`per_ctn_quantity`, `length`, `width`, `height`, `product_region`, `UAE_ALL`, `Vendor_id` , `Approved`) 
                VALUES ('".$barcode."','".$price_per_ctn."','".$weight."','".$quantity."','".$per_ctn_quantity."','".$length."','".$width."','".$height."',
                        '".$product_region."','".$UAE_ALL."','".$user."',0)";
                    
                
                if (mysqli_query($conn,$sql)){
                  if (strpos($message, 'Error') !== false) {
                    $message = "The product has been added for you and sent for approval";$worked = 1;
                  }
                  $message = $message."  . The product has been added for you and sent for approval";$worked = 1;
                }
                else{
                  echo mysqli_error($conn);
                  $message = $message."  . The product could not be added for you";
                }

        }
        else{
          $message = $message."  . A product with same barcode exists for you, to add quantity go to update stock";
        }

        return $worked;
 
}


?>