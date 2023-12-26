<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thông tin học sinh</title>
</head>
<body>
<h1>Thêm thông tin học sinh</h1>
    <form method="get" action="">
        <label for="ten">Tên </label>
        <input type="text" id="ten" name="ten" required><br><br>
        
        <label for="ho">Họ</label>
        <input type="text" id="ho" name="ho" required><br><br>
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="so_dien_thoai">Số Điện thoại</label>
        <input type="text" id="so_dien_thoai" name="so_dien_thoai" required><br><br>
        
        <input type="submit" name="submit" value="Thêm">
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
                echo "Đã thêm thông tin học sinh";
            }
            else
            {
                echo "Lỗi";
            }
        }
    ?>
</body>
</html>
