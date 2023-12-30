<div id="web-detail-student">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="../css/style-home-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous"/>
    <script src="js/class_detail.js"></script>
    <style>
      .item-box-information-class {
        width: 80%;
      }
      .table-class {
        text-align: center;
      }
    </style>
</head>
<body>
<?php
session_start();
  if(isset($_SESSION['ten'])){
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-menu-top">
    <div class="container-fluid nav-menu">
      <a class="navbar-brand" href="#"><img src="../image/img-british-council.jpg" class='img-logo'></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" id="text" href="homeAdmin.php">Trang chủ</a>
          <a class="nav-link" id="text" href="detailStudent.php">Quản lí học sinh</a>
          <a class="nav-link" id="text" href="detailTeacher.php">Quản lí giáo viên</a>
          <a class="nav-link" id="text" href="detailCourse.php">Quản lí khóa học</a>
          <a class="nav-link" id="text" href="detailClass.php">Quản lí lớp</a>
        </div>
      </div>
      <div class="dropdown mt-3" id="box-avt">
        <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" id="user-avt"><img src="../image/admin.png" id="img-admin"><p class="name"><?php echo $_SESSION['ten']; ?></p></div> 
        <ul class="dropdown-menu left drop-menu">
          <li><a class="dropdown-item" href="#">Thông tin cá nhân</a></li>
          <li><a class="dropdown-item" href="#">Sửa thông tin cá nhân</a></li>
          <hr>
          <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </nav>
<content>
    <div class="item menu-left">
        <div>
            <h2 class="accordion-header" id="header-menu-left"><b>Adminator</b></h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Học sinh
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="nav-link" href=""><b>Thêm học sinh</b></a>
                        <a class="nav-link" href=""><b>Sửa thông tin học sinh</b></a>
                        <a class="nav-link" href=""><b>Xóa thông tin học sinh</b></a>
                        <a class="nav-link" href=""><b>Danh sách học sinh</b></a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Giáo viên
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="nav-link" href=""><b>Thêm giáo viên</b></a>
                        <a class="nav-link" href=""><b>Sửa thông tin giáo viên</b></a>
                        <a class="nav-link" href=""><b>Xóa thông tin giáo viên</b></a>
                        <a class="nav-link" href=""><b>Danh sách giáo viên</b></a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Khóa học
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="nav-link" href=""><b>Thêm khóa học</b></a>
                        <a class="nav-link" href=""><b>Sửa khóa học</b></a>
                        <a class="nav-link" href=""><b>Xóa khóa học</b></a>
                        <a class="nav-link" href=""><b>Danh sách khóa học</b></a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Lớp
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <a class="nav-link" href=""><b>Thêm lớp</b></a>
                          <a class="nav-link" href=""><b>Sửa thông tin lớp</b></a>
                          <a class="nav-link" href=""><b>Xóa lớp</b></a>
                          <a class="nav-link" href=""><b>Danh sách lớp</b></a>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
    <div class="detail-class">
        <div id="detail-class"></div>
    </div>
    <div class='item content' id='content'>
        <?php
        require "connect.php";
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
            <h2>Thông tin khóa học</h2>
            <div>
                <div>Số khóa học: <?php echo $resultClass->num_rows; ?></div>
            </div>
        </div>
        <div class='box-information'>
            <div class='item-box-information item-box-information-class'>
                <h3 class="header-box-info-student">Các khóa học nhiều học sinh đăng kí nhất</h3>
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
                        <button type="button" class="btn btn-info" id="detail-class">Chi tiết</button>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</content>
    <?php
  }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</div>