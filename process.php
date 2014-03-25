<?php
    //take everything and put it into the CSV file
    $filename = "formFile.csv";
    
    $handle = fopen($filename, 'a');
    $msg = "Thank you for registering!";
    $fileInfo "";
    
    foreach($_POST as $name => $value) {
        print "$name : $value<br/>";
        $msg .= "$name : $value\n";
        $fileInfo .= "$value,";
    }
    $fileInfo .= "\n";

    /*Write to file*/
    fwrite($handle, $fileInfo);
    //now close the file
    fclose($handle);
?>
