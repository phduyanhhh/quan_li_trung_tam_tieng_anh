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
    <script src="js/student_score.js"></script>
    <style>
      .item-box-information-course {
        width: 80%;
      }
      .table-course {
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
    <div class="detail-score">
        <div id="detail-score"></div>
    </div>
    <div class='item content' id='content'>
        <?php
        require "connect.php";
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
</content>
    <?php
  }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</div>