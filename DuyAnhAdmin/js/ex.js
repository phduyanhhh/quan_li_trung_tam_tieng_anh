function list_student(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "templates/jquery_ajax/getListStudent.php", true);
    xmlhttp.send();
}


// danh sách giáo viên
function list_teacher(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "templates/jquery_ajax/getListTeacher.php", true);
    xmlhttp.send();
}


// danh sach khoa hoc
function list_course(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "templates/jquery_ajax/getListCourse.php", true);
    xmlhttp.send();
}
//danh sach lop
function list_class(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "templates/jquery_ajax/getListClass.php", true);
    xmlhttp.send();
}


document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#list-teacher').onclick = list_teacher;
    document.querySelector('#list-student').onclick = list_student;
    document.querySelector('#list-course').onclick = list_course;
    document.querySelector('#list-class').onclick = list_class;
});
