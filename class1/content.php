<?php

$msgCount = 0;

require_once "../login/connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

$data = $connection->query("select id,imie,nazwisko,rok from tabelka");

while ($row = $data->fetch_assoc()) {
    $msgCount++;
}

?>
<h2 class="text-center" onclick="viewGallery()">Klasa 1</h2>


<nav id="class-nav" class='animated bounceInDown'>
    <ul>
        <li onclick="newRecord()">
            <a href='#message'>
                <div class='fa fa-envelope'></div>
                Wpisy
                <span class='badge right'><?=$msgCount?></span>
            </a>
        </li>
        <li class='sub-menu'>
            <a href='#settings'>
                <div class='fa fa-camera'></div>
                Galeria
                <div class='fa fa-caret-down right'></div>
            </a>
            <ul>
                <li>
                    <a href='#settings'>
                        pozycja 1
                    </a>
                </li>
                <li>
                    <a href='#settings'>
                        pozycja 2
                    </a>
                </li>
                <li>
                    <a href='#settings'>
                        pozycja 3
                    </a>
                </li>
                <li>
                    <a href='#settings'>
                        pozycja 4
                    </a>
                </li>
                <li>
                    <a href='#settings'>
                        <i class="fa fa-plus"></i>
                        Dodaj nowa pozycje
                    </a>
                </li>
            </ul>
        </li>
        <li class='sub-menu'>
            <a href='#message'>
                <div class='fa fa-pencil'></div>
                Sprawdziany
                <div class='fa fa-caret-down right'></div>
            </a>
            <ul>
                <li>
                    <a href='#settings'>
                        pozycja 1
                    </a>
                </li>
                <li>
                    <a href='#settings'>
                        pozycja 2
                    </a>
                </li>
                <li>
                    <a href='#settings'>
                        <i class="fa fa-plus"></i>
                        Dodaj nowa pozycje
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href='#profile'>
                <div class='fa fa-user'></div>
                ???
            </a>
        </li>
    </ul>
</nav>
<script src="js/flatnav.js"></script>


<div class="row align-items-center justify-content-center subcontent">

    <div class="col-12">
        <div id="ajax-output"></div>
    </div>
</div>

