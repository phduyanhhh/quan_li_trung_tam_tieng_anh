<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link đến css của giáo viên -->
    <link rel="stylesheet" href="../css_giao_vien/chi_tiet_lop.css">
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
            // lấy về mã giáo viên, mã lớp và lưu vào 1 biến
            $ma_giao_vien = $_SESSION['ma_giao_vien']; 
            $ma_lop = $_GET['ma_lop'];
            // SQL select lớp mà giáo viên đang dạy 
            $sql_select_lop = "SELECT * FROM lop WHERE ma_giao_vien = $ma_giao_vien ";
            $result_select_lop = $conn->query($sql_select_lop);
            // SQL hiện thị bảng điểm của lớp và tên của học sinh được lấy từ bảng học sinh
            $sql_xem_thong_tin_diem_cua_lop = "SELECT hoc_sinh.ten,hoc_sinh.ho, diem_cua_lop.* FROM diem_cua_lop
            INNER JOIN hoc_sinh ON diem_cua_lop.ma_hoc_sinh = hoc_sinh.ma_hoc_sinh WHERE ma_lop = $ma_lop" ;
            $result_xem_thong_tin_diem_cua_lop = $conn->query($sql_xem_thong_tin_diem_cua_lop);


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
                            Lớp học
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
                    <a href="index.php" class="nav-link" id="text">Trang chủ</a>
                    <a href="index.php" class="nav-link" id="text">Trang chủ</a>
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
        <div class="item menu-left">
            <div>
                <h2 class="accordion-header" id="header-menu-left"><b>Chức Năng </b></h2>
                <a type="button" style="margin-bottom: 15px;margin-left: 10px" class="btn btn-outline-secondary "
                    href="cap_nhat_diem.php?ma_lop=<?php echo $ma_lop; ?>">Đề xuất Thêm học sinh</a>
                <a type="button" style="margin-bottom: 15px;margin-left: 10px" class="btn btn-outline-secondary "
                    href="cap_nhat_diem.php?ma_lop=<?php echo $ma_lop; ?>">Đề xuất Xóa học sinh</a>
            </div>
        </div>
        <div class='cap_nhat'>
            <div id='cap_nhat'></div>
        </div>
        <div class='item content' id='content'>
            <div class="header-content-info-class">
                <h3>Thông tin lớp học</h3>
                <div class="infor-class-student">
                    <div><b>Tên lớp: </b><?php echo $row['ten_lop'] ?></div>
                    <div><b>Sĩ số:
                        </b><?php echo $result_xem_thong_tin_diem_cua_lop->num_rows.'/'. $row['si_so_toi_da'] ?></div>
                </div>
            </div>
            <div class='box-information'>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Điểm A</th>
                        <th>Điểm B</th>
                        <th>Nhận xét</th>
                        <th>Hành động</th>
                        <?php
                        // sử dụng vòng lặp for để hiển thị ra các thông tin của result_xem_thong_tin_diem_cua_lop
                        for($i=1;$result_xem_thong_tin_diem_cua_lop->num_rows>=$i;$i++){
                            //Lấy một hàng dữ liệu dưới dạng mảng liên assoc
                            $row = $result_xem_thong_tin_diem_cua_lop->fetch_assoc();
                            echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $row['ho'] . "</td>";
                                echo "<td>" . $row['ten'] . "</td>";
                                echo "<td>" . $row['diem_a'] . "</td>";
                                echo "<td>" . $row['diem_b'] . "</td>";
                                echo "<td>" . $row['nhan_xet'] . "</td>";
                                echo "<td><a class='btn btn-primary' type='button' href='nhap_sua_diem.php?ma_hoc_sinh=$row[ma_hoc_sinh]&ma_lop=$ma_lop' >Nhập/Sửa<a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
        </div>
    </content>
    <!-- Kết thúc content của trang -->
    <!-- footer -->

    <!-- Kết thúc footer -->
    <!-- Đóng if isset từ dòng 18 -->
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
</body>

</html>