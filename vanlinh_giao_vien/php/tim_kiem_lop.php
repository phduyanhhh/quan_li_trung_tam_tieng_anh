<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script>
        function tim_kiem_lop() {
        //gửi yêu cầu HTTP không đồng bộ đến máy chủ và nhận phản hồi. 
        var xmlhttp = new XMLHttpRequest();
        // thiết lập một hàm xử lý sự kiện để kiểm tra trạng thái của yêu cầu. Khi trạng thái thay đổi, hàm này sẽ được gọi.
        xmlhttp.onreadystatechange = function() {
            // kiểm tra xem yêu cầu có thành thông hay không
            if (this.readyState == 4 && this.status == 200) {
                //cập nhật nội dung với id là thong_tin_lop bằng dữ liệu phản hồi từ server this.responseText.
                document.querySelector('#thong_tin_lop').innerHTML = this.responseText;
            }
        };
        // lưu giá trị lấy từ thẻ có id là tim_kiem_lop và thực hiện câu lệnh gửi
        const value_ten_lop = document.querySelector("#tim_kiem_lop").value;
        // mở trang tim_kiem_lop với giá trị gửi đi là ten_lop
        xmlhttp.open("GET", `tim_kiem_lop.php?ten_lop=` + value_ten_lop, true);
        // gửi yêu cầu tới máy chủ
        xmlhttp.send();
    }
    // Gắn một sự kiện DOMContentLoaded để đảm bảo rằng các sự kiện chỉ được đính kèm khi toàn bộ DOM đã được tải xong.
    document.addEventListener("DOMContentLoaded", function() {
        // gắn sự kiện onkeyup để mỗi khi nhập vào rồi nhấc tay khỏi phím sẽ thực hiện hàm tim_kiem_hoc_sinh
        document.getElementById('tim_kiem_lop').onkeyup = tim_kiem_lop;
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