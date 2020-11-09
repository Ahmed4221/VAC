<?php
session_start();
if($_SESSION['loggedIn'] and ($_SESSION["UserType"]=="Client" or $_SESSION["UserType"]=="admin")) {
    echo $_SESSION["UserEmail"], "    has logged in \n";
    echo "<br>";
    echo "Usertype is   : ",$_SESSION["UserType"];
}




?>
<html>

<body>
</br></br></br></br></br></br></br>
<a href="../logout.php">
   <button>LOGOUT</button>
</a>
</body>

</html>