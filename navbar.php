<nav id="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.php"><img src="assets/images/concert.png" width="50px" height="50px" style="margin: 10px 20px;"></a>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 100%;  width: 100%;">
                    <form style="width: 100%; display: block;">
                        <input id="input_search" onkeyup="showResult(this.value)" type="text" class="form-control"
                               placeholder="พิมพ์คำค้นหาของคุณ">
                        <div id="livesearch"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <ul class="nav-bar-link">
                        <li><a href="index.php">หน้าแรก</a></li>
                        <?php
                        if (!isset($_SESSION['M_id'])) {
                            ?>

                            <li ><a href="register.php">สมัครสมาชิก</a></li>
                            <li ><a href="login.php" class="btn.green">เข้าสู่ระบบ</a></li>
                            <?php
                        } else {
                            ?>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-outline-danger">USER</button>
                                    <ul class="dropdown-content">
                                    <li>
                                        <a href ="user.php" class="btn">ประวัติการสั่งซื้อ</a>
                                    </li>
                                    <li>
                                        <a href ="user_setting.php" class="btn">แก้ไขข้อมูลส่วนตัว</a>
                                    </li>
                                    <li ><a href="logout.php" class="btn.green">ออกจากระบบ</a></li>
                                    </ul>
                                </div>
                            </li>
                            

                        <?php } ?>
                       
                       
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>