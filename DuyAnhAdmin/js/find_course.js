// check tìm sửa khóa học

function find_course(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#select-update').innerHTML = this.responseText;
        }
    };
    const value_course = document.querySelector("#value-course").value;
    xmlhttp.open("GET", `../../templates/jquery_ajax/getFindCourse.php?id=`+value_course, true);
    xmlhttp.send();
  }
  document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#value-course').onchange = find_course;
});
  