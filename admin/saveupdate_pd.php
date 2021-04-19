<?php
    require('../query/connect.php');
    header("Content-Type:application/json;charset=UTF-8");

    $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $p_price = $_POST['p_price'];
    $p_pic = $_POST['p_pic'];
    $p_cat = $_POST['p_cat'];

    if(isset($p_id))
    {
        $BDate = date("Y-m-d");

        $sqltxt = mysqli_query($con,"UPDATE product
            SET p_name = '$p_name',p_detail = ' $p_detail', p_price = '$p_price',p_pic = ' $p_pic',p_cat ='$p_cat'
            WHERE p_id = '$p_id'") or die (mysqli_error($con));

        echo "<br><br><center><h2>แก้ไขข้อมูลเรียบร้อย</h2><br><br></center>";
        echo "<center><a href = \"show_pd.php\">แสดงข้อมูลทั้งหมด</a></center>";
    }
    mysqli_close($con);
?>

