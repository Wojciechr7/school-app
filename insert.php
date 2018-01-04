<?php

session_start();

require_once "login/connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$tablename = $_SESSION['user']."_".$_SESSION['classCatName']."_entries";


if(isset($_POST['id']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['rok'])) {
    $id = $_POST['id'];

    $imie = $_POST['imie'];

    $nazwisko = $_POST['nazwisko'];

    $rok = $_POST['rok'];


}

$rezultat = $polaczenie->query("insert into $tablename (imie, nazwisko, rok) values('$imie', '$nazwisko', '$rok')");




echo "tekst z pliku insert.php";