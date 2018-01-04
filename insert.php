<?php

session_start();

require_once "login/connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$tablename = "entries";


if(isset($_POST['id']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['rok'])) {
    $id = $_POST['id'];

    $imie = $_POST['imie'];

    $nazwisko = $_POST['nazwisko'];

    $rok = $_POST['rok'];


}
$UID = $_SESSION['id'];
$klasa = $_SESSION['classCatName'];

$rezultat = $polaczenie->query("insert into $tablename (imie, nazwisko, rok, user_id, klasa) values('$imie', '$nazwisko', '$rok', '$UID', '$klasa')");

