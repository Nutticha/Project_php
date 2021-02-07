<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apple.com</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');
        body {
            font-family: 'Prompt', sans-serif;           
        }
        ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

        li {
                float: left;
            }

        li a, .dropbtn {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

        li a:hover, .dropdown:hover .dropbtn {
                background-color: #111;
            }

        li.dropdown {
                display: inline-block;
            }

        .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

        .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
                display: block;
            }
         /* Make the image fully responsive */
         .carousel-inner img {
        width: 100%;
        height: 100%;
        }
        
    </style>
</head>
<body>
        <ul>
            <li style="float:left"><a href="index.php">Home</a></li>
          
            <li class="dropdown">
                <a href="iphone.php" class="dropbtn">Iphone</a>
                <div class="dropdown-content">
                <a href="#">Iphone 12</a>
                <a href="#">Iphone 11</a>
                <a href="#">Iphone SE</a>
                <a href="#">Iphone X</a>
                <a href="#">Iphone 8</a>
                <a href="#">Iphone 7</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="ipad.php" class="dropbtn">ipad</a>
                <div class="dropdown-content">
                <a href="#">ipadPro</a>
                <a href="#">IpadAir</a>
                <a href="#">ipad</a>
                <a href="#">IpadMini</a>
                <a href="#">Apple Pencil</a>
                </div>
            </li>
            
            <li class="dropdown">
                <a href="mac.php" class="dropbtn">Mac</a>
                <div class="dropdown-content">
                <a href="#">MacBook Pro</a>
                <a href="#">MacBookAir</a>
                <a href="#">iMacPro</a>
                <a href="#">iMac</a>
                <a href="#">Mac Pro</a>
                <a href="#">Mac Mini</a>
                </div>
            </li> 
            <li style="float:left"><a href="watch.php">Apple Watch</a></li>
            <li style="float:left"><a href="airpods.php">Airpods</a></li>
            <li class="dropdown">
                <a href="accessories.php" class="dropbtn">Accessories</a>
                <div class="dropdown-content">
                <a href="#">Case</a>
                <a href="#">Power port and charging cable</a>
                <a href="#">Wireless charger</a>
                <a href="#">Headphones and speakers</a>
                
                </div>
            </li>
                <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg"  style="float:right" width="35" height="35" fill="white" class="bi bi-person-fill" viewBox ="0 -2 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg></a>
                <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" style="float:right" width="30" height="30" fill="white" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
            </svg></a>

            <div class="container mt-3">
                <div id="myCarousel" class="carousel slide">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
            </ul>
  
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/ipad.jpg"  width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/iphone12.jpg"  width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/Macbookair.png"  width="1100" height="500">
            </div>
            </div>
  
            <!-- Left and right controls -->
             <a class="carousel-control-prev" href="#myCarousel">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel">
            <span class="carousel-control-next-icon"></span>
            </a>
            </div>
            </div>

            <script>

            $(document).ready(function(){
            // Activate Carousel
            $("#myCarousel").carousel();
    
            // Enable Carousel Indicators
            $(".item1").click(function(){
            $("#myCarousel").carousel(0);
            });
            $(".item2").click(function(){
            $("#myCarousel").carousel(1);
            });
            $(".item3").click(function(){
            $("#myCarousel").carousel(2);
             });
    
            // Enable Carousel Controls
            $(".carousel-control-prev").click(function(){
            $("#myCarousel").carousel("prev");
            });
            $(".carousel-control-next").click(function(){
            $("#myCarousel").carousel("next");
            });
            });
            </script>
            

        </ul>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>    
</body>
</html>