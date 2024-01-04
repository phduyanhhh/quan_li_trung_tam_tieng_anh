<?php
        require "../../connect.php";
        $sqlCourse = "SELECT * FROM khoa_hoc";
        $resultCourse = $conn->query($sqlCourse);
        // ---------Số học sinh đăng kí khóa học----------

        ?>
        <div class="header-content-info-student">
            <h2>Thông tin khóa học</h2>
            <div>
                <div>Số khóa học: <?php echo $resultCourse->num_rows; ?></div>
            </div>
        </div>
        <div class='box-information'>
            <div class='item-box-information item-box-information-course'>
                <h3 class="header-box-info-student">Các khóa học nhiều học sinh đăng kí nhất</h3>
                <?php
                    if($resultCourse->num_rows>0){
                        ?>
                        <table class="table table-striped table-course">
                            <tr>
                                <th>#</th>
                                <th>Tên khóa học</th>
                                <th>Học phí</th>
                                <th>Số buổi</th>
                                <th>Điều kiện</th>
                                <th>Số học sinh đã đăng kí</th>
                            </tr>
                                <?php
                                for($i=1;$resultCourse->num_rows>=$i;$i++){
                                  ?>
                                  <tr>
                                  <?php
                                    $rowCourse = $resultCourse->fetch_assoc();
                                    $sqlIdCourseStudent = "SELECT * FROM `diem_cua_lop` INNER JOIN lop ON lop.ma_lop = diem_cua_lop.ma_lop INNER JOIN khoa_hoc ON khoa_hoc.ma_khoa_hoc=lop.ma_khoa_hoc WHERE khoa_hoc.ma_khoa_hoc='$i'";
                                    $resultIdCourseStudent = $conn->query($sqlIdCourseStudent);
  
                                  ?>
                                  <td><?php echo $i ?></td>
                                    <td><?php echo $rowCourse['ten_khoa_hoc'] ?></td>
                                    <td><?php echo $rowCourse['hoc_phi'] ?></td>
                                    <td><?php echo $rowCourse['so_tiet'] ?></td>
                                    <td><?php echo $rowCourse['dieu_kien'] ?></td>
                                    <td><?php echo $resultIdCourseStudent->num_rows ?></td>
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
    </div>