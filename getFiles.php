<?php
$directory = "uploads/";
$images = glob($directory . "*.jpg");

foreach($images as $image)
{
    echo '<img width="200" src='.$image.'>';
}
