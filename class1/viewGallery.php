<?php
$directory = "../uploads/";
$images = glob($directory . "*.jpg");

/*foreach ($images as $image) {
    echo '<div style="float: left; margin: 30px" class="gallery-item">';
    echo '<img width="200" src=' . substr($image, 3) . '>';
    echo '<div> nazwa: '. substr($image, 11).'</div>';
    echo '<button class="btn btn-danger">usun</button>';
    echo '</div>';
}
*/?>

<label class="btn btn-dark btn-file">
    Wybierz plik <input type="file" id="sortpicture" name="sortpic" style="display: none;">
</label>
<button class="btn btn-inverse" onclick="sendFile()" id="upload">Wyslij plik</button>

<br><br>
<div class="galleria">

<?php
    foreach ($images as $image) {
echo '<img src=' . substr($image, 3) . ' data-title='. substr($image, 11).' data-description='. substr($image, 11).'>';
}
?>

    </div>
    <button class="btn btn-default" id="fullscreen">wlacz pelny ekran</button>
    <button class="btn btn-danger" onclick="removeImage()" id="deleteImg">usun aktualny obrazek</button>