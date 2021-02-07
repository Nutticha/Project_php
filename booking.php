<?php
error_reporting(0);
session_start();


$p_id = $_REQUEST['p_id'];
$act = $_REQUEST['act'];

if ($act == 'add' && !empty($p_id)) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();

    }
    if (isset($_SESSION['cart'][$p_id]) && $act == 'update') {
        $_SESSION['cart'][$p_id]++;
    } else {
        $_SESSION['cart'][$p_id] = 1;
    }
}

if ($act == 'remove' && !empty($p_id)) {
    unset($_SESSION['cart'][$p_id]);
}

if ($act == 'cancel') {
    unset($_SESSION['cart']);
}

if ($act == 'update') {
    $amount = $_POST['amount'];
    foreach ($amount as $p_id => $total) {
        $_SESSION['cart'][$p_id] = $total;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form id="frmcart" name="frmcart" method="post" action="?act=update">
                <table width="100%" border="0" align="center" class="table table-hover">
                    <thead>
                    <tr>
                        <td height="40" colspan="7" align="center" bgcolor="#CCCCCC">
                            <strong>ตะกร้าสินค้า</span></strong></td>
                    </tr>
                    <tr>
                        <td align="center"><strong>No.</strong></td>
                        <td align="center"><strong>image</strong></td>
                        <td align="center"><strong>สินค้า</strong></td>
                        <td align="center"><strong>ราคา</strong></td>
                        <td align="center"><strong>จำนวน</strong></td>
                        <td align="center"><strong>รวม/รายการ</strong></td>
                        <td align="center"><strong>ลบ</strong></td>
                    </tr>
                    </thead>

                    <?php

                    if (!empty($_SESSION['cart'])) {
                        include 'query/connect.php';
                        $total = 0;

                        foreach ($_SESSION['cart'] as $p_id => $p_qty) {
                            $sql = "select * from product where p_id='$p_id'";
                            $query = $con->query($sql);
                            while ($row = $query->fetch_assoc()) {

                                $sum = $row['p_price'] * $p_qty;
                                $total += $sum;
                                ?>
                                <tr>
                                    <td align="center"><?= $i += 1 ?></td>
                                    <td align="center">
                                        <img src="images/<?= $row['p_pic'] ?>" width="100">
                                    </td>
                                    <td align="center">
                                        <?= $row['p_name'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $row['p_price'] ?>
                                    </td>
                                    <td align="center" width="45px">
                                        <input type="text" name="amount[<?= $p_id ?>]" value="<?= $p_qty ?>"
                                               class="form-control">
                                    </td>
                                    <td align="center">
                                        <?= number_format($sum, 2) ?>
                                    </td>
                                    <td align="center">
                                        <a href="booking.php?p_id=<?= $p_id ?>&act=remove" class="btn btn-danger">ลบ</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        <tr>
                            <td colspan='6' align="right">รวมราคา</td>
                            <td><?= number_format($total, 2) ?></td>
                        </tr>

                        <?php
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td colspan="6" align="right">
                            <a href="booking.php?act=cancel" class="btn btn-danger"> ยกเลิกตะกร้าสินค้า </a>
                            <button type="submit" name="button" id="button" class="btn btn-warning"> คำนวณราคาใหม่
                            </button>
                            <button id="bookingData" type="button" class="btn btn-primary">
                                สั่งซื้อ
                            </button>
                        </td>
                    </tr>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>

<script>
    $('#bookingData').click(function () {
        swal("คุณต้องการที่สั่งซื้อสินค้าใช่หรือไม่", {
            buttons: {
                yes: {
                    text: "สั่งซื้อ",
                    value: "ok"
                },
                cancel: "ยกเลิก"
            }
        }).then((value) => {
            switch (value) {
                case "ok":
                    $.ajax({
                        url: 'query/add_booking.php',
                        type: 'post',
                        data: "member_id"+<?=$_SESSION['.....'] ?>,
                        success: function (result) {
                            if (result.status == 1) {
                                swal("ดำเนินการสำเร็จ", result.text, "success");
                            } else {
                                swal("ดำเนินการไม่สำเร็จ", result.text, "error");
                            }
                        }
                    })
                    break;
            }
        })
    })

</script>

</body>
</html>