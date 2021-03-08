<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#update").click(function(){
//                alert("entered");
//                 $("#update").val("Submit");
                $("#name").prop('disabled', false);
                $("#pwd").prop('disabled', false);
                $("#roll").prop('disabled', false);
                $("#mob").prop('disabled', false);
                $("#email").prop('disabled', false);
                 });
            
            
            $("#Submit").click(function(){
//                    alert("entered");   
                    Uname=$("#name").val();
                    Upwd=$("#pwd").val();
                    Uroll=$("#roll").val();
                    Umob=$("#mob").val();
                    Uemail=$("#email").val();
                    alert(Umob);
                    var actionurl="ajax-update.php?umob="+Umob+"&uname="+Uname;
                    $.get(actionurl,function(response)
                    {
                          $("#status").html(response);
                          });
//                   
                     });
           
            
            
        }); 
    </script>
</head>

<body>
    <?php

//echo "entered signin";
include_once("signUp-connection.php");
$uname=$_POST["name"];
$pwd=$_POST["pwd"];

$query="select * from profile where uname='$uname'";//0 or 1 -searchin on primary key
	
	$table=mysqli_query($dbCon,$query);
		
		$count=mysqli_num_rows($table);
		if($count==1)
		{
			$row=mysqli_fetch_array($table);
			$spwd=$row["pwd"];
            if($spwd==$pwd)
            { 
    ?>
<!--
    // echo "signed In";
    // window.open('http://localhost/webd/tik-tak-toe.html');
    // header('Location: http://localhost/webd/Profileshow.php');
-->
    <table border="1" height="300" width="250"> 
       <tr>
           <td colspan="2">
                  <center>
                   <img src="uploads/<?php echo $row["picname"];?>" alt="" height="100" width="100">
                   </center>
           </td>
       </tr>
        <tr>
            <td>
                UserName
            </td>
            <td>
                <input type="text" name="" id="name" value="<?php echo $row["uname"]; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="text" name="" id="pwd" value="<?php echo $row["pwd"]; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>
                RollNo
            </td>
            <td>
                <input type="text" name="" id="roll" value="<?php echo $row["roll"]; ?>"  disabled>
            </td>
        </tr>
        <tr>
            <td>
                MobileNo
            </td>
            <td>
                <input type="text" name="" id="mob" value="<?php echo $row["mob"]; ?>"  disabled>
            </td>
        </tr>
        <tr>
            <td>
                EmailID
            </td>
            <td>
                <input type="text" name="" id="email" value="<?php echo $row["email"]; ?>"  disabled>
            </td>
        </tr>
        <tr>
            <td >
                <center><input type="submit" value="Update Profile" id="update"></center>
            </td>
            <td >
                <center><input type="button" value="Submit" id="Submit"></center>
            </td>
            <span id="status">*</span>
        </tr>
    </table>
    <?php
            }
            else{
                echo "Invalid Password";
            }
		}
	else
	{
		echo "Invalid Username";
		return;
	}
?>
</body>

</html>