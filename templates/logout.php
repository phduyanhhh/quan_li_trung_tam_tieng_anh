<?php
session_start(); 
session_destroy();
header("Location: ../templates/loginMaster.html"); 
exit();
?>