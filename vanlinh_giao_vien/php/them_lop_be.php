<?php
    require 'connect.php';
    $ma_giao_vien= $_GET['giao_vien'];
    $ma_khoa_hoc= $_GET['khoa_hoc'];
    $ten_lop = $_GET['ten_lop'];
    $si_so_toi_da = $_GET['si_so_toi_da'];
    $ngay_bat_dau = $_GET['ngay_bat_dau'];
    $lich_hoc = $_GET['lich_hoc'];
    $sql_them_lop = "INSERT INTO lop( ma_giao_vien, ma_khoa_hoc, ten_lop, si_so_toi_da, ngay_bat_dau, lich_hoc) 
    VALUES ($ma_giao_vien,$ma_khoa_hoc,'$ten_lop',$si_so_toi_da,'$ngay_bat_dau','$lich_hoc') ";
    if ($conn->query($sql_them_lop)){
        header ("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/thong_tin_lop.php");
    }
?>