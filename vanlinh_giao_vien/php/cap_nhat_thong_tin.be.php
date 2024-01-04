<?php
    require 'connect.php';
    $ma_giao_vien = $_POST['ma_giao_vien'];
    $ten = $_POST['ten'];
    $ho = $_POST['ho'];
    $email = $_POST['email'];
    $so_dien_thoai= $_POST['so_dien_thoai'];
    $updateTeacher = "UPDATE giao_vien SET ten='$ten', ho='$ho', email='$email', so_dien_thoai='$so_dien_thoai' WHERE ma_giao_vien = $ma_giao_vien";
    $resultUpdateTeacher = $conn->query($updateTeacher);
    header('location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/xem_thong_tin_ca_nhan.php');
?>