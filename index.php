<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
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
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<title>Osadnicy - gra przeglądarkowa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<br /><br />
	
	<form action="login/login.php" method="post">

		Login: <br /> <input class="form-control" type="text" name="login" /> <br />
		Hasło: <br /> <input class="form-control" type="password" name="haslo" /> <br /><br />
		<button class="btn btn-default" type="submit">Zaloguj sie</button>
	
	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>