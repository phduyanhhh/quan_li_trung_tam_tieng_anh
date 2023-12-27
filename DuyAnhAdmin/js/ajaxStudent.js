
    // Bắt sự kiện khi người dùng nhấn nút
    $('#details').click(function(){
        $.ajax({
            url: '../getDataStudent.php', // Đường dẫn đến tệp xử lý PHP
            method: 'GET', // Hoặc 'POST' tùy vào cách bạn muốn gửi dữ liệu
            success: function(response){
                $('#content').html(response); // Hiển thị dữ liệu trả về trong thẻ div có id "content"
            }
        });
    });