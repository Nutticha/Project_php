<?php
    include '../query/connect.php';
    session_start();
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $p_price = $_POST['p_price'];
    $p_cat = $_POST['cat_id'];
    $file = $_FILES["p_pic"]["name"];

    
    if(move_uploaded_file($_FILES["p_pic"]["tmp_name"],"../img/".$file)){
        $sql = "INSERT into product (p_id,p_name,p_detail,p_price,p_pic,p_cat) values ('$p_id','$p_name','$p_detail','$p_price','$file','$p_cat')";
        if($con->query($sql)){
            $_SESSION['suc'] = "เพิ่มสินค้าสำเร็จ";
            header("location:show_pd.php");
        }
        else{
            $_SESSION['error'] = "ไม่สามารถเพิ่มรายการสินค้าได้ " . $con->error;
        }
    }
    else{
        $_SESSION['error'] = "ไม่สามารถเพิ่มรายการสินค้าได้ " . $con->error;
    }