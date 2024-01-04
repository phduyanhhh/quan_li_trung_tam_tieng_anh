<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin học sinh</title>
    <link rel="stylesheet" href="../css/style-operationStudentDetails.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="themThongTinHocSinh.PHP">Thêm thông tin học sinh</a>
    </li>
  </ul>
</nav>

    <br>
    <div class="detail-panel">
    <p class="panel-title">Thông tin Học sinh</p>
    <br></br>
    <h1 style="text-align: center">Tìm kiếm học sinh</h1>
        <form method="get">
        <input type="text" id="ten" placeholder='Search' style="width: 40%; margin-left:350px">
        <br>
        </form>
        <br>

    <table>
            <thread>    
                <th>ID</th>
                <th>Tên</th>
                <th>họ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Điểm đầu vào</th>
                <th>Thao tác</th>
            </thread>
            <tbody id='searchResults'>
    
    <?php
        
        require 'connect.php';
        $sql = "SELECT * FROM hoc_sinh";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {   

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>$row[ma_hoc_sinh]</td>";
                echo "<td>$row[ten]</td>";
                echo "<td>$row[ho]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[so_dien_thoai]</td>";
                echo "<td>$row[diem_dau_vao]</td>";
                echo "<td><a class='btn btn-danger' href='xoaThongTinHocSinh.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>" . "Xóa" . "</a> <a class='btn btn-info' href='capNhatThongTinHocSinh.PHP?ma_hoc_sinh="  . $row["ma_hoc_sinh"] . "'>Sửa</a></td>";
                echo "</tr>";
            }
        }
        else {
            echo "no student in database";
        }
?>
</tbody>
</table>
</div>

<script>
       function tim_kiem_thong_tin_hoc_sinh() {
    const tai_khoan = document.querySelector("#ten").value
    fetch(`show_ket_qua.php?ten=${tai_khoan}`).then(response => response.text()).then(response => document.querySelector("#searchResults").innerHTML = response)
    }
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#ten").onkeyup = tim_kiem_thong_tin_hoc_sinh
    });
</script>
</body>
</html>