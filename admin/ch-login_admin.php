<?php
    session_start();
    require('../query/connect.php');
    header("Content-Type:application/json;charset=UTF-8");
    $user = $_POST['a_username'];
    $pass = mysqli_real_escape_string($con,$_POST['a_password']);

    $p = md5($pass);
    $sql = "select * from admin where a_username = '$user'";
    $load = $con->query($sql);
    if($data = $load->fetch_assoc()){
        if($p == $data['a_password']){
            $_SESSION['a_id'] = $data['a_id'];
            echo json_encode(array("status"=>1,"text"=>"เข้าสู่ระบบสำเร็จ"));
        }
        else{
            echo json_encode(array("status"=>2,"text"=>"รหัสผ่านผิด กรุณาลองใหม่"));
        }
    }
    else{
        echo json_encode(array("status"=>3,"text"=>"ไม่พบบัญชี กรุณาสมัครสมาชิก"));
    }