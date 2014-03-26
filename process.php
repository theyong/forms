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

    //Send comfirmation email to the user
	$msg = "Thank you for your info";//EMail message
	
	foreach($_POST as $name => $value) {
		print "$name : $value<br/>";
		$msg .="$name : $value\n";
	} //the dot before the "=" concatonates
	$to = "josh.blumberg@live.com";//Put in your email here
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";	
	mail($to, 'Registration', $msg,$headers);
	echo "Email sent";
?>
