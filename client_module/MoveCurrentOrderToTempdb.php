<?php
session_start();
$conn = require '../connection.php';

if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {

    $CheckingPreviousORderRunning = "SELECT * FROM OrderInProgressCBM where ClientID =  '".$_SESSION['UserEmail']."' ";
    $res = mysqli_query($conn,$CheckingPreviousORderRunning);

    $OrderID = -1;

    //an order is already in progress
    if (mysqli_num_rows($res)>0){
        $followingdata = $res->fetch_assoc();
        $OrderID = $followingdata['OrderID'];
        //if user updates container update the container in db too
        if ($followingdata['CBM']!=$_GET['allowed_cbm']){
            $sql = "UPDATE  `OrderInProgressCBM` SET CBM = '".$_GET['allowed_cbm']."' WHERE ClientID = '".$_GET['ClientID']."'";
            $updateContainer = mysqli_error($conn,$sql);
        }
    
    }
    else{
        
        $a = mt_rand(100000,999999); 
        $OrderID = $a;
        $InsertOrderFirstTime = "INSERT INTO `OrderInProgressCBM`(`ClientID`, `OrderID`, `CBM`, `CurrentCBM` ) VALUES (
                                                                                                        '".$_SESSION['UserEmail']."',
                                                                                                        '$a',
                                                                                                        '".$_GET['allowed_cbm']."',
                                                                                                        '".$_GET['current_cbm']."')";
        // echo $InsertOrderFirstTime;
        mysqli_query($conn,$InsertOrderFirstTime);

    }



        //Add the orders to database temp
        //************************************************************************************************************************************************* */
        $conn = require '../connection.php';
        $quantiryRequired = $_GET["quantity"];
        $gotAll=0;
        $vendors = array();
        $quantity = array();
        $price = array();
    
    
        $quantityAquired = 0;
        $sql = "SELECT * FROM  `Vendors_Products` where Barcode =  '".$_GET['product_id']."' ORDER BY price_per_ctn ASC  ";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
          
    
          $followingdata = $row;
          $vendors [] = $followingdata['Vendor_id'];
          if ($quantityAquired + $followingdata['Quantity'] >= $quantiryRequired){
            $quantity [] = $quantiryRequired - $quantityAquired  ;
          }
          else{
            $quantity [] = $followingdata['Quantity'];
          }
          $quantityAquired = $quantityAquired + $followingdata['Quantity'];
    
          
          $price [] = $followingdata['price_per_ctn'];
    
          
          
          if ($quantityAquired>=$quantiryRequired){
            $gotAll=1;
          break;
          }
      }

        $counter = 0;
        while ($counter <sizeof($quantity)){
            $vendorid = $vendors[$counter];
            $vendorid = (string)$vendorid;
            $sqlTempInsertion = "INSERT INTO `OrderInProgressItems`(`OrderID`, `Barcode`, `Quantity`, `Price`, `VendorID`, `ClientID`)
             VALUES ('$OrderID',
                    '".$_GET['product_id']."',
                    '$quantity[$counter]',
                    '$price[$counter]',
                    '".$vendorid."',
                '".$_SESSION['UserEmail']."')";
            echo $sqlTempInsertion;
            mysqli_query($conn,$sqlTempInsertion);
            $counter=$counter+1;

        }

        header('Location: order_placed.php');


        
    //************************************************************************************************************************************************** */

    


}

?>