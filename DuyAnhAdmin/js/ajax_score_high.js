var previousContent = '';
function detail_score_high(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.querySelector('#detail-score').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "getScoreHigh.php", true);
    xmlhttp.send();
}
$("#button-close").click(function(){
    $("detail-score").hide();
});
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#detail-score-high').onclick = detail_score_high;
});