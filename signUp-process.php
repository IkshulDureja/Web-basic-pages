<?php

include_once("signUp-connection.php");
$uname=$_POST["txtName"];
$pwd=$_POST["txtPwd"];
$roll=$_POST["txtRoll"];
$mob=$_POST["txtMob"];
$email=$_POST["txtEmail"];
$btn=$_POST["btn"];
$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];

$query="insert into profile values('$uname','$pwd','$roll','$mob','$email','$orgName')";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "<h2>You are signed up successfully...</h2>";
}
else
	echo $msg;



?>