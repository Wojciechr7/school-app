<?php
session_start();


if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'. $_SESSION['user'].'/'.$_SESSION['classCatName'].'/'.$_SESSION['direct'].'/' . $_FILES['file']['name']);
}

