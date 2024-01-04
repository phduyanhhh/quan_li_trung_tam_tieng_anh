<head>
</head>
<body>
<div>
<?php
require '../../connect.php';
$sqlListTeacher = "SELECT * FROM `giao_vien`";
$resultListTeacher = $conn->query($sqlListTeacher);
if($resultListTeacher->num_rows>0){
    ?>
    <div class="list-teacher" id="list-teacher">
        <div><a type="button" class="btn-close" id="button-close" href="homeAdmin.php"></a></div>
        <div class="list-header"><h3>Danh sách giáo viên</h3></div>
        <div class="scrollable">
            <table class="table table-striped table-list">
                <tr>
                    <th>#</th>
                    <th>Tên giáo viên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Trình độ</th>
                    <?php
                    for($i=1;$resultListTeacher->num_rows>=$i;$i++){
                        $rowListTeacher = $resultListTeacher->fetch_assoc();
                        echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $rowListTeacher['ho'] . " " .$rowListTeacher['ten'] . "</td>";
                            echo "<td>" . $rowListTeacher['email'] . "</td>";
                            echo "<td>" . $rowListTeacher['so_dien_thoai'] . "</td>";
                            echo "<td>" . $rowListTeacher['trinh_do'] . "</td>";
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