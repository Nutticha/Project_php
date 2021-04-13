<?php
 require('../query/connect.php');
 header("Content-Type:application/json;charset=UTF-8");

$id = $_GET['id'];
$sql = "DELETE FROM member WHERE m_id = '$id' ";
mysqli_query($con,$sql) or die ( "DELETE จากตาราง member มขีอ้ผิดพลาดเกิดข้ึน"
.mysqli_error());
mysqli_close ( $con);
header("Location:show_member.php");
?>