<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập sửa điểm</title>
    <script>
function tim_kiem_diem_cua_lop() {
        //gửi yêu cầu HTTP không đồng bộ đến máy chủ và nhận phản hồi.
        var xmlhttp = new XMLHttpRequest();
        // thiết lập một hàm xử lý sự kiện để kiểm tra trạng thái của yêu cầu. Khi trạng thái thay đổi, hàm này sẽ được gọi.
        xmlhttp.onreadystatechange = function() {
            // kiểm tra xem yêu cầu có thành thông hay không
            if (this.readyState == 4 && this.status == 200) {
                //cập nhật nội dung với id là thông tin điểm của lớp bằng dữ liệu phản hồi từ server this.responseText.
                document.querySelector('#thong_tin_diem_cua_lop').innerHTML = this.responseText;
            }
        };
        // lưu 2 giá trị lấy từ thẻ có id là 2 id trên và thực hiện câu lệnh gửi
        const value_ma_lop = document.querySelector("#ma_lop").value;
        const value_ho = document.querySelector("#tim_kiem_diem_cua_lop").value;
        // mở trang nhap_sua_diem_cua_lop với 2 giá trị gửi đi là ho và ma_lop
        xmlhttp.open("GET", `nhap_sua_diem_cua_lop.php?ho=` + value_ho + `&ma_lop=` + value_ma_lop, true);
        // gửi yêu cầu tới máy chủ
        xmlhttp.send();
    }
    // Gắn một sự kiện DOMContentLoaded để đảm bảo rằng các sự kiện chỉ được đính kèm khi toàn bộ DOM đã được tải xong.
    document.addEventListener("DOMContentLoaded", function() {
        // gắn sự kiện onkeyup để mỗi khi nhập vào rồi nhấc tay khỏi phím sẽ thực hiện hàm tim_kiem_diem_cua_lop
        document.getElementById('tim_kiem_diem_cua_lop').onkeyup = tim_kiem_diem_cua_lop;
    });
    </script>
</head>
<body>
    <?php
    require 'connect.php';
    $ho = $_GET['ho'];
    $ma_lop = $_GET['ma_lop'];
    $sql_tim_kiem_hoc_sinh = "SELECT diem_cua_lop.*, hoc_sinh.ho, hoc_sinh.ten, hoc_sinh.ma_hoc_sinh
    FROM diem_cua_lop
    INNER JOIN hoc_sinh ON diem_cua_lop.ma_hoc_sinh = hoc_sinh.ma_hoc_sinh
    WHERE hoc_sinh.ho LIKE '$ho%' AND diem_cua_lop.ma_lop = $ma_lop";
    $result_tim_kiem_hoc_sinh = $conn->query($sql_tim_kiem_hoc_sinh);
    ?>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Điểm A</th>
            <th>Điểm B</th>
            <th>Nhận xét</th>
            <th>Hành động</th>
            <?php
                // sử dụng vòng lặp for để hiển thị ra các thông tin của result_xem_thong_tin_diem_cua_lop
                for($i=1;$result_tim_kiem_hoc_sinh->num_rows>=$i;$i++){
                    //Lấy một hàng dữ liệu dưới dạng mảng liên assoc
                    $row = $result_tim_kiem_hoc_sinh->fetch_assoc();
                    echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row['ho'] . "</td>";
                        echo "<td>" . $row['ten'] . "</td>";
                        echo "<td>" . $row['diem_a'] . "</td>";
                        echo "<td>" . $row['diem_b'] . "</td>";
                        echo "<td>" . $row['nhan_xet'] . "</td>";
                        echo "<td><a class='btn btn-primary' type='button' href='nhap_sua_diem.php?ma_hoc_sinh=$row[ma_hoc_sinh]&ma_lop=$row[ma_lop]' >Nhập/Sửa<a></td>";
                    echo "</tr>";
                }
                ?>
        </tr>
    </table>

</body>

</html>