<?php
    
    $con = mysqli_connect("localhost","root","","applestore");
    if(!$con) echo "เชื่อมต่อฐานข้อมูลไม่สำเร็จ " . $con->error;
    ?>