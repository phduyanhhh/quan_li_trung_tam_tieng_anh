<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thông tin học sinh</title>
    <link rel="stylesheet" href="../css/style-add_updateStudentDetail.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="thongTinHocSinh.PHP">Về trang thông tin học sinh</a>
    </li>
  </ul>
</nav>
<br>
<div class="input-detail-panel">
<p class="panel-title">Thêm thông tin học sinh</p> <br>
    <form method="get" action="">
        <p for="ten" class="input-content ">Tên </p>
        <input type="text" id="ten" name="ten" required class="input-content input"><br><br>
        
        <p for="ho" class="input-content ">Họ</p>
        <input type="text" id="ho" name="ho" required class="input-content input"><br><br>
        
        <p for="email" class="input-content ">Email</p>
        <input type="text" id="email" name="email" required class="input-content input"><br><br>

        <p for="so_dien_thoai" class="input-content ">Số Điện thoại</p>
        <input type="text" id="so_dien_thoai" name="so_dien_thoai" required class="input-content input"><br><br>
        
        <input type="submit" name="submit" value="Thêm" class="buttom-add">
    </form>
    <?php
        if (isset($_GET['submit'])) {
            $ten = $_GET['ten'];
            $ho = $_GET['ho'];
            $email = $_GET['email'];
            $so_dien_thoai = $_GET['so_dien_thoai'];

            require 'connect.php';

            $sql = "INSERT INTO hoc_sinh (ten, ho, email, so_dien_thoai) VALUES ('$ten', '$ho', '$email', $so_dien_thoai)";

            if ($conn->query($sql) === True)
            {
                echo '<p class="notification-content">Đã thêm thông tin thành công !</p>';
            }
            else
            {
                echo '<p class="notification-content">Đã xảy ra lỗi</p>';
            }
        }
    ?>
    </div>
</body>

</html>