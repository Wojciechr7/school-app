<?php

session_start();

$newDir = $_POST['newDir'];

mkdir("../uploads/" . $_SESSION['user']."/".$_SESSION['classCatName']."/".$newDir, 0777);
