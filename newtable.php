<?php

session_start();

require_once "login/connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);


    /*$tablename = $_SESSION['user']."_".$_SESSION['classCatName']."_entries";*/
$tablename = "entries";



$result = $connection->query("create table $tablename (id int(5) NOT NULL AUTO_INCREMENT,user_id int(5), imie char(20), nazwisko char(20), rok date,klasa char(20), PRIMARY KEY (id))");
