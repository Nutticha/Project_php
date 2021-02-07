<?php
    $con = mysqli_connect("localhost","root","","applestore") or die("เชื่อมต่อไม่ได้โว๊ย อย่าโง่ !!!");
    $detail = $_POST['detail'];
    $pic = $_FILES['picture']['name'];

    // moved_uploaded_file("ชื่อของไฟล์","ตำแหน่งที่ต้องการให้เก็บไฟล์ไว้");
    // $con->query($sql) --- mysqli_query($con,$sql);

    if(move_uploaded_file($_FILES['picture']['tmp_name'],"../images/".$pic)){
        $sql = "insert into booking (b_detail,b_pic) values ('$detail','$pic')";
        if($con->query($sql)){
            echo "อัพโหลดสำเร็จ";
        }
    } else{
            echo "อัพโหลดไม่สำเร็จ";
    }