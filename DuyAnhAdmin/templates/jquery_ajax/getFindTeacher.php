<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="js/delete_student.js"></script> -->
<link rel="stylesheet" type='text/css' href="../../../css/style-homeadmin.css">
<script src="../../js/find_teacher.js"></script>
</head>
<body>    
    <?php
    require '../../connect.php'; 
    $nameTeacher = $_GET['name'];
    $sqlFindTeacher = "SELECT * FROM giao_vien INNER JOIN tai_khoan ON giao_vien.ma_tai_khoan = tai_khoan.ma_tai_khoan";
    $resultFindTeacher = $conn->query($sqlFindTeacher);
    ?>
    <table class="table table-striped table-delete-teacher">
            <tr>
                <th>#</th>
                <th>Tên giáo viên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Trình độ</th>
                <th>Xóa</th>
            </tr>
    <?php
    for($i=1;$resultFindTeacher->num_rows>=$i;$i++){
        $rowFindTeacher = $resultFindTeacher->fetch_assoc();
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rowFindTeacher['ho'] . " j " . $rowFindTeacher['ten']; ?></td>
            <td><?php echo $rowFindTeacher['email']; ?></td>
            <td><?php echo $rowFindTeacher['so_dien_thoai']; ?></td>
            <td><?php echo $rowFindTeacher['trinh_do']; ?></td>
            <td>
                <div class="form-check">
                    <input class="form-check-input checkbox-teacher" type="checkbox" name="delete_teacher[]" value=<?php echo $rowFindTeacher['ma_tai_khoan']; ?> id="checkbox-teacher">
                </div>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    <script>
        
    </script>
</body>