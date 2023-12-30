<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem học sinh</title>
    <link rel="stylesheet" href="../css/style-showStudentDetail.css">
</head>
<body>
    <div class="detail-panel">
    <p class="panel-title">Bảng thông tin học sinh</p>
    <?php
        require 'connect.php';
        $sql = "SELECT * FROM hoc_sinh";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            echo "<table>"; 
                {
                    $tieuDe = array('ID', 'Tên', 'Họ','Email' ,'Số điện thoại','Điểm đầu vào');
                    echo"<tr id='tieu_de'>";
                    for($i = 0 ; $i < count($tieuDe); $i += 1) {
                        echo "<td>$tieuDe[$i]</td>";
                    }
                    echo "</tr>";
                    for ($i=0; $i<$result->num_rows; $i++){
                    $row = $result->fetch_assoc();
                    echo"<tr>";
                        echo "<td>$row[ma_hoc_sinh]</td>";
                        echo "<td>$row[ten]</td>";
                        echo "<td>$row[ho]</td>";
                        echo "<td>$row[email]</td>";
                        echo "<td>$row[so_dien_thoai]</td>";
                        echo "<td>$row[diem_dau_vao]</td>";
                    echo "</tr>";
                    }
                }
            echo "</table>"; 
        }
        else{
            echo "NO user in database";
        }
        $conn->close();
    ?>
    </div>
</body>
</html>