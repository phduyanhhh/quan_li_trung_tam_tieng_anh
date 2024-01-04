<?php
require "../connect.php";
$nameCourse = $_POST['name_course'];
$lession = $_POST['lession'];
$fee = $_POST['fee'];
$condition = $_POST['condition'];
$sqlAddCourse = "INSERT INTO `khoa_hoc`(`ten_khoa_hoc`, `so_tiet`, `hoc_phi`, `dieu_kien`) VALUES ('$nameCourse','$lession','$fee','$condition')";
if($conn->query($sqlAddCourse)){
    header('location: ../homeAdmin.php');
}
?>