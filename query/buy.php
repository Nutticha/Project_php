<?php
    session_start();
    require('connect.php');
    header("Content-Type:application/json;charset=UTF-8");
    $user_id = $_SESSION['m_id'];
    $chk = true;
    foreach($_SESSION['cart'] as $p_id => $qty){
        $sql = "select p_name , p_price from product where p_id = '$p_id'";
        $load = $con->query($sql);
        if($data = $load->fetch_assoc()){
            $product_name = $data['p_name'];
            $price = $data['p_price'];
            $insert = "INSERT INTO booking (m_id,p_id,b_pro,n_pro,b_price,b_save) values ('$user_id','$p_id','$product_name','$n_pro','$price',CURRENT_TIMESTAMP)";
            if($con->query($insert)){
                $chk = true;
            }
            else {
                $chk = false;
            }
        }
    }

    if($chk){
        echo json_encode(array("status"=>1,"text"=>'สั่งซื้อสำเร็จคร้าบบ'));
    }
    else {
        echo json_encode(array("status"=>2,"text"=>$con->error));
    }