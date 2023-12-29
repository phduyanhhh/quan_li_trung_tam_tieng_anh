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
    <script src="js/ajax_score_high.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>
<body>
<?php
session_start();
  if(isset($_SESSION['ten'])){
    require 'connect.php';
    // số tài khoản
    $sqlStudent = "SELECT * FROM tai_khoan WHERE ma_vai_tro = 3";
    $sqlTeacher = "SELECT * FROM tai_khoan WHERE ma_vai_tro = 2";
    // số tài khoản đang hoạt động
    $sqlStudentStudying = "SELECT * FROM hoc_sinh";
    $sqlTeacherTeaching = "SELECT * FROM lop GROUP BY ma_giao_vien";
    $resultStudent = $conn->query($sqlStudent);
    $resultTeacher = $conn->query($sqlTeacher);
    $resultStudentStudying = $conn->query($sqlStudentStudying);
    $resultTeacherTeaching = $conn->query($sqlTeacherTeaching);
    // Số khóa học
    $sqlCourse = "SELECT * FROM khoa_hoc";
    $resultCourse = $conn->query($sqlCourse);
    // Số lớp học
    $sqlClass = "SELECT * FROM lop";
    $resultClass = $conn->query($sqlClass);
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
          <a class="nav-link" id="text" href="">Quản lí giáo viên</a>
          <a class="nav-link" id="text" href="">Quản lí học sinh</a>
          <a class="nav-link" id="text" href="">Quản lí khóa học</a>
          <a class="nav-link" id="text" href="">Quản lí lớp</a>
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
                                for($i=1;$i<=8;$i++){
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
                        <button type="button" class="btn btn-info" id="detail-score-high">Chi tiết</button>
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
                                for($i=1;$i<=8;$i++){
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
                        </div>
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