<?php

session_start();

require_once "login/connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

$tablename = "notepad";
$UID = $_SESSION['id'];

$data = $connection->query("select entries from $tablename where user_id = $UID");


while ($row = $data->fetch_assoc()) {
    echo $row["entries"];
}

