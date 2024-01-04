<?php
        require "../../connect.php";
        $sqlClass = "SELECT * FROM lop";
        $resultClass = $conn->query($sqlClass);
        // ----------Tên khóa học
        $sqlClassCourse = "SELECT lop.ten_lop, khoa_hoc.ten_khoa_hoc FROM `lop` INNER JOIN khoa_hoc ON lop.ma_khoa_hoc = khoa_hoc.ma_khoa_hoc;";
        $resultClassCourse = $conn->query($sqlClassCourse);
        // ---------Sĩ số----------
        $sqlClassHaveStudent = "SELECT lop.ma_lop, diem_cua_lop.ma_hoc_sinh FROM `lop` INNER JOIN diem_cua_lop ON lop.ma_lop = diem_cua_lop.ma_lop GROUP BY lop.ma_lop"; // Số lớp có học sinh học
        $resultClassHaveStudent = $conn->query($sqlClassHaveStudent);
        // Giáo viên dạy
        $sqlTeacherClass = "SELECT lop.ma_lop, lop.ten_lop, giao_vien.ho, giao_vien.ten FROM lop INNER JOIN giao_vien ON lop.ma_giao_vien = giao_vien.ma_giao_vien";
        $resultTeacherClass = $conn->query($sqlTeacherClass);
        ?>
        <div class="header-content-info-student">
            <h2>Thông tin lớp học</h2>
            <div>
                <div>Số lớp học: <?php echo $resultClass->num_rows; ?></div>
            </div>
        </div>
        <div class='box-information'>
            <div class='item-box-information item-box-information-class'>
            <div><a type="button" class="btn-close" id="button-close" href="homeAdmin.php"></a></div>
                <h3 class="header-box-info-student">Danh sách các lớp học</h3>
                <?php
                    if($resultClass->num_rows>0){
                        ?>
                        <table class="table table-striped table-class">
                            <tr>
                                <th>#</th>
                                <th>Khóa</th>
                                <th>Tên lớp học</th>
                                <th>Sĩ số</th>
                                <th>Giáo viên dạy</th>
                            </tr>
                                <?php
                                for($i=1;8>=$i;$i++){
                                    $rowClass = $resultClass->fetch_assoc();
                                    $rowClassCourse = $resultClassCourse->fetch_assoc();
                                    $rowTeacherClass= $resultTeacherClass->fetch_assoc();
                                    // SQL SĨ SỐ
                                    $sqlStudentClass = "SELECT lop.ma_lop, diem_cua_lop.ma_hoc_sinh FROM `lop` INNER JOIN diem_cua_lop ON lop.ma_lop = diem_cua_lop.ma_lop WHERE lop.ma_lop = '$i'";
                                    $resultStudentClass = $conn->query($sqlStudentClass);
                                  ?>
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rowClassCourse['ten_khoa_hoc']; ?></td>
                                    <td><?php echo $rowClassCourse['ten_lop']; ?></td>
                                    <td>
                                        <?php
                                            echo $resultStudentClass->num_rows . "/" . $rowClass['si_so_toi_da'];
                                        ?>
                                    </td>
                                    <td><?php echo $rowTeacherClass['ho'] . " " . $rowTeacherClass['ten']; ?></td>
                                  </tr>
                                <?php
                                }
                                ?>
                        </table>
                        <?php
                    }
                ?>
            </div>
        </div>