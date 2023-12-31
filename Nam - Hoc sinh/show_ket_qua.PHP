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
            echo "<br>";
            echo "<table border = 1>
            <tr>    
                <th>ID</th>
                <th>Tên</th>
                <th>họ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Điểm đầu vào</th>
                <th>Thao tác</th>
            <tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>$row[ma_hoc_sinh]</td>";
                echo "<td>$row[ten]</td>";
                echo "<td>$row[ho]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[so_dien_thoai]</td>";
                echo "<td>$row[diem_dau_vao]</td>";
                echo "<td><a href='deleteStudentDetail.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>" . "Xóa" . "</a> <a href='updateStudentDetail.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>Sửa</a></td>";
            }
            echo "</table>";
            echo "</form>";
        }
        else {
            echo "no student in database";
        }
?>