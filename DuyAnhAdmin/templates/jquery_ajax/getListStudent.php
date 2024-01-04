<head>
</head>
<body>
<div>
<?php
require '../../connect.php';
$sqlListStudent = "SELECT * FROM `hoc_sinh`";
$resultListStudent = $conn->query($sqlListStudent);
if($resultListStudent->num_rows>0){
    ?>
    <div class="list-student" id="list-student">
        <div><a type="button" class="btn-close" id="button-close" href="homeAdmin.php"></a></div>
        <div class="list-header"><h3>Danh sách học sinh</h3></div>
        <div class="scrollable">
            <table class="table table-striped table-list">
                <tr>
                    <th>#</th>
                    <th>Học sinh</th>
                    <th>Điểm</th>
                    <?php
                    for($i=1;$resultListStudent->num_rows>=$i;$i++){
                        $rowListStudent = $resultListStudent->fetch_assoc();
                        echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $rowListStudent['ho'] . " " .$rowListStudent['ten'] . "</td>";
                            echo "<td>" . $rowListStudent['diem_dau_vao'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
                
            </table>
        </div>
    </div>

    <?php
}
?>
</div>
</body>