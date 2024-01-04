var href_delete_success = document.getElementById('delete-course');
function remove_course() {
    // Lấy danh sách các checkbox được chọn
    event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a

  // Hiển thị hộp thoại alert
    var confirmation = confirm('Xác nhận xóa');
  
  // Kiểm tra xem người dùng đã nhấn OK trong hộp thoại alert hay không
    if (confirmation) {
        window.location.href = href_delete_success.href; 
    }
document.addEventListener("DOMContentLoaded", function(){
    document.getElementById('delete-course').onclick = remove_course;
    });