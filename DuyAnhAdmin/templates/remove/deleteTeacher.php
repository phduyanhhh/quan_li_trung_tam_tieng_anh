<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="../css/style-homeadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/find_teacher.js"></script>
    <script src="../DuyAnhAdmin/js/ex.js"></script>
    <style>
      .table-delete-teacher {
    text-align: center;
}
.table-delete-teacher tr td th {
    text-align: center;
}
.delete-teacher {
  overflow-y: scroll;
  height: 500px;
  width: 100%;
}
#search-teacher {
  width: 50%;
}
    </style>
</head>
<body>
<?php
session_start();
  if(isset($_SESSION['ten'])){
    require 'connect.php';
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
          <li><a class="dropdown-item" href="../../../templates/logout.php">Đăng xuất</a></li>
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
                        <button class="nav-link" id='remove-student'><b>Xóa thông tin học sinh</b></button>
                        <button class="nav-link" id='list-student'><b>Danh sách học sinh</b></button>
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
                          <a class="nav-link" href=""><b>Danh sách lớp</b></a>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
    <div class='item content' id='content'>
    <?php
    require "connect.php";
    $sqlTeacher = "SELECT * FROM giao_vien INNER JOIN tai_khoan ON giao_vien.ma_tai_khoan = tai_khoan.ma_tai_khoan";
    $resultTeacher = $conn->query($sqlTeacher);
?>
    <div id="alert-teacher">
      <input id="search-teacher">
        <div>
          <div class="delete-teacher">
          <div id="content-find-teacher">
        
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
          
          for($i=1;$resultTeacher->num_rows>=$i;$i++){
              $rowTeacher = $resultTeacher->fetch_assoc();
              echo "<tr>";
                  echo "<td>" . $i . "</td>";
                  echo "<td>" . $rowTeacher['ho'] . " " .$rowTeacher['ten'] . "</td>";
                  echo "<td>" . $rowTeacher['email'] . "</td>";
                  echo "<td>" . $rowTeacher['so_dien_thoai'] . "</td>";
                  echo "<td>" . $rowTeacher['trinh_do'] . "</td>";
                  echo "<td>"; 
          ?>
                        <div class="form-check">
                          <input class="form-check-input checkbox-teacher" type="checkbox" name="delete_teacher[]" value=<?php echo $rowTeacher['ma_tai_khoan']; ?> id="checkbox-teacher">
                        </div>
              <?php
                  echo "</td>";
              echo "</tr>";
          }
              ?>
          </tr>
        </div>
        </table>
        </div>
      </div>
        <button type="button" class="btn btn-danger" id="button-delete-teacher">Xóa</button>
    </div>
        <br>

    </div>
</content>
<?php
  }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>