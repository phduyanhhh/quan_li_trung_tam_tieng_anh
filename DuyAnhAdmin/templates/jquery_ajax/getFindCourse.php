<?php
$idCourse = $_GET['id'];
require "../../connect.php";
$sqlCourse = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc='$idCourse'";
$resultCourse = $conn->query($sqlCourse);
$rowCourse = $resultCourse->fetch_assoc();
$nameCourse = $rowCourse['ten_khoa_hoc'];
$lesson = $rowCourse['so_tiet'];
$fee = $rowCourse['hoc_phi'];
$range = $rowCourse['dieu_kien'];
?>
<form action="../../backend/backendUpdateCourse.php?id='<?php echo $idCourse; ?>'" method="post">
    <b>Tên khóa học:</b> <br>
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="name-course" value="<?php echo $nameCourse ?>"> <br>
    <b>Số buổi:</b>
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="lesson" value="<?php echo $lesson ?>"> <br>
    <b>Học phí:</b>
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="fee" value="<?php echo $fee ?>"> <br>
    <b>Điều kiện đầu vào:</b>
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="range" value="<?php echo $range ?>"> <br>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>
