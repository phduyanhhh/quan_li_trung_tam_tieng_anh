
<?php
    require "../../connect.php";
    $selectTeacher = $_GET['select'];
    $listSelectTeacher = explode(",", $selectTeacher);
    $numberListSelectTeacher = count($listSelectTeacher);
    $id = [];
    foreach ($listSelectTeacher as $value){
        $id[] = intval($value);
    }
    for($i=0;$numberListSelectTeacher>$i;$i++) {
        $ma_tai_khoan = $id[$i];
        $sqlClass = "SELECT * FROM `giao_vien` INNER JOIN lop ON giao_vien.ma_giao_vien=lop.ma_giao_vien WHERE giao_vien.ma_tai_khoan='$ma_tai_khoan'";
        $resultClass = $conn->query($sqlClass);
        if($resultClass->num_rows>0){
            $rowClass = $resultClass->fetch_assoc();    
            $ma_giao_vien = $rowClass['ma_giao_vien'];
            $sqlClassDelete = "DELETE FROM `lop` WHERE ma_giao_vien='$ma_giao_vien'";
            $sqlDeleteTeacher = "DELETE FROM `giao_vien` WHERE ma_tai_khoan='$ma_tai_khoan'";
            $sqlDeleteAccount = "DELETE FROM `tai_khoan` WHERE ma_tai_khoan='$ma_tai_khoan'";
            if($conn->query($sqlClassDelete)){
                if($conn->query($sqlDeleteTeacher)){
                    if($conn->query($sqlDeleteAccount)){
                        header('location: getFindTeacher.php');
                    }
                }
            }
        }
    }
?>