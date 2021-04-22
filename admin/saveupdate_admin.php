<?php
session_start();
require('../query/connect.php');
    header("Content-Type:application/json;charset=UTF-8");
    $a_name = $_POST['a_name'];
    $a_tel = $_POST['a_tel'];
    $a_username = $_POST['a_username'];
    $a_password = mysqli_real_escape_string($con,$_POST['a_password']);
    $pass = md5($a_password);
   
    $a_id = $_POST['a_id'];
    // UPDATE DATA
    $sql = "UPDATE admin set a_name='$a_name',a_username='$a_username',a_tel='$a_tel',a_password='$pass' WHERE a_id = '$a_id'";
    if($con->query($sql)){
      echo json_encode(array('status'=>1,'text'=>'บันทึกข้อมูลสำเร็จ'));
    }
    else{
        echo json_encode(array('status'=>2,'text'=>$con->error));
    }
    ?>