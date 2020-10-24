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

?>