function detail_class(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../jquery_ajax/getClass.php", true);
    xmlhttp.send();
}
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#button-detail-class').onclick = detail_class;
});