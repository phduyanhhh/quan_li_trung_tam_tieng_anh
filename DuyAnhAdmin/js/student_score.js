function detail_score_high(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#detail-score').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../jquery_ajax/getScoreHigh.php", true);
    xmlhttp.send();
}

/**
 * ham nay de dong mo
 */
// function detail_score_high_close(){
//     debugger
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.open("GET", "detailStudent.php", false);
//     xmlhttp.send();
// }

function detail_score_low(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#detail-score').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../jquery_ajax/getScoreLow.php", true);
    xmlhttp.send();
}
function detail_class(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#detail-class').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", '../jquery_ajax/getClass.php', true);
    xmlhttp.send();
}
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#detail-score-high').onclick = detail_score_high;
    document.querySelector('#detail-score-low').onclick = detail_score_low;
    // document.querySelector('#detail-class').onclick = detail_class;
    // document.querySelector('#button-close-1').onclick = detail_score_high_close;
});