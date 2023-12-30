<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type='text/css' href="../css/style-xem-thong-tin-ca-nhan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a href="home_teacher.php" class="nav-link" id="text">Trang chủ</a>
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
                    <div class="title-box-information"><b>Tên: </b><input class="input-infor" type="text" name="ten" placeholder="<?php echo $resultSqlSelectTeacher['ten'] ?>" required></div><br>
                    <div class="title-box-information"><b>Họ:</b> <input class="input-infor" type="text" name="ho" placeholder="<?php echo $resultSqlSelectTeacher['ho'] ?> "required></div><br>
                    <div class="title-box-information"><b>Email:</b> <input class="input-infor" type="text" name="email" placeholder="<?php echo $resultSqlSelectTeacher['email'] ?>" required></div><br>
                    <div class="title-box-information"><b>Số điện thoại:</b> <input class="input-infor" type="text" name="so_dien_thoai" placeholder="<?php echo $resultSqlSelectTeacher['so_dien_thoai'] ?>" required></div><br>
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