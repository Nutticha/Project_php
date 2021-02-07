<html>
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> -->
    <title>apple.com</title>
   <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>
<body> 
<center>
   <div class"#CC8236"
    <div class="login-container">
        <h1> เข้าสู่ระบบ </h1>
        <?php include 'assets/query/log.php'?>
        <form action="assets/query/chk_login.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="mb-3 col-md-12 col-sm-12 mt-5"> 
                         <label for="username" class="text-white">Username</label>
                        <input type="text" placeholder="Username" name="username" class="form-control">
                    </div>
                    <div class="mb-3 col-md-12 col-sm-12">
                    <label for="password" class="text-white" ;>Password</label>
                        <input type="password" placeholder="Password" name="password" class="form-control">
                    </div>
                    <div class="mb-3 col-md-6 col-sm-12">
                    <a href="booking.php" class="btn btn-success form-control">เข้าสู่ระบบ</a>
                    </div>
                    <div class="mb-3 col-md-6 col-sm-12">
                        <a href="register.php" class="btn btn-warning form-control">สมัครสมาชิก</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</center>
<!-- script-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html