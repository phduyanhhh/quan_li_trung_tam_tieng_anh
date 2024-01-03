<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem học sinh</title>
</head>

<?php
        $ten = $_GET['ten'];
        
        require 'connect.php';
        $sql = "SELECT * FROM hoc_sinh WHERE ten LIKE '%$ten%'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {   
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>$row[ma_hoc_sinh]</td>";
                echo "<td>$row[ten]</td>";
                echo "<td>$row[ho]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[so_dien_thoai]</td>";
                echo "<td>$row[diem_dau_vao]</td>";
                echo "<td><a class='btn btn-danger' href='xoaThongTinHocSinh.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>" . "Xóa" . "</a> <a class='btn btn-info' href='capNhatThongTinHocSinh.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>Sửa</a></td>";
                echo "</tr>";
            }
        }
        else {
            echo "no student in database";
        }
?>