
<?php
    require "../../connect.php";
    $selectStudent = $_GET['select'];
    echo $selectStudent;
    $listSelectStudent = explode(",", $selectStudent);
    $numberListSelectStudent = count($listSelectStudent);
    echo $numberListSelectStudent;
    $id = [];
    foreach ($listSelectStudent as $value){
        $id[] = intval($value);
    }
    for($i=0;$numberListSelectStudent>$i;$i++) {
        $ma_tai_khoan = $id[$i];
        $sqlScore = "SELECT * FROM `hoc_sinh` INNER JOIN diem_cua_lop ON hoc_sinh.ma_hoc_sinh=diem_cua_lop.ma_hoc_sinh WHERE ma_tai_khoan='$ma_tai_khoan'";
        $resultScore = $conn->query($sqlScore);
        $rowScore = $resultScore->fetch_assoc();
        $ma_hoc_sinh = $rowScore['ma_hoc_sinh'];
        $sqlScoreDelete = "DELETE FROM `diem_cua_lop` WHERE ma_hoc_sinh='$ma_hoc_sinh'";
        $sqlDeleteStudent = "DELETE FROM `hoc_sinh` WHERE ma_tai_khoan='$ma_tai_khoan'";
        $sqlDeleteAccount = "DELETE FROM `tai_khoan` WHERE ma_tai_khoan='$ma_tai_khoan'";
        if($conn->query($sqlScoreDelete)){
            if($conn->query($sqlDeleteStudent)){
                if($conn->query($sqlDeleteAccount)){
                    header('location: getFindStudent.php?name');
                }
            }
        }
    }
?>