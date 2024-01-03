
function delete_student(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
      if(this.readyState==4 && this.status==200){
          document.querySelector('#content-find-student').innerHTML = this.responseText;
      }
  };
  const value_name_student = document.querySelector("#search-student").value;
  xmlhttp.open("GET", `getFindStudent.php?name=`+value_name_student, true);
  xmlhttp.send();
}

let selectedCheckboxes = []; // Mảng để lưu trữ các giá trị checkbox đã chọn

function checkbox() {
// Lấy danh sách các checkbox được chọn
alert("Xac nhan xoa");
const checkboxes = document.querySelectorAll('.checkbox-student:checked');
console.log(checkboxes);
selectedCheckboxes = Array.from(checkboxes).map(checkbox => checkbox.value);
console.log(selectedCheckboxes);
// ajax
var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
      if(this.readyState==4 && this.status==200){
          document.querySelector('#content-find-student').innerHTML = this.responseText;
        }
  };
  console.log(selectedCheckboxes);
  xmlhttp.open("GET", `getDeleteStudent.php?select=`+selectedCheckboxes, true);
  xmlhttp.send();
}
// document.getElementById('search-student'). addEventListener('keyup', delete_student)
// document.getElementById('checkbox-student').addEventListener('change', checkbox)
document.addEventListener("DOMContentLoaded", function(){
  document.getElementById('search-student').onkeyup = delete_student;
  document.getElementById('button-delete-student').onclick = checkbox;
});