<? php
    
    include_once("signUp-connection.php");
$umob=$_GET["umob"];
$uname=$_GET["uname"];
$query=" update profile set mob='$umob' where uid='$uname'";
    mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);

if($msg=="")
{
	echo "<h2>Profile Updated!!</h2>";
}
else
	echo $msg;
    
?>
    