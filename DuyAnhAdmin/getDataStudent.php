<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "connect.php";
    $sqlStudent = "SELECT * FROM tai_khoan WHERE ma_vai_tro = 3";
    $sqlStudentStudying = "SELECT * FROM hoc_sinh";
    $resultStudent = $conn->query($sqlStudent);
    $resultStudentStudying = $conn->query($sqlStudentStudying);
    // ĐIỂM ĐẦU VÀO CAO


    ?>
    <div class="header-content-info-student">
        <h2>Infomation Student</h2>
        <div>
            <div>Students account number: <?php echo $resultStudent->num_rows; ?></div>
            <div>Number of Students registered for the course: <?php echo $resultStudentStudying->num_rows; ?></div>
        </div>
    </div>
    <div class='box-information'>
        <div class='item-box-information'>
            <h3>Students</h3>
            
        </div>
        <div class='item-box-information'>
            <h3>Student scores</h3>
            <div><a class="nav-link" href=""><b>Top students with the highest entrance scores</b></a></div>
            <div><a class="nav-link" href=""><b>Top students have study points</b></a></div>
        </div>
        <div class='item-box-information'>
            <h3>Course</h3>

        </div>
        <div class='item-box-information'>
            <h3>Class</h3>

        </div>
    </div>
</body>
</html>
<?php
require 'connect.php';
echo "hello";
?>
