<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link đến css của giáo viên -->
    <link rel="stylesheet" href="../css_giao_vien/trang_chu_giao_vien.css">
    <!-- link đến css của bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Trang Chủ</title>
</head>

<body>
    <?php
    session_start(); // khởi động session để lấy thông tin từ session
        if(isset($_SESSION['ten'])){
            // kết nối với database
            require 'connect.php';
            // lấy về mã giáo viên và lưu vào 1 biến
            $ma_giao_vien = $_SESSION['ma_giao_vien']; 
            // SQL select các tài khoản có vai trò là giáo viên
            $sql_giao_vien = "SELECT * FROM tai_khoan WHERE ma_vai_tro = 2";
            $result_giao_vien= $conn->query($sql_giao_vien);
            // SQL select các tài khoản có vai trò là học sinh
            $sql_hoc_sinh = "SELECT * FROM tai_khoan WHERE ma_vai_tro = 3";
            $result_hoc_sinh= $conn->query($sql_hoc_sinh);
            // SQL select lớp mà giáo viên đang dạy 
            $sql_select_lop = "SELECT * FROM lop WHERE ma_giao_vien = $ma_giao_vien ";
            $result_select_lop = $conn->query($sql_select_lop);
        }

    ?>
    <!-- Header-nav của trang web -->
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
            <div class="dropdown mt-3" id="box-avt">
                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" id="user-avt"><img
                        src="../../image/admin.png" id="img-admin">
                    <!-- Hiển thị ra tên của chủ tài khoản -->
                    <p class="name"><?php echo $_SESSION['ten']; ?></p>
                </div>
                <ul class="dropdown-menu left drop-menu">
                    <li><a class="dropdown-item" href="xem_thong_tin_ca_nhan.php">Thông tin cá nhân</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="../../templates/loginMaster.html">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Kết thúc phần header-nav -->
    <!-- Content của trang -->
    <content>
        <div class='item content' id='content'>
            <h2>Thông Tin </h2>
            <div class='box-information'>
                <div class='item-box-information'>
                    <h3>Học sinh</h3>
                    <div>Số học sinh: <?php echo $result_hoc_sinh->num_rows; ?></div>
                </div>
                <div class='item-box-information'>
                    <h3>Giáo viên</h3>
                    <div>Số giáo viên: <?php echo $result_giao_vien->num_rows; ?></div>
                </div>
            </div>
        </div>
    </content>
    <!-- Kết thúc content của trang -->
    <!-- footer -->
    <section class="">
        <!-- Footer -->
        <footer class="bg-body-tertiary">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Maxim</h5>

                        <p>
                            Do the difficult things while they are easy and do the great things while they are small. A
                            journey of a thousand miles begins with a single step – Lão Tử
                            (Làm những điều khó khăn khi chúng còn dễ dàng và làm những điều tuyệt vời từ những điều nhỏ
                            nhoi. Một cuộc hành trình ngàn dặm luôn bắt đầu từ những bước đơn lẻ.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Maxim</h5>

                        <p>
                            It doesn’t matter how slowly you go as long as you do not stop – Nho giáo
                            (Không quan trọng bạn đi chậm thế nào miễn là bạn không dừng lại.)
                        </p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </section>
    <!-- Kết thúc footer -->
    <!-- Đóng if isset từ dòng 18 -->
    <?php 

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