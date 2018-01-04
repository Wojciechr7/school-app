<?php

session_start();
$direct = $_POST['direct'];

$_SESSION['direct'] = $direct;

$directory = "../uploads/" . $_SESSION['user'] . "/".$_SESSION['classCatName']."/". $direct . "/";
$images = glob($directory."*.{jpg,png,gif}", GLOB_BRACE);


?>
<div class="send-files">
    <label class="btn btn-dark btn-file">
        <i class="fa fa-plus"></i>
        Dodaj nowy plik <input type="file" onchange="sendFile()" id="sortpicture" name="sortpic" style="display: none;">
    </label>
    <button class="btn btn-default" id="fullscreen"><i class="fa fa-window-maximize"></i> Pełny ekran</button>
    <button class="btn btn-danger" onclick="removeImage()" id="deleteImg"><i class="fa fa-trash"></i> Usuń ten obrazek</button>
</div>
<br>
<div class="galleria">

    <?php
    foreach ($images as $image) {
        echo '<img src=' . substr($image, 3) . ' data-title=' . substr($image, 11) . ' data-description=' . substr($image, 11) . '>';
    }

    ?>

</div>