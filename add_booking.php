<?php
session_start();
require("connect.php");
header("Content-Type:application/json");

$m_id = $_POST['member_id'];
if (!empty($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $p_id => $qty) {
        $sql = "select p_price from product where p_id = '$p_id'";
        $load = $con->query($sql);
        $data = $load->fetch_assoc();

        // INSERT DATA TO SELL TABLE
        $insert = "insert into sell (m_id,p_id,p_qty) values ('$m_id','$p_id','$qty')";
        if ($con->query($insert)) {
            unset($_SESSION['cart']);
            echo json_encode(array("status" => 1, "text" => "ทำการจองสำเร็จ"));
        } else {
            echo json_encode(array("status" => 2, "text" => "ทำการจองไม่สำเร็จ"));
        }
    }

}