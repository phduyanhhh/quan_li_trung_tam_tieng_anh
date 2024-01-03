<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #text {
        color: #fff;
    }

    .img-logo {
        width: 120px;
        border-right: 1px solid white;
        padding-right: 15px;
    }

    .nav-menu {
        background-color: rgb(2, 45, 96);
        padding: 10px;
    }

    #img-avt {
        width: 220px;
        margin-bottom: 10px;
        border-radius: 50px;
        margin-left: 10px;
    }

    .drop-menu {
        margin-right: 1000px;
    }

    #avatar {
        width: 100%;
        background-color: aqua;
    }

    #user-avt {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .name {
        color: #fff;
        padding-left: 20px;
        padding-right: 15px;

    }

    #box-avt {
        margin-right: 30px;
    }

    .navbar-toggler {
        border: 1px solid #fff;
    }

    .navbar-toggler-icon-custom {
        color: #fff;
    }

    #nav-menu-top {
        padding-top: 0;
    }

    content {
        display: flex;
        flex-direction: row;
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .menu-left {
        border: 1px solid #0e710c;
        width: 18%;
        height: 635px;
    }

    #header-menu-left {
        padding: 20px;
        text-align: center;
    }

    .content {
        border: 1px solid #0e710c;
        width: 80%;
        margin-left: 15px;
    }

    .item-box-information {
        width: 100%;
        border: 1px solid black;
        padding: 10px;
        margin: 10px;
    }

    .box-information {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        width: 98%;
    }

    .title-box-information {
        font-size: 30px;
        color: #5c98d7;
    }

    .input-infor {
        border: 1px solid #5c98d7;
        font-size: 20px;
        border-radius: 5px;
    }

    .button-cap-nhat {
        font-size: 20px;
        border: 1px solid gray;
        border-radius: 5px;
        background-color: #5bb85b;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php
    session_start();
    if(isset($_SESSION['ten'])){
    require 'connect.php';
    $ma_giao_vien =  $_SESSION['ma_giao_vien'];
    $sqlSelectTeacher = "SELECT * FROM giao_vien WHERE ma_giao_vien = $ma_giao_vien ";
    $resultSqlSelectTeacher = $conn->query($sqlSelectTeacher)->fetch_assoc();
    
    
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-menu-top">
        <div class="container-fluid nav-menu">
            <a class="navbar-brand" href="#"><img src="../image/img-british-council.jpg" class='img-logo'></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="trang_chu_giao_vien.php" class="nav-link" id="text">Trang chủ</a>
                    <button class="nav-link" id="text">Học</button>
                    <button class="nav-link" id="text"></button>
                    <button class="nav-link" id="text"></button>
                    <button class="nav-link" id="text"></button>
                </div>
            </div>

        </div>
    </nav>
    <content>
        <div class="item menu-left">
            <img src="../image/admin.png" id="img-avt">
            <h2 class="accordion-header" id="header-menu-left"><b><?php echo $_SESSION['ten'];?></b></h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a class="nav-link" href="xem_thong_tin_ca_nhan.php"><b>Thông tin cá nhân</b></a>
                            <a class="nav-link" href=""><b></b></a>
                            <a class="nav-link" href=""><b></b></a>
                            <a class="nav-link" href=""><b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='item content' id='content'>
            <h2>Cập nhật thông tin cá nhân</h2>
            <div class='box-information'>
                <div class='item-box-information'>
                    <form action="" method="post">
                        <div class="title-box-information"><b>Tên: </b><input class="input-infor" type="text" name="ten"
                                placeholder="<?php echo $resultSqlSelectTeacher['ten'] ?>" required></div><br>
                        <div class="title-box-information"><b>Họ:</b> <input class="input-infor" type="text" name="ho"
                                placeholder="<?php echo $resultSqlSelectTeacher['ho'] ?> " required></div><br>
                        <div class="title-box-information"><b>Email:</b> <input class="input-infor" type="text"
                                name="email" placeholder="<?php echo $resultSqlSelectTeacher['email'] ?>" required>
                        </div><br>
                        <div class="title-box-information"><b>Số điện thoại:</b> <input class="input-infor" type="text"
                                name="so_dien_thoai"
                                placeholder="<?php echo $resultSqlSelectTeacher['so_dien_thoai'] ?>" required></div><br>
                        <button class="button-cap-nhat">Cập nhật</button>
                    </form>
                    <?php
                    if(isset($_POST['ho'])){
                        $ten = $_POST['ten'];
                        $ho = $_POST['ho'];
                        $email = $_POST['email'];
                        $so_dien_thoai= $_POST['so_dien_thoai'];
                        $updateTeacher = "UPDATE giao_vien SET ten='$ten', ho='$ho', email='$email', so_dien_thoai='$so_dien_thoai' WHERE ma_giao_vien = $ma_giao_vien";
                        $resultUpdateTeacher = $conn->query($updateTeacher);}
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
?>
</body>

</html>