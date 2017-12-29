<?php


    $path = '../'.$_POST['path'];

    echo $path;

    if( file_exists($path) ) {

        unlink($path);
    }