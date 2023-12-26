<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style-class.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <script src="JS/addClass.js"></script>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['ten']) AND isset($_SESSION['vai_tro'])){
            $user = $_SESSION['ten'];
            $role = $_SESSION['vai_tro'];
            // role = 1 là ADMIN
            if($role==1)
        }
    ?>
     