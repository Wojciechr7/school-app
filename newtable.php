<?php
require_once "login/connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);



if(isset($_POST['nazwatabeli'])) {
    $nazwatabeli = $_POST['nazwatabeli'];
}


$rezultat = $polaczenie->query("create table $nazwatabeli (id int(5), imie char(20), nazwisko char(20), rok date)");
/*values(id int(5), imie char(20), nazwisko char(20), rok date)*/

echo "tekst z pliku newtable.php";