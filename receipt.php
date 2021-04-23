<?php
session_start();
include 'query/connect.php';
    date_default_timezone_set("Asia/Bangkok");
    $mid = $_SESSION['m_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    //window.print();
</script>
<style>
    body{
        padding:0px;
        margin:0px;
        overflow-x:hidden;
    }
    table{
        padding:0 25px;
    }
    .hr td {
    border-bottom: 2px solid rgb(198, 198, 198)!important;
    }
    .hr_line td {
border-top: 1px solid lightgray;
border-bottom: 1px solid lightgray;
}
.have {
display: block;
color: white;
background: black;
padding: 20px;
border-radius: 5px;
}
</style>
<body>
    <?php
        $sql_name = "select m_fname , m_lname from member where m_id = '$mid'";
        $load_name = $con->query($sql_name);
        $data_name = $load_name->fetch_assoc();
    ?>
       <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:1rem;">
        <tr>
            <td align="center"colspan=4>
                หอพักหญิง มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ<br>
                129 หมู่ 21 ตำบลเนินหอม อำเภอเมืองปราจีนบุรี</br>
                จังหวัดปราจีนบุรี 25230
            </td>
        </tr>
        <tr>
            <td align="center" colspan=4>
                <span style="display:block;padding:5px;font-size:24px;">หมายเลขคำสั่งซื้อ <?php     $invoice_num = rand(10,100); echo $invoice_num?></span>
            </td>
        </tr>
        <tr>
            <td colspan=4>
                <?php echo "วันที่: " . date("d-m-Y H:i:s")?>
            </td>
            
        </tr>
        <tr>
            <td colspan=4>
                <?php echo "ลูกค้า: " . $data_name['m_fname'] .' '. $data_name['m_lname']?>
            </td>
        </tr>
        <tr align="center" height="50px" class="hr">
            <td>#</td>
            <td align="left">สินค้า</td>
            <td>จำนวน</td>
            <td>ราคา</td>
        </tr>
        <?php
            $i=1;
            $qtyx = 0;
            $total = 0;
            foreach($_SESSION['cart'] as $p_id => $qty){
                $sql = "select * from product where p_id = '$p_id' ";
                $load = $con->query($sql);
                if($data = $load->fetch_assoc()){
                    $sql_name = "select * from product where"
        ?>
            <tr height="60px">
                <td  align=center>
                    <?=$i?>
                </td>
                <td>
                    <?=$data['p_name']?>
                </td>
                <td align="center">
                    <?=$qty?>
                </td>
                <td align="right">
                    <?=number_format($qty * $data['p_price'],2)?>
                </td>
            </tr>
        <?php
            $i++;
            $qtyx += $qty;
            $total += $qty * $data['p_price'];
            }
        }
        ?>
        <tr height="40px" class="hr_line">
            <td>
                จำนวนสินค้าทั้งหมด
            </td>
            <td align="center" colspan=2>
                <?=$qtyx . ' ชิ้น'?>
            </td>
            <td align=right>
                <b><?=number_format($total,2) . ' บาท'?></b>
            </td>
        </tr>
        <tr class="hr_line" height="50px">
            <td></td>
            <td colspan=2 align=center>
                ภาษี
            </td>
            <td align=right>
                <b>7%</b>
            </td>
        </tr>
        <tr height="60px">
            <td colspan=2 style="border-bottom:1px solid">
                <strong>ยอดชำระทั้งหมด</strong>
            </td>
            <td colspan=2 align=right style="border-bottom:1px solid">
                <strong>
                <?php
                    $tax = $total * 0.07;
                    $result = $total + $tax;
                    echo number_format($result,2) .' บาท';
                ?>
                </strong>
            </td>
        </tr>
        <tr height="60px">
            <td colspan=2 >
                <strong>ติดต่อ</strong>
            </td>
            <td colspan=2 align=right>
                โทร: +66 92 7503 465
            </td>
        </tr>
        <tr >
            <td colspan=4 align=center>
                <img src="img/QR_code.jpg" width="20%" alt="">
            </td>
        </tr>
        <tr>
            <td colspan=4 align=center>
                ชำระเงินจาก QR CODE ด้านบน
            </td>
        </tr>
        <tr>
            <td colspan=4 align=center style="padding:5px 0px;">
                <span class="have">
                    ขอบคุณที่ใช้บริการ
                </span>
            </td>
        </tr>
            </table>
</body>
</html>
<?php
    unset($_SESSION['p_price'])
?>
