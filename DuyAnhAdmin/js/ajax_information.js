function detail_student() {
    // gọi phương thức XMLHttpRequest
    var xmlhttp = new XMLHttpRequest();
    var n = 5;
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    // MỞ FILE XỬ LÍ DATA
    xmlhttp.open("GET", "getDataStudent.php", true);
    xmlhttp.send();
}
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#details').onclick = detail_student;
});