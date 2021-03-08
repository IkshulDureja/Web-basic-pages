<?php

include_once("signUp-connection.php");
$uid=$_POST["txtUid"];
$pwd=$_POST["txtPwd"];
$mob=$_POST["txtMob"];
$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];

$query="update profile set pwd='$pwd',mob='$mob',picname='$orgName' where uname='$uid'";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "<h2>You are Updated up successfully...</h2>";
}
else
	echo $msg;
?>