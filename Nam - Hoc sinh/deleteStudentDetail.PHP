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