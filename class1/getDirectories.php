<?php

session_start();

$path = "../uploads/" . $_SESSION['user']."/".$_SESSION['classCatName'];

$dirs = array();

// directory handle
$dir = dir($path);

while (false !== ($entry = $dir->read())) {
    if ($entry != '.' && $entry != '..') {
        if (is_dir($path . '/' . $entry)) {
            $dirs[] = $entry;
        }
    }
}

foreach ($dirs as $dir) {

    echo '<li onclick="viewGallery($(this).children())">
                    <a href="#settings">'.$dir.'<span id="remove-dir" onclick="removeDir(event, $(this).parents())" class="fa fa-trash-o right"></span></a>
                </li>';

}