<head>
<link rel="stylesheet" type='text/css' href="../css/style-home-admin.css">
<script src="js/ajax_score_high.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function closeTab() {
        var tab = document.getElementById('info-score-high');
        tab.style.display = "none";
    }  
    document.addEventListener("DOMContentLoaded", function(){
        document.querySelector('#button-close').onclick = closeTab;
    });
</script>
</head>
<body>
<div>
<?php
require 'connect.php';
$sqlHighScore = "SELECT * FROM `hoc_sinh` WHERE diem_dau_vao >= 9 ORDER BY diem_dau_vao DESC";
$resultSqlHighScore = $conn->query($sqlHighScore);
if($resultSqlHighScore->num_rows>0){
    ?>
    <div class="info-score-high" id="info-score-high">
        <div><a type="button" class="btn-close" id="button-close" hre></a></div>
        <div class="info-score-high-header"><h3>Danh sách học sinh điểm đầu vào cao</h3></div>
        <div class="scrollable">
            <table class="table table-striped table-high">
                <tr>
                    <th>#</th>
                    <th>Học sinh</th>
                    <th>Điểm</th>
                    <?php
                    for($i=1;$resultSqlHighScore->num_rows>=$i;$i++){
                        $rowHighScore = $resultSqlHighScore->fetch_assoc();
                        echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $rowHighScore['ho'] . " " .$rowHighScore['ten'] . "</td>";
                            echo "<td>" . $rowHighScore['diem_dau_vao'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
                
            </table>
        </div>
    </div>

    <?php
}
?>
</div>
</body>