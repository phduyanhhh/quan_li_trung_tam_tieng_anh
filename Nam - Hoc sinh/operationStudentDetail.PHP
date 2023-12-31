<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin học sinh</title>
    <link rel="stylesheet" href="../css/style-operationStudentDetails.css">
</head>
<body>
    <div class="detail-panel">
    <p class="panel-title">Thông tin Học sinh</p>
    <?php
    echo "<form method=POST>";
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM hoc_sinh";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
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
            echo "<td><a href='deleteStudentDetail.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>" . "Xóa" . "</a> <a href=#>Sửa</a></td>";
        }
        echo "</table>";
        echo "</form>";
    }
    else {
        echo "no student in database";
    }
    ?>
</div>
</body>
</html>