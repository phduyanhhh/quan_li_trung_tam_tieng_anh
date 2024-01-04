<?php
$idCourse = $_GET['id'];
$nameCourse = $_POST['name-course'];
$lesson = $_POST['lesson'];
$fee = $_POST['fee'];
$range = $_POST['range'];
echo $nameCourse;
echo $lesson;
echo $fee;
echo $range;
require "../connect.php";
$sqlUpdateCourse = "UPDATE `khoa_hoc` SET `ten_khoa_hoc`='$nameCourse',`so_tiet`='$lesson',`hoc_phi`='$fee',`dieu_kien`='$range' WHERE `ma_khoa_hoc`=$idCourse";
if($conn->query($sqlUpdateCourse)){
    header('location: ../templates/update/updateCourse.php');
}
?>