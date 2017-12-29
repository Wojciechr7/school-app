<?php
require_once "login/connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);



if(isset($_POST['tablename'])) {
    $tablename = $_POST['tablename'];
}


$result = $connection->query("create table $tablename (id int(5), imie char(20), nazwisko char(20), rok date)");
/*values(id int(5), imie char(20), nazwisko char(20), rok date)*/

echo "tekst z pliku newtable.php";