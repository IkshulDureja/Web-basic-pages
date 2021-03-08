<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $uname=$_POST["txtName"];
    $pwd=$_POST["txtPwd"];
    $roll=$_POST["txtRoll"];
    $mob=$_POST["txtMob"];
    $email=$_POST["txtEmail"];
    $btn=$_POST["btn"];
    $orgName=$_FILES["profilePic"]["name"];
    $tmpName=$_FILES["profilePic"]["tmp_name"];
    
    ?>
    <table>
        <tr>
            <td>
                UserName
            </td>
            <td>
                <?php echo $uname; ?>
            </td>
        </tr>
    </table>
</body>

</html>
