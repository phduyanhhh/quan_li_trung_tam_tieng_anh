function update_student(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "getUpdateStudent.php", true);
    xmlhttp.send();
}

document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#update-student').onclick = update_student;
});
