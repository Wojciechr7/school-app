<?php


require_once "login/connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);



$id = $_POST['id'];

$usun = $polaczenie->query("delete from tabelka where id = $id");