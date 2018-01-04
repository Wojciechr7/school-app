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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <title>School app</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/notepad.css">
    <link rel="stylesheet" href="css/owl.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="script.js"></script>
    <script src="class1/script.js"></script>
    <script src="js/flatnav.js"></script>
    <link rel="stylesheet" href="css/flatnav.css">
    <link rel='stylesheet prefetch' href='http://daneden.github.io/animate.css/animate.min.css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="js/galleria-1.5.7.min.js"></script>
    <script src="js/sidebar.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
<img src="img/bg.jpg" class="hidden-xs" id="bg" alt="">
<img src="img/bg-mobile.jpg" class="visible-xs" id="bg" alt="">

<div class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarContent">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="manager.php" class="navbar-brand">School app</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="nav navbar-nav">
                <li class="class-cat"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 1</a></li>
                <li class="class-cat"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 2</a></li>
                <li class="class-cat"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 3</a></li>
                <li><a href="login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Wyloguj się!</a></li>
            </ul>
        </div>
    </div>
</div>

<nav id="left-nav" class="hidden-xs">
    <ul>
        <li class="menu"><i class="fa fa-bars" aria-hidden="true"></i></li>
    </ul>
</nav>
<div class="sidebar hide-sidebar hidden-xs">
    <ul class="centered">
        <li class="class-cat"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 1</li>
        <li class="class-cat"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 2</li>
        <li class="class-cat"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Klasa 3</li>
        <li><i class="fa fa-sign-out" aria-hidden="true"></i> <a href="login/logout.php">
                <button class="btn btn-danger">Wyloguj się!</button>
            </a></li>
    </ul>
</div>


<main>
    <div id="paper-main" class="paper">
        <div  class="paper-content">
            <textarea id="paper-cnt" autofocus>Cześć !&#10;To twój notesik</textarea>
        </div>
    </div>
    <!--<button onclick="createTable()">add table</button>-->
    <div class="content">


    </div>
</main>

</body>
</html>
