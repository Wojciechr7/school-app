<?php

require_once "login/connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$wyswietl = $polaczenie->query("select id,imie,nazwisko,rok from tabelka");

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
    while ($row = $wyswietl->fetch_assoc()) {
        echo '<tr>';
        echo '<th>' . $row["id"] . '</th><th>' . $row["imie"] . '</th><th>' . $row["nazwisko"] . '</th><th>' . $row["rok"] . '<button onclick="delet(' . $row["id"] . ')" class="btn btn-danger pull-right"><i class="fa fa-times"></i>  usun</button></th>';
        echo '</tr>';
    }
    ?>

</table>


