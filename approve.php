<?php
include 'connection2.php';
$Ide= $_GET['id'];
mysqli_query($con,"update details set status='1' where product_id=$Ide ");
header('location:product display.php');
?>