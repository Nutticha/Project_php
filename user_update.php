<?php
session_start();
    require('query/connect.php');
    header("Content-Type:application/json");
    $fname = $_POST['m_fname'];
    $lname = $_POST['m_lname'];
    $date = $_POST['m_date'];
    $tel = $_POST['m_tel'];
    $mail = $_POST['m_maill'];
    $username = $_POST['m_username'];
    
    $password = mysqli_real_escape_string($con,$_POST['m_password']);
    $pass = md5($password);
   
    $M_id = $_SESSION['m_id'];
    // UPDATE DATA
    $sql = "update member set m_fname='$fname',m_lname='$lname',m_username='$username',m_tel='$tel',m_password='$pass', m_date ='$date' , m_maill = '$mail' where m_id = '$M_id'";
    if($con->query($sql)){
      echo json_encode(array('status'=>1,'text'=>'บันทึกข้อมูลสำเร็จ'));
    }
    else{
        echo json_encode(array('status'=>2,'text'=>$con->error));
    }
    ?>