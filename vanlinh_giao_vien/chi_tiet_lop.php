<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="../css/style-chi-tiet-lop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous"/>
    <script src="js/ajax_information.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
  if(isset($_SESSION['ten'])){
    require 'connect.php';
    $ma_giao_vien = $_SESSION['ma_giao_vien'];
    // số tài khoản đang hoạt động
    $sqlLopGiangDay = "SELECT * FROM lop WHERE ma_giao_vien = $ma_giao_vien ";
    $resultLopGiangDay = $conn->query($sqlLopGiangDay);

    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav-menu-top">
    <div class="container-fluid nav-menu">
      <a class="navbar-brand" href="#"><img src="../image/img-british-council.jpg" class='img-logo'></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" id="text" href="home_teacher.php">Trang chủ</a>
        </div>
      </div>
      <div class="dropdown mt-3" id="box-avt">
        <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" id="user-avt"><img src="../image/admin.png" id="img-admin"><p class="name"><?php echo $_SESSION['ten']; ?></p></div> 
        <ul class="dropdown-menu left drop-menu">
          <li><a class="dropdown-item" href="xem_thong_tin_ca_nhan.php">Thông tin cá nhân</a></li>
          <hr>
          <li><a class="dropdown-item" href="../templates/loginMaster.html">Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </nav>
<content>
    <div class="item menu-left">
        <div>
            <h2 class="accordion-header" id="header-menu-left"><b>Giáo viên</b></h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Quản lý lớp học
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <?php
                      for($i=0; $i<$resultLopGiangDay->num_rows; $i++){
                      $row = $resultLopGiangDay->fetch_assoc();
                      echo "<a class='nav-link' href='chi_tiet_lop.php'><b> $row[ten_lop] </b></a>";
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Khóa học
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
                      Điểm Danh
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
    <div class='item content' id='content'>
        <div class='box-information'>
            <div class='item-box-information'>
                <h3>Thông tin lớp học</h3>
                <?php
                    $ma_lop = $_SESSION['ma_lop'];
                    $sql_xem_thong_tin_diem_cua_lop = "SELECT hoc_sinh.ten,hoc_sinh.ho, diem_cua_lop.* FROM diem_cua_lop
                    INNER JOIN hoc_sinh ON diem_cua_lop.ma_hoc_sinh = hoc_sinh.ma_hoc_sinh WHERE ma_lop = $ma_lop" ;
                    $result_xem_thong_tin_diem_cua_lop = $conn->query($sql_xem_thong_tin_diem_cua_lop);
                    ?>
                    <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Điểm A</th>
                        <th>Điểm B</th>
                        <th>Nhận xét</th>
                        <?php
                        for($i=1;$result_xem_thong_tin_diem_cua_lop->num_rows>=$i;$i++){
                            $row = $result_xem_thong_tin_diem_cua_lop->fetch_assoc();
                            echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $row['ho'] . "</td>";
                                echo "<td>" . $row['ten'] . "</td>";
                                echo "<td>" . $row['diem_a'] . "</td>";
                                echo "<td>" . $row['diem_b'] . "</td>";
                                echo "<td>" . $row['nhan_xet'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</content>
    <?php
  }
?>

  <footer class="bg-body-tertiary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-body">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-body">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-body">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

</body>
</html>