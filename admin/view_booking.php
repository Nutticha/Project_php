<?php
session_start();
include "../query/connect.php";
if(!isset($_SESSION['a_id'])) header("location:login_admin.php");
$e_id = $_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>JJTRAIN</title>
    <link rel="shortcut icon" href="Citycons_train_icon-icons.com_67910.ico" type="images/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body { 
                font-family: 'Kanit', sans-serif !important;
                padding:0;
                margin:0;
                background-color: #D3D3D3;
        }
        h1 {
                font-size: 40px;
                color: black;
                text-align: center;
                margin-top: 160px;
                letter-spacing: 2px;
                line-height: 0.6;
                /*text-shadow: 4px 2px rgb(178, 181, 182);*/
        }
        h4 {
                font-size: 20px;
                color: black;
                text-align: center;
                margin-top: 160px;
                letter-spacing: 2px;
                line-height: 0.6;
                /*text-shadow: 4px 2px rgb(178, 181, 182);*/
            }


        .dropdown:hover .dropdown-content {
                display: block;
              }
              .dropdown {
                position: relative;
              }
              ul.dropdown-content li a {
                position: relative;
                display: block;
                padding: 15px 20px;
                text-align: center;
                border-bottom: 1px solid lightgray;
                transition: 400ms ease-in-out;
                background-color: white;
              }
              ul.dropdown-content li a:hover{
                  background:lightgray;
              }
        
              a.dropdown-container {
                background: gray;
                color: white;
                padding: 10px 20px;
                position: relative;     
                display: block;
                text-decoration: none;
                border-radius: 5px;
              }
              ul.dropdown-content {
                list-style: none;
                width: 200px;
                margin-top: 0;
                right: 0;
                opacity: 1;
                padding: 0;
                position: absolute;
                box-shadow: 0 19px 30px rgb(0 0 0 / 40%);
                z-index: 9;
                display: none;
                animation:fadein 600ms 1 ease;
              }
        
              @keyframes fadein {
                  from{
                      opacity: 0;
                      margin-top: -30px;
                  } to {
                      opacity: 1;
                      margin-top: 0;
                  }
                }

                th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
  
    </style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">
  
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
            <div class="w3-container">
                <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
                </a>
            <div class="row d-inline-block align-center" style="d-flex justify-content-center">
                <img src="train_23745.png" alt="" width="50"<br><br>
            <p class="w3-text-grey">Store House</p>
            </div>
            </div>
           
            
       
        <div class="w3-bar-block">
            <a href="admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal" ><i class="fa fa-th-large fa-fw w3-margin-right" style="font-size:20px"></i>HOME</a> 
            <a href="show_pd.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-subway fa-fw w3-margin-right" style="font-size:20px"></i>PRODUCT</a> 
            <a href="add_pd.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-check-square fa-fw w3-margin-right" style="font-size:20px"></i>ADD PRODUCT</a> 
            <a href="show_member.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle-o fa-fw w3-margin-right" style="font-size:20px"></i>MEMBER</a> 
            <a href="admin1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw w3-margin-right" style="font-size:20px"></i>ADMIN</a>
            <a href="logout_admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bar-chart fa-fw w3-margin-right" style="font-size:20px"></i>LOGOUT</a>
        </div>
        
        <div class="w3-panel w3-large d-flex justify-content-center padding:5px">
            <i class="fa fa-facebook-official w3-hover-opacity" style="padding-right:5px"></i>
            <i class="fa fa-instagram w3-hover-opacity" style="padding-right:5px"></i>
            <i class="fa fa-snapchat w3-hover-opacity" style="padding-right:5px"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity" style="padding-right:5px"></i>
            <i class="fa fa-twitter w3-hover-opacity" style="padding-right:5px"></i>
            <i class="fa fa-linkedin w3-hover-opacity" style="padding-right:5px"></i>
        </div>
      
        </nav>
        <div class="container my-4">
    <div class="row">
        <div class="mb-3 col-lg-12">
            <div class="round-container">
                <div class="round-header">
                    รายละเอียดข้อมูลการซื้อสินค้า
                </div>
                <div class="round-content">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <?php
                            // LOAD BOOKING DATA
                            $sql = "select * from booking where m_id order by b_id desc";
                            $load = $con->query($sql);
                            if($data= $load->fetch_assoc()):
                                ?>
                                <div class="row">
                                    <?php
                                        // LOAD NAME
                                        $lsql = "select fname , lname from member where member_id = '".$data['m_id']."'";
                                        $lload = $con->query($lsql);
                                        if($rs = $lload->fetch_assoc()):
                                    ?>
                                    <div class="mb-3 col-lg-3">
                                        ชื่อจริง
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <?php echo $rs['fname'] ?>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        นามสกุล
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <?php echo $rs['lname'] ?>
                                    </div>
                                    <?php
                                    endif;
                                    ?>


                                    <div class="mb-3 col-lg-3">
                                        ลานจอดรถที่
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <?php echo $data['park_id'] ?>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        ชั้นที่จอง
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <?php echo $data['floor'] ?>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        เวลาเข้า
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <?php echo $data['check_in'] ?>
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        เวลาออก
                                    </div>
                                    <div class="mb-3 col-lg-3">
                                        <?php echo $data['check_out'] ?>
                                    </div>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div>
                        <div class="mb-4 col-lg-6">
                            <table class="table table-hover">
                                <thead>
                                <tr align="center">
                                    <th>เวลา</th>
                                    <th>ค่าปรับ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr align="center">
                                    <td>
                                        <?php
                                        // LOAD TIME
                                        $sql = "select DATE_FORMAT(check_out,'%H:%i%s') as check_out from booking where m_id='$m_id' order by b_id desc";
                                        $load = $con->query($sql);
                                        if($data = $load->fetch_assoc())
                                            if($data['check_out']!=NULL) echo "<p class='fines'>".$data['check_out']."</p>";
                                            else echo "<p id='time'></p>";
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $sql = "select fines from booking where m_id='$m_id' order by b_id desc";
                                        $load = $con->query($sql);
                                        if($data=  $load->fetch_assoc()){
                                            echo "<p class='fines'>".$data['fines']." บาท</p>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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