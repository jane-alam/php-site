<?php
include('connect.php');

$target_path = "file/";

$target_path = $target_path . basename( $_FILES['image_file']['name']); 


if(move_uploaded_file($_FILES['image_file']['tmp_name'], $target_path)) {

$insert="insert into upload_file(_Title,_Desc,_File) VALUES ('".$_REQUEST['title']."','".$_REQUEST['desc']."','".$_FILES['image_file']['name']."')";
mysql_query($insert);

echo '<script language="javascript">alert("File Uploaded Successfully");window.location="/upload_file/";</script>';
exit();
} else{
  	echo '<script language="javascript">alert("There is an Error in File Uploading");window.location="/upload_file/";</script>';
	exit();
  }

?>