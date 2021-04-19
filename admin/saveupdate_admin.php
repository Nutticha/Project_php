<?php
session_start();
require('../query/connect.php');
    header("Content-Type:application/json;charset=UTF-8");
    $name = $_POST['a_name'];
    $tel = $_POST['a_tel'];
    $username = $_POST['a_username'];
    $password = mysqli_real_escape_string($con,$_POST['a_password']);
    $pass = md5($password);
   
    $a_id = $_SESSION['a_id'];
    // UPDATE DATA
    $sql = "update admin set a_name='$name',a_username='$username',a_tel='$tel',a_password='$pass' where a_id = '$a_id'";
    if($con->query($sql)){
      echo json_encode(array('status'=>1,'text'=>'บันทึกข้อมูลสำเร็จ'));
    }
    else{
        echo json_encode(array('status'=>2,'text'=>$con->error));
    }
    ?>