<?php

session_start();
$direct = $_POST['direct'];

$_SESSION['direct'] = $direct;

$directory = "../uploads/" . $_SESSION['user'] . "/" . $direct . "/";
$images = glob($directory . "*.jpg");


?>
<div class="send-files">
    <label class="btn btn-dark btn-file">
        Wybierz plik <input type="file" id="sortpicture" name="sortpic" style="display: none;">
    </label>
    <button class="btn btn-inverse" onclick="sendFile()" id="upload">Wyslij plik</button>
</div>
<br><br>
<div class="galleria">

    <?php
    foreach ($images as $image) {
        echo '<img src=' . substr($image, 3) . ' data-title=' . substr($image, 11) . ' data-description=' . substr($image, 11) . '>';
    }
    ?>

</div>
<div class="gallery-lower-buttons">
    <button class="btn btn-default" id="fullscreen">wlacz pelny ekran</button>
    <button class="btn btn-danger" onclick="removeImage()" id="deleteImg">usun aktualny obrazek</button>
</div>