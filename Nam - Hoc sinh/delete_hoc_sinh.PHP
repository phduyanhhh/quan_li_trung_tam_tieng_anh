<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin học sinh</title>
</head>
<body>
    <h1>Thông tin Học sinh</h1>
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
        <tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>$row[ma_hoc_sinh]</td>";
            echo "<td>$row[ten]</td>";
            echo "<td>$row[ho]</td>";
            echo "<td>$row[email]</td>";
            echo "<td>$row[so_dien_thoai]</td>";
            echo "<td>$row[diem_dau_vao]</td>";
            echo "<td><input type=checkbox name=checkbox[] value=$row[ma_hoc_sinh]/></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br></br>";
        echo "<input type=submit name=delete value=DELETE />";
        echo "</form>";
    }
    else {
        echo "no student in database";
    }
?>

    <?php
    if (isset($_POST['delete']))
        {
            if (isset($_POST['checkbox']))
                {
                    $chkarr= $_POST['checkbox'];
                    foreach ($chkarr as $id)
                    {
                        $sql = "DELETE FROM hoc_sinh WHERE ma_hoc_sinh = '$id'";
                        $result = $conn->query($sql);
                        echo "đã xóa học sinh";
                    }
                }
        }
    $conn->close();

    ?>
</body>
</html>