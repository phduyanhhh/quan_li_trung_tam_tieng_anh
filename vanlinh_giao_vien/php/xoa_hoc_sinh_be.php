<?php
require 'connect.php';
$ma_lop = $_GET['ma_lop'];
if ($_GET["xoa_hoc_sinh"]){
    $chkarr = $_GET["xoa_hoc_sinh"];
    foreach ($chkarr as $ma_hoc_sinh) {
        $sql = "DELETE  FROM diem_cua_lop WHERE ma_hoc_sinh = $ma_hoc_sinh";
        $conn->query($sql);
        header("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/chi_tiet_lop.php?ma_lop=$ma_lop");
    }
}
else{
    header("location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/chi_tiet_lop.php?ma_lop=$ma_lop");
}

?>