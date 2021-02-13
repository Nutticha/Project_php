<?php
session_start();
require("query/connect.php");
header("Content-Type:application/json");

$M_id = $_POST['m_id'];
$price = $_POST['p_price'];
$chk = true;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $p_id => $qty) {
        $sql = "select p_price from product where p_id = '$p_id'";
        $load = $con->query($sql);
        $data = $load->fetch_assoc();

        // INSERT DATA TO SELL TABLE
        $insert = "insert into booking (m_id,p_id,p_price,b_save) values ('$M_id','$p_id','$qty','$price',CURRENT_TIMESTAMP)";
        if ($con->query($insert)) {
            $chk = true;
        } else {
            $chk = false;
        }
    }

}
if($chk){
    echo json_encode(array("status" => 1, "text" => "ทำการจองสำเร็จ"));
} else {
    echo json_encode(array("status" => 2, "text" => "ทำการจองไม่สำเร็จ"));
}