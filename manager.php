<?php

session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
<?php
echo "<h1>Witaj " . $_SESSION['user'] . '!</h1>';
?>
<main>
<div class="content">




    <!--<label class="btn btn-dark btn-file">
        Browse <input type="file" id="sortpicture" name="sortpic" style="display: none;">
    </label>
<button class="btn btn-inverse" id="upload">Wyslij plik</button>

<div id="newtable"></div>
<br>
<br>
<br>
<button class="btn btn-success" onclick="insertTable()"><i class="fa fa-plus"></i>  dodaj nowe</button>
<input disabled type="text" id="id" placeholder="id">
<input type="text" id="imie" placeholder="imie" onkeydown = "if (event.keyCode == 13) insertTable()">
<input type="text" id="nazwisko" placeholder="nazwisko" onkeydown = "if (event.keyCode == 13) insertTable()">
<input id="profileForm" type="text" class="rok" placeholder="YYYY/MM/DD"
       data-fv-date="true"
       data-fv-date-format="YYYY/MM/DD"
       data-fv-date-message="The value is not a valid date"
       onkeydown = "if (event.keyCode == 13) insertTable()">
<div id="table-space"></div>
<div id="miejsce"></div>

<div id="gallery"></div>-->


</div>
</main>

</body>
</html>
