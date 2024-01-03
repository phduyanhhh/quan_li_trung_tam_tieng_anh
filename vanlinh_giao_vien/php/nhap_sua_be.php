<?php
    require 'connect.php';
    $ma_lop=$_GET['ma_lop'];
    $ma_hoc_sinh=$_GET['ma_hoc_sinh'];
    $sql_nhap_sua_diem = "UPDATE diem_cua_lop SET diem_a = $_GET[diem_a] ,diem_b = $_GET[diem_b], nhan_xet='$_GET[nhan_xet]' WHERE ma_lop=$ma_lop and ma_hoc_sinh=$ma_hoc_sinh" ;
    if ($conn->query($sql_nhap_sua_diem)){
        header ("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/chi_tiet_lop.php?ma_lop=$ma_lop");
    }
?>