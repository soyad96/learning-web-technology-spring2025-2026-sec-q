<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Viewport" content="width=device-width, initial- scale=1.0">
        <title>Document</title>



    </head>
    <body>
        <form action="index.php" method="post">
            <label>quantity :</label><br>
            <input type="text" name="quantity">
            <input type="submit" value="total">



        </form>

    </body>
</html>
<?php
$item="pizza";
$price=4.96;
$quantity=$_POST["quantity"];
$total=null;
$total=$quantity*$price;
echo "you orders is  {$quantity} X {$item}<br>";
echo "the total is{$total} dollars ";




?>
