<?php
    //take everything and put it into the CSV file
    $filename = "formFile.csv";
    $handle = fopen($filename, 'a');
    $msg = "Thank you for registering!";
    $fileInfo = "";
    
    foreach($_POST as $name => $value) {
        print "$name : $value<br/>";
        $msg .= "$name : $value\n";
        $fileInfo .= "$value,";
    }
    $fileInfo .= "\n";

    //Write to file
    fwrite($handle, $fileInfo);
    //Close the file
    fclose($handle);

    //Send comfirmation email to the user
    $to = "josh.blumberg@live.com";//us
    $from = $_POST['email1'];//lead's email
    $first_name = $_POST['first1'];//lead's first name
    $last_name = $_POST['last1'];//lead's last name
    $subject = "MichComp Registration Submission";
    
    $msg = "Thank you for your info";//EMail message
	foreach($_POST as $name => $value) {
		print "$name : $value<br/>";
		$msg .="$name : $value\n";
	}

	$headers = "From: ". $first_name . " " . $last_name ."<". $from . ">\r\n";
	mail($to, $subject, $msg, $headers);
    mail($from, $subject, $msg, $headers);
	echo "Thank you, your registration form has been received! See you at the competition!";
?>
