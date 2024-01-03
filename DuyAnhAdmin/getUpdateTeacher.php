<?php
    if(isset($_POST['level-update'])){
        session_start();
        require "connect.php";
        $ma_tai_khoan = $_SESSION['ma_tai_khoan'];
        $levelUpdate = $_POST['level-update'];
        $sqlUpdateTeacher = "UPDATE giao_vien SET trinh_do='$levelUpdate' WHERE ma_tai_khoan='$ma_tai_khoan'";
        if($conn->query($sqlUpdateTeacher)){
            header('location: updateTeacher.php');
        }
    }
?>