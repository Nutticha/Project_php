<?php
    session_start();
    require('connect.php');
    header("Content-Type:application/json;charset=UTF-8");

    
    $fname = $_POST['m_fname'];
    $lname = $_POST['m_lname'];
    $date = $_POST['m_date'];
    $tel = $_POST['m_tel'];
    $mail = $_POST['m_mail'];
    $username = $_POST['m_username'];
    $password = $_POST['m_password'];

    $sql = "INSERT INTO member (m_username,m_password,m_fname,m_lname,m_date,m_tel,m_mail)
            values ('$username','$password','$fname','$lname','$date','$tel','$mail')";
   if($con->query($sql)){
            echo json_encode(array("status"=>1,"text"=>"สมัครสมาชิกสำเร็จ"));    
        }
        else{
            echo json_encode(array("status"=>2,"text"=>"สมัครสมาชิกไม่สำเร็จ"));
        }