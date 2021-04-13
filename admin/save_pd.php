<?php
     require('../query/connect.php');
     header("Content-Type:application/json;charset=UTF-8");

     $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $p_price = $_POST['p_price'];
    $p_pic = $_POST['p_pic'];
    $p_cat = $_POST['p_cat'];

    $max_size = $_POST['max_size'];
    $ImageFile = $_FILES['ImageFile'];
    $Flag = false;

    if ($ImageFile=="") {
        echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
    }else {
        $ImageFile_name = $ImageFile['name'];
        $ImageFile_type = $ImageFile['type'];
        $ImageFile_size = $ImageFile['size'];
        $ImageFile_tmp = $ImageFile['tmp_name'];
        if ($ImageFile_type=="image/gif" or $ImageFile_type=="image/jpeg") {
            if ($ImageFile_size <= $max_size) {
                copy($ImageFile_tmp,"pictures/$ImageFile_name");
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
    if($Flag)
    {
       
        $sqltxt = mysqli_query($conn,"INSERT INTO product(p_id ,p_name,
p_cat, p_detail,p_pic,p_price )
    VALUES
    ('$p_id ','$p_name','$p_detail','$p_price', '$p_pic',
    '$p_cat')")
    or die (mysqli_error($conn));
        echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
        echo "<CENTER><A HREF=\"listofbook.php\">แสดงขอ้ มูลท้งัหมด</A></CENTER>";
    }       
    mysqli_close($conn);
?>