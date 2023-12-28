<!-- <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head> -->
<?php
require 'connect.php';
$sqlHighScore = "SELECT * FROM `hoc_sinh` WHERE diem_dau_vao >= 9 ORDER BY diem_dau_vao DESC";
$resultSqlHighScore = $conn->query($sqlHighScore);
if($resultSqlHighScore->num_rows>0){
    ?>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Học sinh</th>
            <th>Điểm</th>
            <?php
            for($i=1;$resultSqlHighScore->num_rows>=$i;$i++){
                $rowHighScore = $resultSqlHighScore->fetch_assoc();
                echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $rowHighScore['ho'] . " " .$rowHighScore['ten'] . "</td>";
                    echo "<td>" . $rowHighScore['diem_dau_vao'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    <?php
}
?>