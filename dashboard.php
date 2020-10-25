<?php
session_start();

if($_SESSION['loggedIn']){
    echo $_SESSION["UserEmail"], "    has logged in \n";
    echo "<br>";
    echo "Usertype is   : ",$_SESSION["UserType"];
}



?>

<html>
</body>
</br></br></br>
POPO MADARCHOD DASHBOARD KA BASIC STRUCTURE BANA
</br></br></br></br></br></br></br>
<a href="add_product_page.php">
   <button>ADD PRODUCT</button>
</a>

</body>

</html