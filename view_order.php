<?php
error_reporting(0);
session_start();


$booking_id = $_REQUEST['b_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Index</title>
    <style>
    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    z-index:999;
    right:1rem;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>

<script>
    function showResult(str){
      if(str.length ==0){
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        document.getElementById("livesearch").style.display="none";

        return;
      }
      var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.display="block";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<body>

<div class="w3-top">
  <div class=" w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="ipad.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">IPAD</a>
    <a href="iphone.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">IPHONE</a>
    <a href="mac.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MAC</a>
    <a href="watch.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WATCH</a>
    <a href="airpods.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">AIRPODS</a>


    <div class="dropdown w3-right w3-padding" >
        <button class="btn btn-outline-danger">USER</button>
            <ul class="dropdown-content">
                <li>
                    <a href ="login.php" class="btn">เข้าสู่ระบบ</a>
                </li>
                <li>
                    <a href ="user.php" class="btn">ประวัติการสั่งซื้อ</a>
                </li>
                <li>
                    <a href ="user_setting.php" class="btn">แก้ไขข้อมูลส่วนตัว</a>
                </li>
                <li >
                    <a href="logout.php" class="btn.green">ออกจากระบบ</a>
                </li>
            </ul>
    </div>







    <a href="" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox=" 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg></a>  
                         

<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

    <title>Document</title>
</head>
<body>

<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form id="frmcart" name="frmcart" method="post" action="?act=update">
                <table width="100%" border="0" align="center" class="table table-hover">
                    <thead>
                    <tr>
                        <td height="40" colspan="6" align="center" bgcolor="#CCCCCC">
                            <strong>ประวัติการจอง</span></strong></td>
                    </tr>
                    <tr>
                        <td align="center"><strong>No.</strong></td>
                        <td align="center"><strong>image</strong></td>
                        <td align="center"><strong>ชื่อ</strong></td>
                        <td align="center"><strong>ราคา</strong></td>
                        <td align="center"><strong>จำนวน</strong></td>
                        <td align="center"><strong>รวม/รายการ</strong></td>
                    </tr>
                    </thead>

                    <?php

                 
                        require('query/connect.php');
                        $total = 0;
                        $sql = "select * from booking where b_id = '$booking_id'";
                        $load = $con->query($sql);                
            
                            if($data = $load->fetch_assoc()){
                                $sql_c = "select * from product where p_id='".$data['p_id']."'";
                                $qry = $con->query($sql_c);
                                $c_load = $qry->fetch_assoc();
                                ?>
                                <tr>
                                    <td align="center"><?= $i += 1 ?></td>
                                    <td align="center">
                                        <img src="img/<?= $c_load['p_pic'] ?>" width="100">
                                    </td>
                                    <td align="center">
                                        <?= $c_load['p_name'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $data['b_price'] ?>
                                    </td>
                                    <td align="center" width="45px">
                                       <?= $data['b_pro'] ?>
                                              
                                    </td>
                                    <td align="center">
                                        <?= number_format($data['b_price']*$data['b_pro'], 2) ?>
                                    </td>
                                </tr>
                                <?php
                            $total = $data['b_price']*$data['b_pro'];    
                        }
                            
                        ?>
                        <tr>
                            <td colspan='5' align="right">รวมราคา</td>
                            <td align="right"><?= number_format($total, 2) ?></td>
                        </tr>  
                    </table>    
            </form>
                        <div class="col-md-12 d-flex justify-content-center">
                            <a href="index.php" class="btn btn-outline-danger"> ย้อนกลับ </a>
                         </div>
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

</body>
</html>