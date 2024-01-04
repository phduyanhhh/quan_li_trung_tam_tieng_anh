<head>
</head>
<body>
<div>
<?php
require '../../connect.php';
$sqlListCourse = "SELECT * FROM `khoa_hoc`";
$resultListCourse = $conn->query($sqlListCourse);
if($resultListCourse->num_rows>0){
    ?>
    <div class="list-course" id="list-course">
        <div><a type="button" class="btn-close" id="button-close" href="homeAdmin.php"></a></div>
        <div class="list-header"><h3>Danh sách các khóa học</h3></div>
        <div class="scrollablee">
            <table class="table table-striped table-list table-list-course">
                <tr>
                    <th>#</th>
                    <th>Tên khóa học</th>
                    <th>Số buổi</th>
                    <th>Học phí</th>
                    <?php
                    for($i=1;$resultListCourse->num_rows>=$i;$i++){
                        $rowListCourse = $resultListCourse->fetch_assoc();
                        echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $rowListCourse['ten_khoa_hoc'] . "</td>";
                            echo "<td>" . $rowListCourse['so_tiet'] . "</td>";
                            echo "<td>" . $rowListCourse['hoc_phi'] . "</td>";
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