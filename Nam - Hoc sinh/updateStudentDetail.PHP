<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin học sinh</title>
    <link rel="stylesheet" href="../css/style-add_updateStudentDetail.css">
</head>
<body>
    <?php
    require 'connect.php';
    $ma_hoc_sinh = $_GET['ma_hoc_sinh'];
    $lay_du_lieu = "SELECT * FROM hoc_sinh WHERE ma_hoc_sinh=$ma_hoc_sinh";
    $result_lay_du_lieu = $conn->query($lay_du_lieu);
    $row_lay_du_lieu = $result_lay_du_lieu->fetch_assoc();
    $ten_cu = $row_lay_du_lieu['ten'];
    $ho_cu = $row_lay_du_lieu['ho'];
    $email_cu = $row_lay_du_lieu['email'];
    $phone_cu = $row_lay_du_lieu['so_dien_thoai'];
    ?>
    <div class="input-detail-panel">
    <p class="panel-title">Trang cập nhật thông tin</p> <br>    
    <form action="" method="post">   
        <label for="ten">Đổi tên</label>
        <input type="text" id="ten" name="ten" required class="input-content input" placeholder="<?php echo"$ten_cu"?>"><br><br>
        
        <label for="ho">Đổi Họ</label>
        <input type="text" id="ho" name="ho" required class="input-content input" placeholder="<?php echo"$ho_cu"?>"><br><br>
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required class="input-content input" placeholder="<?php echo"$email_cu"?>"><br><br>

        <label for="phone">Số điện thoại</label>
        <input type="number" id="phone" name="phone" required class="input-content input" placeholder="<?php echo"$phone_cu"?>"><br><br>
        
        <input type="submit" name="submit" value="Cập nhật" class="buttom-add">
    </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $ten = $_POST['ten'];
        $ho = $_POST['ho'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        require 'connect.php';
        $sql = "UPDATE hoc_sinh SET ten='$ten', ho='$ho', email='$email', so_dien_thoai='$phone' WHERE ma_hoc_sinh=$ma_hoc_sinh";
        if ($conn->query($sql) === True)
        {
            echo '<p class="notification-content">Đã Sửa thông tin thành công !</p>';
        }
        else
        {
            echo '<p class="notification-content">đã xảy ra lỗi</p>';
        }
    }
    ?>  
</body>
</html>