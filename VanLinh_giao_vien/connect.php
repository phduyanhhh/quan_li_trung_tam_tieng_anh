<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "quan_ly_web_hoc_tieng_anh";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . $con->content_error);
    }
   
?>
