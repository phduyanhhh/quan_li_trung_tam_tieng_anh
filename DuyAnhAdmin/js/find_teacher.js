
function delete_teacher(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content-find-teacher').innerHTML = this.responseText;
        }
    };
    const value_name_teacher = document.querySelector("#search-teacher").value;
    xmlhttp.open("GET", `getFindTeacher.php?name=`+value_name_teacher, true);
    xmlhttp.send();
  }
  
  let selectedCheckboxes = []; // Mảng để lưu trữ các giá trị checkbox đã chọn
  
  function checkbox() {
  // Lấy danh sách các checkbox được chọn
  alert("Xac nhan xoa");
  const checkboxes = document.querySelectorAll('.checkbox-teacher:checked');
  console.log(checkboxes);
  selectedCheckboxes = Array.from(checkboxes).map(checkbox => checkbox.value);
  console.log(selectedCheckboxes);
  // ajax
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content-find-teacher').innerHTML = this.responseText;
          }
    };
    console.log(selectedCheckboxes);
    xmlhttp.open("GET", `getDeleteTeacher.php?select=`+selectedCheckboxes, true);
    xmlhttp.send();
  }
  // document.getElementById('search-teacher'). addEventListener('keyup', delete_teacher)
  // document.getElementById('checkbox-teacher').addEventListener('change', checkbox)
  document.addEventListener("DOMContentLoaded", function(){
    document.getElementById('search-teacher').onkeyup = delete_teacher;
    document.getElementById('button-delete-teacher').onclick = checkbox;
  });