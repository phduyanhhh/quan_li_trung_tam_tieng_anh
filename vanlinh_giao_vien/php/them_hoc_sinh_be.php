<?php
    require 'connect.php';
    $ma_lop = $_GET['ma_lop'];
    $ma_hoc_sinh = $_GET['ma_hoc_sinh'];

    $sql_them_hoc_sinh = "INSERT INTO diem_cua_lop( ma_lop, ma_hoc_sinh) VALUES ($ma_lop,$ma_hoc_sinh) ";

    if ($conn->query($sql_them_hoc_sinh) === TRUE ){
        header ("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/chi_tiet_lop.php?ma_lop=$ma_lop");
    }
    else{
        header ("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/chi_tiet_lop.php?ma_lop=$ma_lop");
    }
?>