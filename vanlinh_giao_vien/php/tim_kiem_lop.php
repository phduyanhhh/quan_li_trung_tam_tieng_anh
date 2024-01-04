<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script>
    function tim_kiem_hoc_sinh() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector('#thong_tin_lop').innerHTML = this.responseText;
            }
        };
        const value_ten_lop = document.querySelector("#tim_kiem_lop").value;
        xmlhttp.open("GET", `xoa_lop_tim_kiem.php?ten_lop=` + value_ten_lop, true);
        xmlhttp.send();
    }
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('tim_kiem_lop').onkeyup = tim_kiem_hoc_sinh;
    });
    </script>
</head>

<body>
    <?php
    require 'connect.php';
    $ten_lop = $_GET['ten_lop'];
    $sql_tim_kiem_lop = "SELECT * FROM lop WHERE ten_lop LIKE '$ten_lop%'";
    $result_tim_kiem_lop = $conn->query($sql_tim_kiem_lop);
    ?>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Tên Lớp</th>
            <th>Sĩ số tối đa</th>
            <th>Ngày Bắt Đầu</th>
            <th>Lịch Học</th>
            <?php
    // sử dụng vòng lặp for để hiển thị ra các thông tin của result_xem_thong_tin_diem_cua_lop
    for($i=1;$result_tim_kiem_lop->num_rows>=$i;$i++){
        //Lấy một hàng dữ liệu dưới dạng mảng liên assoc
        $row = $result_tim_kiem_lop->fetch_assoc();
        echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $row['ten_lop'] . "</td>";
            echo "<td>" . $row['si_so_toi_da'] . "</td>";
            echo "<td>" . $row['ngay_bat_dau'] . "</td>";
            echo "<td>" . $row['lich_hoc'] . "</td>";
        echo "</tr>";
    }
    ?>
        </tr>
    </table>

</body>

</html>