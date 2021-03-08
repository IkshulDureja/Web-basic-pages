<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    
        #table{
            height: 180px;
            width: 200px;
            text-align: center;
            box-shadow: 0px 0px 15px 1px black;
        }
    
    </style>
</head>

<body>
    <?php

$name=$_POST["UsrNam"];
$tot=0;
$pur="";
$inam="";
$discount=$_POST["discount"];
if(isset($_POST["book"]))
{
    $pur=$_POST["book"].",";
    $tot=$_POST["book"];
    $inam="Books,";
}
if(isset($_POST["mobile"]))
{
    $pur=$pur.$_POST["mobile"].",";
    $tot=$tot+$_POST["mobile"];
    $inam=$inam."Mobile,";
}

if(isset($_POST["laptop"]))
{
    $pur=$pur.$_POST["laptop"];
    $tot=$tot+$_POST["laptop"];
    $inam=$inam."Laptop";
}
if($discount=="10")
{
    $dis=$tot/10;
}
else
    $dis=$tot/5;
//echo $pur;
////echo "hi";
if($pur=="")
    echo "Select Something";
else
{
//    $nl=strlen($inam);
//    $inam=$inam.substr(0,$nl-1);
    $inam=rtrim($inam,",");
    $pur=rtrim($pur,",");
?>
<center>
   Bill Details
   <br><br><br>
    <table rules="all" border="1" id="table">
        <tr>
            <td>Name</td>
            <td>
                <?php
                echo $name;
            ?>
            </td>
        </tr>
        <tr>
            <td>Items Purchased</td>
            <td>
                <?php
                echo $inam;
            ?>
            </td>
        </tr>
        <tr>
            <td>Items Cost</td>
            <td>
                <?php
                echo $pur;
            ?>
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td>
                <?php
                echo $tot;
            ?>
            </td>
        </tr>
        <tr>
            <td>Discount</td>
            <td>
                <?php
                echo $dis;
            ?>
            </td>
        </tr>
        <tr>
            <td>Net</td>
            <td>
                <?php
                echo $tot-$dis;
            ?>
            </td>
        </tr>
    </table>
    </center>
    <?php 
}
    ?>


</body>

</html>
