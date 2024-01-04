<?php
    require 'connect.php';
    $ma_lop = $_GET['ma_lop'];
    $ma_giao_vien= $_GET['giao_vien'];
    $ma_khoa_hoc= $_GET['khoa_hoc'];
    $ten_lop = $_GET['ten_lop'];
    $si_so_toi_da = $_GET['si_so_toi_da'];
    $ngay_bat_dau = $_GET['ngay_bat_dau'];
    $lich_hoc = $_GET['lich_hoc'];
    $sql_them_lop = "UPDATE lop SET ma_giao_vien=$ma_giao_vien,ma_khoa_hoc=$ma_khoa_hoc,ten_lop='$ten_lop',si_so_toi_da= $si_so_toi_da,ngay_bat_dau='$ngay_bat_dau',lich_hoc='$lich_hoc'
     WHERE ma_lop=$ma_lop";
    if ($conn->query($sql_them_lop)){
        header ("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/sua_lop.php");
    }
?>