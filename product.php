<?php
session_start();
//error_reporting(0);
include 'query/connect.php';
$user_id = "";
if (isset($_SESSION['M_id'])) $user_id = $_SESSION['M_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- END CSS -->
    <link rel="shortcut icon" href="assets/images/concert.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Index</title>
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

<nav id="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="assets/images/concert.png" width="50px" height="50px" style="margin: 10px 20px;">
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="
    height: 100%;
    width: 100%;
">
                    <form style="
    width: 100%;
    display: block;
">
                        <input id="input_search" onkeyup="showResult(this.value)" type="text" class="form-control"
                               placeholder="พิมพ์คำค้นหาของคุณ">
                        <div id="livesearch"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <ul class="nav-bar-link">
                        <?php
                        if (!isset($_SESSION['M_id'])) {
                            ?>

                            <li style="float:right"><a href="register.php">สมัครสมาชิก</a></li>
                            <li style="float:right"><a href="login.php" class="btn.green">เข้าสู่ระบบ</a></li>
                            <?php
                        } else {
                            ?>
                            <li>

                            </li>
                            <li style="float:right"><a href="logout.php" class="btn.green">ออกจากระบบ</a></li>

                        <?php } ?>
                        <li style="float:right"><a href="index.php">หน้าแรก</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
<div class="d-flex justify-content-center">
    <div id="slider_img">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="assets/images/7sean-2.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/bkpp1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/wannaone1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/izone1.jpg" class="d-block w-100" alt="...">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>


<?php
if (isset($_GET['act'])):
    ?>

    <div class="alert alert-success d-flex justify-content-center" role="alert">
        สมัครสมาชิกสำเร็จ
    </div>
<?php
endif;
?>

<div class="container">
    <br>
    <a style="text-decoration:none;color:black;font-size:30px;"  href="index.php"><img src="assets/images/crowns.png" width="40">งานแสดงแนะนำ</a> 
    <a style="text-decoration:none;color:black;font-size:30px; margin-left:50px "  href="index.php"><img src="assets/images/fire.png" width="40">งานแสดงทั้งหมด </a>
    <div class="row">
        <?php
        $sql = "select * from concert order by C_id limit 36"; //descจากน้อยไปมาก asc จากมากไปน้อย
        $load = $con->query($sql); //$load = mysqli_query($con,$sql)
        while ($data = $load->fetch_assoc()):
            ?>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="assets/images/<?= $data['C_pic'] ?>" class="card-img-middle" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['C_name'] ?></h5>
                        <p class="card-text"><?= $data['C_start'] ?></p>
                        <p class="card-text"><?= $data['C_location'] ?></p>
                        <a href="booking.php?p_id=<?=$data['p_id']?>&act = add" class="btn btn-danger">เพิ่มลงถุงสินค้า</a>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>


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