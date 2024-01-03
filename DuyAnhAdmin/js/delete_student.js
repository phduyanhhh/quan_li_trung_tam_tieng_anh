document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#seach-student').onkeyup = find_student;
    document.querySelector('#seach-student').onkeyup = delete_student;
});
function find_student(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#content-find-student').innerHTML = this.responseText;
        }
    };
    const value_name_student = document.querySelector("#seach-student").value;
    xmlhttp.open("GET", `getFindStudent.php?name=`+value_name_student, true);
    xmlhttp.send();
}


function delete_student(){
    const name_student = document.querySelector("#search-student").value
    fetch(`getFindStudent.php?name=${ name_student }`).then(response=>response.text()).then(response=>document.querySelector("#content-find-student").innerHTML = response);
}
