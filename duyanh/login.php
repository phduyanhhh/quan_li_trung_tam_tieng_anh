<?php
    session_start();
    require 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqlSelect = "SELECT * FROM tai_khoan WHERE ten_dang_nhap='$username'";
    $resultSqlSelect = $conn->query($sqlSelect);
    if($resultSqlSelect->num_rows>0){
        $row = $resultSqlSelect->fetch_assoc();
        if($row['mat_khau']==$password){
            if($row['ma_vai_tro']==1){
                $sqlAdmin = "SELECT * FROM tai_khoan INNER JOIN admin ON tai_khoan.ma_tai_khoan = admin.ma_tai_khoan WHERE ten_dang_nhap='$username'";
                $resultSqlAdmin = $conn->query($sqlAdmin);
                $rowSqlAdmin = $resultSqlAdmin->fetch_assoc();
                $_SESSION['ten'] = $rowSqlAdmin['ten'];
                $_SESSION['vai_tro'] = $rowSqlAdmin['ma_vai_tro'];
                header("location: homeMaster.php");
            } elseif($row['ma_vai_tro']==2)
        } else {
            echo "Sai mật";
        }
    }