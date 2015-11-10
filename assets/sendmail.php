<?php
$to  ='vivek.gitech11@gmail.com';
$email=$_REQUEST['email'];
$ip = $_SERVER['REMOTE_ADDR'];
$name = $_POST["name"];
$locationDetails = file_get_contents("http://ipinfo.io/{$ip}/json");
$message1=$_REQUEST['message'];
$message=$message1 . "

-------------------------------------------------------------------------------

" . $locationDetails;
$subject = "I need help with...";
								
if(isset($email))
{
	$headers1 = "From:".$name."<".$email.">\r\n";
	$headers1 .= "MIME-Version: 1.0\r\n";
	$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";	
	mail($to, $subject, $message, $headers1);	
}
?>