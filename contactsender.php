<?php
	// ----------------------------------------- 
	//  The Web Help .com
	// ----------------------------------------- 
	// remember to replace you@email.com with your own email address lower in this code.

	// load the variables form address bar
	$subject1 = "I need help with...";
	$message1 = $_POST["message"];
	$email1 = $_POST["email"];
	$name = $_POST["name"];
	$verification = $_POST["verification"];

	// remove the backslashes that normally appears when entering " or '
	$message = stripslashes($message1); 
	$subject = stripslashes($subject1); 
	$email = stripslashes($email1); 

	// check to see if verificaton code was correct
	$testVariable = md5($verification .'a4xn');
	if($testVariable == $_COOKIE['tntcon']){
		
		$ip = $_SERVER['REMOTE_ADDR'];
		$locationDetails = file_get_contents("http://ipinfo.io/{$ip}/json");
		
		// if verification code was correct send the message and show this page
		mail('vivek.gitech11@gmail.com','Online Form: '.$subject,$message . "

-------------------------------------------------------------------------------

" . $locationDetails,
			"From: $name <$email>");
		
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		
		$mailform_sent=true;
		
	} else {
		$mailform_failed_verification=true;
	}
	echo $mailform_sent;exit;
	require("contact.php");
?>