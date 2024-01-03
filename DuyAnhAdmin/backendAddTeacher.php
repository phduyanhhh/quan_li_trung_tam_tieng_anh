<?php
require "connect.php";
$userName = $_POST['user_name'];
$password = $_POST['password'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$level = $_POST['level'];
$sqlAddTaiKhoan = "INSERT INTO `tai_khoan`(`ten_dang_nhap`, `mat_khau`, `ma_vai_tro`) VALUES ('$userName','$password','2')";
if($conn->query($sqlAddTaiKhoan)){
    $sqlMaTaiKhoan = "SELECT * FROM `tai_khoan` WHERE ten_dang_nhap='$userName'";
    $resultMaTaiKhoan = $conn->query($sqlMaTaiKhoan);
    $rowMaTaiKhoan = $resultMaTaiKhoan->fetch_assoc();
    $ma_tai_khoan = $rowMaTaiKhoan['ma_tai_khoan'];
    $sqlAddGiaoVien = "INSERT INTO `giao_vien`(`ma_tai_khoan`, `ten`, `ho`, `email`, `so_dien_thoai`, `trinh_do`) VALUES ('$ma_tai_khoan','$firstName','$lastName','$email','$phoneNumber','$level')";
    if($conn->query($sqlAddGiaoVien)){
        header('location: homeAdmin.php');
    }
}
?>