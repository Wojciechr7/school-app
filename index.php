<?php

	session_start();

	if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
	{
		header('Location: manager.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	<title>School app</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="script.js"></script>
    <script src="class1/script.js"></script>
</head>

<body>

    <img src="img/bg.jpg" class="hidden-xs" id="bg" alt="">
    <img src="img/bg-mobile.jpg" class="visible-xs" id="bg" alt="">


    <div class="owl-login">
    <div class="owl">
        <div class="hand"></div>
        <div class="hand hand-r"></div>
        <div class="arms">
            <div class="arm"></div>
            <div class="arm arm-r"></div>
        </div>
    </div>
    <form class="form" action="login/login.php" method="post">
        <div class="control">
            <label for="login" class="fa fa-envelope"></label>
            <input id="login" placeholder="Login" type="text" name="login">
        </div>
        <div class="control">
            <label for="password" class="fa fa-unlock"></label>
            <input id="password" placeholder="Hasełko" type="password" name="pass">
        </div>
        <input type="submit" value="Zaloguj się" class="wisteria-flat-button">
    </form>
        <?php
        if(isset($_SESSION['login-err'])){
            echo $_SESSION['login-err'];
            $_SESSION['login-err'] = "";
        }
        ?>
    </div>



    <div id="particles-js"></div>

    <script src="js/particles.js"></script>
    <script src="js/particle-app.js"></script>

	


</body>
</html>