<?php
    include '../query/connect.php';
    session_start();
    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $p_price = $_POST['p_price'];
    $p_cat = $_POST['cat_id'];
    $file = $_FILES["p_pic"]["name"];

    if ($file=="") {
        echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
    }else {
        $ImageFile_name = $file['name'];
        $ImageFile_type = $file['type'];
        $ImageFile_size = $file['size'];
        $ImageFile_tmp = $file['tmp_name'];
        if ($ImageFile_type=="image/jpeg") {
            if ($ImageFile_size <= $max_size) {
                copy($ImageFile_tmp,"../img/$ImageFile_name");
                unlink($ImageFile_tmp);
                $image = $ImageFile_name;
                $Flag = true;
            }else {
                echo "<CENTER><li>รูปภาพมีขนาดใหญ่กว่า 50 kb.<BR></CENTER>";
                echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
                echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
                $Flag=false;
            }
            }else {
                echo "<CENTER><li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <BR></CENTER>";
                echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
                echo "onclick=\"history.back();\" style=\"cursor:hand\">
                </CENTER>";
                $Flag = false;
            }
    }
    if(move_uploaded_file($_FILES["p_pic"]["tmp_name"],"../img/".$p_id."/".$file)){
        $sql = "insert into concert (p_id,p_name,p_detail,p_price,p_pic,p_cat) values ('$p_id','$p_name','$p_detail','$p_price','$file','$p_cat')";
        if($con->query($sql)){
            $_SESSION['suc'] = "เพิ่มสินค้าสำเร็จ";
            header("location:../../add_pd.php");
        }
        else{
            $_SESSION['error'] = "ไม่สามารถเพิ่มรายการสินค้าได้ " . $con->error;
        }
    }
    else{
        $_SESSION['error'] = "ไม่สามารถเพิ่มรายการสินค้าได้ " . $con->error;
    }