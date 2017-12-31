<?php

session_start();

if (!isset($_SESSION['logged'])) {
    header('Location: index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School app</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="js/flatnav.js"></script>
    <link rel="stylesheet" href="css/flatnav.css">
    <link rel='stylesheet prefetch' href='http://daneden.github.io/animate.css/animate.min.css'>
    <script src="script.js"></script>
    <script src="class1/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sidebar.css">

    <script src="js/galleria-1.5.7.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/sidebar.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



</head>
<body>
<nav id="left-nav">
    <ul>
        <li class="menu"><i class="fa fa-bars" aria-hidden="true"></i></li>
    </ul>
</nav>
<div class="sidebar hide-sidebar">
    <ul class="centered">
        <li class="class-cat"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 1</li>
        <li class="class-cat"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 2</li>
        <li class="class-cat"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 3</li>
        <li><i class="fa fa-sign-out" aria-hidden="true"></i> <a href="login/logout.php"><button class="btn btn-danger">Wyloguj się!</button></a></li>
    </ul>
</div>

<main>
<div class="content">



</div>
</main>

</body>
</html>
