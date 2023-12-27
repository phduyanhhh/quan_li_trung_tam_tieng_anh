function detail_school() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../getDataStudent.php", true);
    xmlhttp.send();
}
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#details').onclick = detail_school;
});
