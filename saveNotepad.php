<?php



session_start();

require_once "login/connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

$tablename = "notepad";
$UID = $_SESSION['id'];
$notepadValue = $_POST['notepadValue'];

$data = $connection->query("UPDATE $tablename SET entries='$notepadValue' WHERE user_id=$UID");
