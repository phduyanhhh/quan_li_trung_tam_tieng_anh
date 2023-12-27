<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="../css/style-home-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous"/>
    <script src="js/ajaxStudent.js"></script>
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
          <a class="nav-link active" aria-current="page" href="#" id="text">Home</a>
          <a class="nav-link" href="#" id="text">Teacher system</a>
          <a class="nav-link" href="#" id="text">Student system</a>
        </div>
      </div>
      <div class="dropdown mt-3" id="box-avt">
        <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" id="user-avt"><img src="../image/admin.png" id="img-admin"><p class="name"><?php echo $_SESSION['ten']; ?></p></div> 
        <ul class="dropdown-menu left drop-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                      Student
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="nav-link" href=""><b>Add Student</b></a>
                        <a class="nav-link" href=""><b>Edit Student</b></a>
                        <a class="nav-link" href=""><b>Delete Student</b></a>
                        <a class="nav-link" href=""><b>Student List</b></a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Teacher
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="nav-link" href=""><b>Add Teacher</b></a>
                        <a class="nav-link" href=""><b>Edit Teacher</b></a>
                        <a class="nav-link" href=""><b>Delete Teacher</b></a>
                        <a class="nav-link" href=""><b>Teacher List</b></a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Course
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="nav-link" href=""><b>Add Course</b></a>
                        <a class="nav-link" href=""><b>Edit Course</b></a>
                        <a class="nav-link" href=""><b>Delete Course</b></a>
                        <a class="nav-link" href=""><b>Course List</b></a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Class
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <a class="nav-link" href=""><b>Add Class</b></a>
                          <a class="nav-link" href=""><b>Edit Class</b></a>
                          <a class="nav-link" href=""><b>Delete Class</b></a>
                          <a class="nav-link" href=""><b>Course Class</b></a>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
    <div class='item content' id='content'>
        <h2>Infomation</h2>
        <div class='box-information'>
            <div class='item-box-information'>
                <h3>Students</h3>
                <div>Students account number: <?php echo $resultStudent->num_rows; ?></div>
                <div>Number of Students registered for the course: <?php echo $resultStudentStudying->num_rows; ?></div>
                <div><button type="button" class="btn btn-light" id="details">DETAILS</button></div>
            </div>
            <div class='item-box-information'>
                <h3>Teachers</h3>
                <div>Teachers account number: <?php echo $resultTeacher->num_rows; ?></div>
                <div>Number of Teachers registered for the course: <?php echo $resultTeacherTeaching->num_rows; ?></div>
            </div>
            <div class='item-box-information'>
                <h3>Course</h3>
                <div>Course number: <?php echo $resultCourse->num_rows; ?></div>
            </div>
            <div class='item-box-information'>
                <h3>Class</h3>
                <div>Class number: <?php echo $resultClass->num_rows; ?></div>
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