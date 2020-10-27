<?php
session_start();

if($_SESSION['loggedIn']){
    echo $_SESSION["UserEmail"], "    has logged in \n";
    echo "<br>";
    echo "Usertype is   : ",$_SESSION["UserType"];
}
else{
    //redirect to the login page
    header('Location: /index.php'); }



?>

<html>
</body>
</br></br></br>
POPO MADARCHOD DASHBOARD KA BASIC STRUCTURE BANA
</br></br></br></br></br></br></br>
<a href="add_product_page.php">
   <button>ADD PRODUCT</button>
</a>

</br></br></br>
<a href="add_product_bulk_page.php">
   <button>ADD PRODUCT IN BULK</button>
</a>

</br></br></br>
<a href="vendor_product_status.php">
   <button>CHECK PRODUCT STATUS</button>
</a>


</br></br></br>
<a href="see_all_products.php">
   <button>Product List</button>
</a>

</body>

</html