<?php
require 'connect.php';
if ($_POST["xoa_lop"]){
    $chkarr = $_POST["xoa_lop"];
    foreach ($chkarr as $ma_lop) {
        $sql = "DELETE  FROM lop WHERE ma_lop = $ma_lop";
        $conn->query($sql);
        header('location: http://localhost/Web_cuoi_ki/quan_li_trung_tam_tieng_anh/vanlinh_giao_vien/php/thong_tin_lop.php');
    }
}
?>