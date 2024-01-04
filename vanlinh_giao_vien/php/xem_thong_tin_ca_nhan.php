<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
    <link rel="stylesheet" href="../css_giao_vien/xem_thong_tin_ca_nhan.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if(isset($_SESSION['ten'])){
    require 'connect.php';
    // SQL select lớp mà giáo viên đang dạy 
    $ma_giao_vien =  $_SESSION['ma_giao_vien'];
    $sql_select_lop = "SELECT * FROM lop WHERE ma_giao_vien = $ma_giao_vien ";
    $result_select_lop = $conn->query($sql_select_lop);
    $sqlSelectTeacher = "SELECT * FROM giao_vien WHERE ma_giao_vien = $ma_giao_vien ";
    $resultSqlSelectTeacher = $conn->query($sqlSelectTeacher)->fetch_assoc();
    $_SESSION['ten'] = $resultSqlSelectTeacher['ten'];
    
    
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-menu-top">
        <div class="container-fluid nav-menu">
            <a class="navbar-brand" href="index.php"><img src="../../image/img-british-council.jpg"
                    class='img-logo'></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link" id="text">Trang chủ</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color: white'>
                            Quản lý lớp đang giảng dạy
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            // Sử dụng vòng lặp for để hiển thị ra các lớp mà giáo viên này đang giảng dạy
                        for($i=0; $i<$result_select_lop->num_rows; $i++){
                        $row = $result_select_lop->fetch_assoc();
                        // link đến trang chi_tiet_lop đồng thời gửi đi mã lớp
                        echo "<a class='dropdown-item' href='chi_tiet_lop.php?ma_lop=$row[ma_lop]'><b> $row[ten_lop] </b></a>";
                        }
                    ?>
                        </div>
                    </li>
                    <a href="thong_tin_lop.php" class="nav-link" id="text">Lớp</a>

                </div>
            </div>
        </div>
    </nav>
    <content>
        <div class="item menu-left">
            <img src="../../image/admin.png" id="img-avt">
            <h2 class="accordion-header" id="header-menu-left"><b><?php echo $_SESSION['ten'];?></b></h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                            <a style="margin-bottom: 20px;margin-left: 20px;" class="btn btn-outline-primary"
                                href="xem_thong_tin_ca_nhan.php"><b>Thông tin cá nhân</b></a>
                            <a style="margin-bottom: 20px;margin-left: 20px;" class="btn btn-outline-primary"
                                href="cap_nhat_thong_tin.php"><b>Cập nhật thông tin</b></a>
                            <a style="margin-bottom: 20px;margin-left: 20px;" class="btn btn-outline-primary"
                                href="thay_doi_mat_khau.php"><b>Thay đổi mật khẩu</b></a>
                            <a style="margin-bottom: 20px;margin-left: 40px;" class="btn btn-outline-danger"
                                href="../../templates/loginMaster.html"><b>Đăng Xuất</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='item content' id='content'>
            <h2>Thông tin của bạn</h2>
            <div class='box-information'>
                <div class='item-box-information'>
                    <div class='title-box-information'>
                        <p><b>Tên:</b> <?php echo $resultSqlSelectTeacher['ten'] ?></p>
                    </div>
                    <div class='title-box-information'>
                        <p><b>Họ:</b> <?php echo $resultSqlSelectTeacher['ho'] ?></h3>
                    </div>
                    <div class='title-box-information'>
                        <p><b>Email:</b> <?php echo $resultSqlSelectTeacher['email'] ?></h3>
                    </div>
                    <div class='title-box-information'>
                        <p><b>Số điện thoại:</b> <?php echo $resultSqlSelectTeacher['so_dien_thoai'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
?>

        <!-- Link đến js của bootstrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>