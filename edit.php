<?php
include 'connection2.php';
$ID = $_GET['id'];
$data1 =mysqli_query($con,"select * from details where product_id=$ID");
$data2 =mysqli_fetch_assoc($data1);
if(isset($_POST['sub'])){
    $pn= $_POST['a'];
    $pr= $_POST['b'];
    $qn= $_POST['c'];
    $da= $_POST['d'];
    mysqli_query($con,"update details set product_name='$pn', price='$pr', quantity='$qn', expiry_date='$da' where product_id='$ID' ");
    header('location:product display.php');
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
        <td><input type="text" value="<?php echo $data2['product_name'] ?>"  name="a"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" value="<?php echo $data2['price'] ?>"  name="b" ></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="text" value="<?php echo $data2['quantity'] ?>"  name="c" ></td>
        </tr>
        <tr>
            <td>Expiry date</td>
            <td><input type="date" value="<?php echo $data2['expiry_date'] ?>"  name="d" ></td>
        </tr>
    </table>
    <button type="submit" name="sub">Submit</button>
    </center>
    </form>
</body>
</html>
