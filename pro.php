<?php
include 'connection2.php';
if(isset($_POST['sub'])){
    $pn= $_POST['a'];
    $pr= $_POST['b'];
    $qn= $_POST['c'];
    $da= $_POST['d'];
    mysqli_query($con,"insert into details(product_name,price,quantity,expiry_date)value('$pn','$pr','$qn','$da')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        table{
            margin-top:225px;
        }
        </style>
</head>
<body>
    <form  method="post">
   <center> <table width="200";height="100";>
        <tr>
        <td>Product name</td>
        <td><input type="text" name="a"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="b" ></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="text" name="c" ></td>
        </tr>
        <tr>
            <td>Expiry date</td>
            <td><input type="date" name="d" ></td>
        </tr>
    </table>
    <button type="submit" name="sub">Submit</button>
    </center>
    </form>
</body>
</html>