<?php
  session_start();
  include "query/connect.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<title>apple.com</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
<body>

<!-- Navbar -->
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
                    <a href ="edit.php" class="btn">ประวัติการสั่งซื้อ</a>
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
                         
<!--<a  class="w3-padding-large w3-hover-red w3-hide-small w3-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a> -->
<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!--Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) 
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>  -->



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px"> 

  <!-- Automatic Slideshow Images -->
 <div class="mySlides w3-display-container w3-center">
    <img src="img/ipadair2.jpg" style="width:60%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/iphone12.jpg" style="width:30%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/Macbookair.png" style="width:85%">
    
  </div> 

  <marquee style="border:#FF0033 2px SOLID">ยินดีต้อนรับสู่ Apple Store</marquee>
  
  <div class="container">
        <div class="row">
            <?php 
            $sql = "select * from product order by rand() limit 9";//descจากน้อยไปมาก asc จากมากไปน้อย
            $load =$con->query($sql); //$load = mysqli_query($con,$sql)
            while($data = $load->fetch_assoc()):
            ?>
            <div class="col-md-4 mt-4" >
                <div class="card" >
                  <div class="d-flex justify-content-center">
                   <img src="img/<?=$data['p_pic']?>"  height="200px" >
                  </div>
                 
                    <div class="card-body">
                        <h5 class="card-title" align=center><?=$data['p_name']?></h5>
                        <div class="d-flex justify-content-center">
                        <a href="product_detail.php?p_id=<?=$data['p_id']?>&act=add" class="btn btn-outline-danger">รายละเอียดเพิ่มเติม</a>
                        </div>
                        <!-- <p class="card-text"><?=$data['c_details']?></p>
                         <a href="catagory.php?p_id=<?=$data['c_id']?>&act=add">-->
                      
                      <!-- <a href="detail_h1.php?c_id=<?=$data['p_id']?>&act=add" class="btn btn-outline-danger">-->
                        
                    </div>
                </div>
            </div>
            <?php 
            endwhile;
            ?>
        </div>
    </div>


  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map 
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
