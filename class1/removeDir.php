<?php


session_start();

$remDir = $_POST['remDir'];

rmdir("../uploads/" . $_SESSION['user']."/".$_SESSION['classCatName']."/".$remDir);