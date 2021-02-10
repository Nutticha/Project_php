<?php
    session_start();
    require('connect.php');
    header("Content-Type:application/json;charset=UTF-8");
    $user = $_POST['m_username'];
    $pass = $_POST['m_password'];

    $sql = "select * from member where m_username = '$user'";
    $load = $con->query($sql);
    if($data = $load->fetch_assoc()){
        if($pass == $data['m_password']){
            $_SESSION['m_id'] = $data['m_id'];
            echo json_encode(array("status"=>1,"text"=>"เข้าสู่ระบบสำเร็จ"));
        }
        else{
            echo json_encode(array("status"=>2,"text"=>"รหัสผ่านผิด กรุณาลองใหม่"));
        }
    }
    else{
        echo json_encode(array("status"=>3,"text"=>"ไม่พบบัญชี กรุณาสมัครสมาชิก"));
    }

    