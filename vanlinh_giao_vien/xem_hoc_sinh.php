<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem học sinh</title>
</head>
<body>
    <?php
        require 'connect.php';
        $sql = "SELECT * FROM hoc_sinh";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            echo "<table>"; 
                echo "<caption><b>Bảng thông tin chuyến bay</b></caption>";
                {
                    $tieuDe = array('ID', 'Name', 'Gender','Created Date' ,'Point','Buy Ticket');
                    echo"<tr id='tieu_de'>";
                    for($i = 0 ; $i < count($tieuDe); $i += 1) {
                        echo "<td>$tieuDe[$i]</td>";
                    }
                    echo "</tr>";
                    for ($i=0; $i<$result->num_rows; $i++){
                    $row = $result->fetch_assoc();
                    echo"<tr>";
                        echo "<td>$row[ma_hoc_sinh]</td>";
                        echo "<td>$row[ma_tai_khoan]</td>";
                        echo "<td>$row[ten]</td>";
                        echo "<td>$row[ho]</td>";
                        echo "<td>$row[email]</td>";
                    echo "</tr>";
                    }
                }
            echo "</table>"; 
        }
        else{
            echo "NO flight in database";
        }
        $conn->close();
    ?>
</body>
</html>