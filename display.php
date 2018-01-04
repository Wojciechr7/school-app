<?php

session_start();

require_once "login/connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

$tablename = $_SESSION['user']."_".$_SESSION['classCatName']."_entries";

$data = $connection->query("select id,imie,nazwisko,rok from $tablename");

?>
<table class="table table-hover">

    <thead class="thead-dark">
    <tr>
        <th class="">id</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>rok</th>
    </tr>
    </thead>

    <?php
    while ($row = $data->fetch_assoc()) {
        echo '<tr>';
        echo '<th>' . $row["id"] . '</th><th>' . $row["imie"] . '</th><th>' . $row["nazwisko"] . '</th><th>' . $row["rok"] . '<button onclick="delet(' . $row["id"] . ')" class="btn btn-danger pull-right"><i class="fa fa-times"></i>  usun</button></th>';
        echo '</tr>';
    }
    ?>

</table>


