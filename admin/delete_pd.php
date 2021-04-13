<?php
 require('../query/connect.php');
 header("Content-Type:application/json;charset=UTF-8");

$id = $_GET['id'];
$sql = "DELETE FROM product WHERE p_id = '$id' ";
mysqli_query($con,$sql) or die ( "DELETE จากตาราง product มขีอ้ผิดพลาดเกิดข้ึน"
.mysqli_error());
mysqli_close ( $con);
header("Location:show_pd.php");
?>