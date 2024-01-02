<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo xóa học sinh</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>

    .detail-panel {
    width: 80%;
    margin: 0 auto;
    border: 18px solid #EBEFF0;
    }
    .panel-title {
    background-color: #00953B;
    margin: 0;
    padding: 25px;
    color: white;
    font-weight: bold;
    text-align: center;
    }
    .notification-panel {
        margin left: 550px;
        text-align: center;
    }
    </style>
</head>
<body>
    
</body>
</html>
<div class="detail-panel">
<p class="panel-title">Xóa thông tin học sinh</p>
<div class="notification-panel">
    <br>
<?php
    require 'connect.PHP';
    $ma_hoc_sinh = $_GET['ma_hoc_sinh'];
    $sql = "DELETE FROM hoc_sinh WHERE ma_hoc_sinh = '$ma_hoc_sinh'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa học sinh có ID $ma_hoc_sinh thành công<br>";
    } else {
        echo "Lỗi khi xóa học sinh có ID $ma_hoc_sinh: ";
    }
    $conn->close();
?>
<a class="btn btn-success" href="operationStudentDetail.PHP">vê trang thông tin học sinh</a>
<br><br>
</div>
</div>