<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- END CSS -->
    <link rel="stylesheet" href="admin/assets/css/index.css">
    <link rel="shortcut icon" href="assets/images/concert.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>กรุณาเข้าสู่ระบบ</title>
</head>
<body>

<video autoplay muted loop style="position:fixed">
    <source src="assets/video/BG.mp4" type="video/mp4">
</video>


<div class="login-control">

    <form id="form_data" method="post" class="form-container">
        <div class="form-header">
            <h3>เข้าสู่ระบบ</h3>
        </div>
        <div class="container">
            <div class="row">

                <div class="mb-3 col-lg-12">
                    <input type="text" name="M_username" placeholder="Username" required class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <input type="password" name="M_password" placeholder="Password" class="form-control">
                </div>
                <div class="mb-3 col-lg-12">
                    <button id="sendData" type="button" class="btn btn-danger form-control">เข้าสู่ระบบ</button>
                    <button id="ClearData" type="reset" hidden></button>
                </div>
                <div class="mb-3 col-lg-12">
                    <div class="waring">
                        ยังไม่มีบัญชีหรอ? <a href="register.php">สมัครสมาชิก</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<!-- Script -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<script>
    $('#sendData').click(function(){
        $.ajax({
            url:'assets/php/login.php',
            type:'post',
            data:$('#form_data').serialize(),
            success:function(value){
                if(value.status == 1){
                    swal("เข้าสู่ระบบสำเร็จ",value.text,"success").then(()=>{
                    window.location.href="index.php";
                    });
                } else if(value.status == 2){
                    swal("เข้าสู่ระบบไม่สำเร็จ",value.text,"error").then(()=>{
                        $('#ClearData').click();
                    });
                } else if(value.status == 3){
                    swal("เข้าสู่ระบบไม่สำเร็จ",value.text,"error").then(()=>{
                        $('#ClearData').click();
                    });
                }
            },
            error:(err,t,x)=>{
                swal("ดำเนินการไม่สำเร็จ",err.responseText,"error");
            }
        })
    })
</script>
</body>
</html>