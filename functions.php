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

?>