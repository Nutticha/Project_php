<?php
$con = mysqli_connect("localhost","root","","applestore") or die("เชื่อมต่อไม่ได้โว๊ย อย่าโง่ !!!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 align="center" width="50%">
        <tr>
            <td>
                ชื่อรูป
            </td>
            <td>
                ดูรูปสิ
            </td>
        </tr>
        <?php
            $sql = "select * from booking";
            $load =$con -> query($sql);

            while($data = $load -> fetch_assoc());
        ?>

            <tr>
                <td><?=$data['b_detail']?></td> 
                <td><img src = "img/<?=$data['b_pic']?>" alt = ""></td>
            </tr>
        <?php
            endwhile;
        ?>
        
    </table>
</body>
</html>