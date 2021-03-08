<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery-1.8.2.min.js"></script>
</head>

<body>

    <?php

$va=$_POST["valA"];//using name to fetch value
$vb=$_POST["valB"];
$sum=($va)+($vb);
$product=($va)*($vb);
    ?>
    <script>
        if ($("#sum").click(function() {
                <?php
                 echo "Sum= $sum"; 
                 ?>
            }))

        else
        if ($("#product").click(function() {
                <?php
                 echo "Product= $product";
                ?>
            }))

    </script>
</body>

</html>
