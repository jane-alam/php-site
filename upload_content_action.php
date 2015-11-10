<?php
include('connect.php');

$target_path = "images/";

$target_path = $target_path . basename( $_FILES['image_file']['name']); 


if(move_uploaded_file($_FILES['image_file']['tmp_name'], $target_path)) {

$insert="insert into upload_work (_Title,_Image) VALUES ('".$_REQUEST['title']."','".$_FILES['image_file']['name']."')";
mysql_query($insert);

echo '<script language="javascript">alert("File Uploaded Successfully");window.location="/upload_content/";</script>';
exit();
} else{
  	echo '<script language="javascript">alert("There is an Error in File Uploading");window.location="/upload_content/";</script>';
	exit();
  }

?>