<?php

session_start();

$newDir = $_POST['newDir'];

mkdir("../uploads/" . $_SESSION['user']."/".$newDir, 0777);

echo "../uploads/" . $_SESSION['user']."/".$newDir;