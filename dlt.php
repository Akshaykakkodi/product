<?php
include 'connection2.php';
$ID = $_GET['id'];
mysqli_query($con,"delete from details where product_id=$ID");
echo "<script>alert('deleted successfully');</script>";
echo "<script>window.location.href='product display.php';</script>";
// header('location:product display.php');
?>