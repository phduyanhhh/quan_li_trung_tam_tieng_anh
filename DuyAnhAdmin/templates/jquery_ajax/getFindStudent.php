<head>
<!-- <<<<<<< HEAD:DuyAnhAdmin/templates/jquery_ajax/getFindStudent.php
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/delete_student.js"></script> -->
<!-- <link rel="stylesheet" type='text/css' href="../../css/style-homeadmin.css">
<script src="../../js/find.js"></script>
=======
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/delete_student.js"></script>
    <link rel="stylesheet" type='text/css' href="../css/style-home-admin.css">
    <script src="js/find.js"></script> -->
</head>

<body>
    <?php
    require '../../connect.php'; 
    $nameStudent = $_GET['name'];
    $sqlFindStudent = "SELECT * FROM hoc_sinh INNER JOIN tai_khoan ON hoc_sinh.ma_tai_khoan = tai_khoan.ma_tai_khoan INNER JOIN diem_cua_lop ON hoc_sinh.ma_hoc_sinh = diem_cua_lop.ma_hoc_sinh INNER JOIN lop ON diem_cua_lop.ma_lop = lop.ma_lop WHERE hoc_sinh.ten LIKE '$nameStudent%'";
    $resultFindStudent = $conn->query($sqlFindStudent);
    ?>
    <table class="table table-striped table-delete-student">

      
          <tr>
              <th>#</th>
              <th>Tên học sinh</th>
              <th>Lớp</th>
              <th>Điểm đầu vào</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Xóa</th>
          </tr>
    <?php
    for($i=1;$resultFindStudent->num_rows>=$i;$i++){
        $rowFindStudent = $resultFindStudent->fetch_assoc();
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rowFindStudent['ho'] . " j " . $rowFindStudent['ten']; ?></td>
            <td><?php echo $rowFindStudent['ten_lop']; ?></td>
            <td><?php echo $rowFindStudent['diem_dau_vao']; ?></td>
            <td><?php echo $rowFindStudent['email']; ?></td>
            <td><?php echo $rowFindStudent['so_dien_thoai']; ?></td>
            <td>
                <div class="form-check">
                    <input class="form-check-input checkbox-student" type="checkbox" name="delete_student[]"
                        value=<?php echo $rowFindStudent['ma_tai_khoan']; ?> id="checkbox-student">
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