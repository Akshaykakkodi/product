<?php
include 'connection2.php';
$data= mysqli_query($con,"select * from details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
    <style>
        table,tr,td{
            border: 2px solid  black;
            border-collapse: collapse;


        }
        table{
            text-align:center;
        }
        
    </style>
</head>
<body>
    <center>
        <h1>PRODUCT DETAILS</h1>
    <table width="500"; height="200";>
        <tr>
            <td>Sl no:</td>
            <td>Product id</td>
            <td>Product name</td>
            <td>price</td>
            <td>Quantity</td>
            <td>Expiry date</td>
            <td colspan=2;>Action</td>
            <td>Status</td>
        </tr>
<?php
$count=0;
while($row= mysqli_fetch_assoc($data)){
    $count++;
?>    
        <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $row['product_id'] ?></td>
        <td><?php echo $row['product_name'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['expiry_date'] ?></td>
        <td><a href="edit.php?id=<?php echo $row['product_id'] ?>">edit</a></td>
        <td><a href="dlt.php?id=<?php  echo $row['product_id'] ?>">delete</a></td>
        <td>
           <?php if( $row['status']==0 ){ ?>
                <a href="approve.php?id=<?php echo $row['product_id'] ?>">Approve</a>
           <?php }else{ ?>
                Approved
                <?php
            } ?>
        </td>
        <tr>

        </tr>
<?php 
}
?>
    </table>
    <br>
    <table width="500"; height="200";>
        <tr>
            <td>Sl no:</td>
            <td>Product id</td>
            <td>Product name</td>
            <td>price</td>
            <td>Quantity</td>
            <td>Expiry date</td>
            <td colspan=2;>Action</td>
            <td>Status</td>
        </tr>
<?php
$count=0;
$data1= mysqli_query($con,"select * from details where status='1'");
while($row1= mysqli_fetch_assoc($data1)){

    $count++;
?>    
        <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $row1['product_id'] ?></td>
        <td><?php echo $row1['product_name'] ?></td>
        <td><?php echo $row1['price'] ?></td>
        <td><?php echo $row1['quantity'] ?></td>
        <td><?php echo $row1['expiry_date'] ?></td>
        <td><a href="edit.php?id=<?php echo $row['product_id'] ?>">edit</a></td>
        <td><a href="dlt.php?id=<?php  echo $row['product_id'] ?>">delete</a></td>
        <td>Approved</td>
        </tr>
<?php 
    
}
?>
    </table>
    <br>
    <table width="500"; height="200";>
        <tr>
            <td>Sl no:</td>
            <td>Product id</td>
            <td>Product name</td>
            <td>price</td>
            <td>Quantity</td>
            <td>Expiry date</td>
            <td colspan=2;>Action</td>
            <td>Status</td>
        </tr>
<?php
$count=0;
$data2= mysqli_query($con,"select * from details where status='0'");
while($row2= mysqli_fetch_assoc($data2)){

    $count++;
?>    
        <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $row2['product_id'] ?></td>
        <td><?php echo $row2['product_name'] ?></td>
        <td><?php echo $row2['price'] ?></td>
        <td><?php echo $row2['quantity'] ?></td>
        <td><?php echo $row2['expiry_date'] ?></td>
        <td><a href="edit.php?id=<?php echo $row['product_id'] ?>">edit</a></td>
        <td><a href="dlt.php?id=<?php  echo $row['product_id'] ?>">delete</a></td>
        <td>Not Approved</td>
        </tr>
<?php 
    
}
?>
    </table>
    <br>
   
</center>
</body>
</html>