<?php
$idCourse = $_GET['id'];
require "../connect.php";
echo $idCourse;
$sqlDeleteCourse = "DELETE FROM `khoa_hoc` WHERE ma_khoa_hoc=$idCourse";
if($conn->query($sqlDeleteCourse)){
    header('location: ../templates/remove/deleteCourse.php');
}
?>