<?php
session_start();
error_reporting(0);

include 'query/connect.php';
$user_id = "";
if (isset($_SESSION['m_id'])) $user_id = $_SESSION['m_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
    
</head>

<script>
    function showResult(str) {
        if (str.length == 0) {
            document.getElementById("livesearch").innerHTML = "";
            document.getElementById("livesearch").style.border = "0px";
            document.getElementById("livesearch").style.display = "none";

            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML = this.responseText;
                document.getElementById("livesearch").style.display = "block";
            }
        }
        xmlhttp.open("GET", "livesearch.php?q=" + str, true);
        xmlhttp.send();
    }
</script>
<style>

</style>
<body>


<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="ipad.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">IPAD</a>
    <a href="iphone.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">IPHONE</a>
    <a href="mac.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MAC</a>
    <a href="watch.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WATCH</a>
    <a href="airpods.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">AIRPODS</a>

    <a href="" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox=" 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg></a>  
    <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a>
<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<br><br>
<?php
if (isset($_GET['act'])):
    ?>

    
<?php
endif;
?>
<?php
$sql = "select * from product where p_id = '" . $_GET['p_id'] . "'";
$load = $con->query($sql);
if ($data = $load->fetch_assoc()):
    ?>
    <div class="abcdefghijklmnopqurtuvwxyz">
       <!-- <img class="imgx" src="img/<?= $data['p_pic'] ?>" alt=""> -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <img src="img/<?= $data['p_pic'] ?>" alt="" class="img-fluid"> 
                </div>
                <div class="col-md-8 mt-5">
                    <span class="header-t"></span>
                    <div class="header-text">
                        <?= $data['p_name'] ?>
                    </div>
                    <div class="container" style ="margin-top:3.5rem;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3" style="padding:5px;">
                                        <div class="col-icon">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 " style="padding:5px;">
                                        <div class="col-header">
                                            รายละเอียด
                                        </div>
                                        <div class="col-text">
                                            <?= $data['p_detail'] ?>
                                        </div>
                    </div>
            </div>
        </div>
                           <!-- <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3" style="padding:5px;">
                                        <div class="col-icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 " style="padding:5px;">
                                        <div class="col-header">
                                            วันที่จัดแสดง
                                        </div>
                                        <div class="col-text">
                                            <?= $data['C_start'] ?>
                                        </div>
                                    </div> 
                                </div>

                                <div class="row">
                                    <div class="col-md-3" style="padding:5px;">
                                        <div class="col-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 " style="padding:5px;">
                                        <div class="col-header">
                                            สถานที่จัดแสดง
                                        </div>
                                        <div class="col-text">
                                            <?= $data['C_location'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3" style="padding:5px;">
                                        <div class="col-icon">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 " style="padding:5px;">
                                        <div class="col-header" style="line-height:20px;padding-left:20px;">
                                            ราคาสินค้า
                                        </div>
                             
                                          <!--  <select id="price" name="price" class="form-select" readonly="true">
                                                <?php
                                                $sql = "select C_price from concert where C_id = '".$_GET['p_id']."'";
                                                $load = $con->query($sql); //$load = mysqli_query($con,$sql)
                                                if ($data = $load->fetch_assoc()):
                                                    ?>
                                                    <option value="<?php echo $data['p_price'] ?>"><?php echo $data['p_price'] ?>
                                                        บาท
                                                    </option>
                                                <?php
                                                endif;
                                                ?>
                                            </select>  -->
                                            <br>
                                            <button type="button" onclick="add()" href="" class="btn btn-danger mt-4 form-control">กดซื้อสินค้า</button>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-black">
            
        </div>
    </div>
<?php
endif;
?>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    function add(){
          console.log($('#price').val())    
          window.location.href = "booking1.php?p_id=<?= $_GET['p_id']?>&act=add&price=" + $('#price').val();
    }
</script>
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