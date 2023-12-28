    <?php
    require "connect.php";
    $sqlStudent = "SELECT * FROM tai_khoan WHERE ma_vai_tro = 3";
    $sqlStudentStudying = "SELECT * FROM hoc_sinh";
    $resultStudent = $conn->query($sqlStudent);
    $resultStudentStudying = $conn->query($sqlStudentStudying);
    // ĐIỂM ĐẦU VÀO CAO, THẤP
    $sqlHighScore = "SELECT * FROM `hoc_sinh` WHERE diem_dau_vao >= 9 ORDER BY diem_dau_vao DESC";
    $sqlLowScore = "SELECT * FROM `hoc_sinh` WHERE diem_dau_vao <= 4 ORDER BY diem_dau_vao ASC";
    $resultSqlHighScore = $conn->query($sqlHighScore);
    $resultSqlLowScore = $conn->query($sqlLowScore);
    ?>
    <div class="header-content-info-student">
        <h2>Thông tin học sinh</h2>
        <div>
            <div>Số tài khoản học sinh: <?php echo $resultStudent->num_rows; ?></div>
            <div>Số tài khoản học sinh đã đăng kí khóa học: <?php echo $resultStudentStudying->num_rows; ?></div>
        </div>
    </div>
    <div class='box-information'>
        <div class='item-box-information'>
            <h3 class="header-box-info-student">Các học sinh có điểm đầu vào cao</h3>
            <?php
                if($resultSqlHighScore->num_rows>0){
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Học sinh</th>
                            <th>Điểm</th>
                            <?php
                            for($i=1;$i<=10;$i++){
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
                    <button type="button" class="btn btn-info">Chi tiết</button>
                    <?php
                }
            ?>
        </div>
        <div class='item-box-information'>
            <h3 class="header-box-info-student">Các học sinh có điểm đầu vào thấp</h3>
            <?php
                if($resultSqlLowScore->num_rows>0){
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Học sinh</th>
                            <th>Điểm</th>
                            <?php
                            for($i=1;$i<=10;$i++){
                                $rowLowScore = $resultSqlLowScore->fetch_assoc();
                                echo "<tr>";
                                    echo "<td>" . $i . "</td>";
                                    echo "<td>" . $rowLowScore['ho'] . " " .$rowLowScore['ten'] . "</td>";
                                    echo "<td>" . $rowLowScore['diem_dau_vao'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-info">Chi tiết</button>
                    <?php
                }
            ?>
        </div>
    </div>
    <button type="button" class="btn-close" aria-label="Close"></button>