<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['pass'])))
	{
		header('Location: ../index.php');
		exit();
	}

	require_once "connect.php";

	$connection = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$pass = htmlentities($pass, ENT_QUOTES, "UTF-8");
	
		if ($result = @$connection->query(
		sprintf("SELECT * FROM users WHERE user='%s' AND pass='%s'",
		mysqli_real_escape_string($connection,$login),
		mysqli_real_escape_string($connection,$pass))))
		{
			$ilu_userow = $result->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['logged'] = true;
				
				$row = $result->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];
				
				unset($_SESSION['login-err']);
				$result->free_result();
				header('Location: ../manager.php');
				
			} else {
				
				$_SESSION['login-err'] = '<span class="login-err">Nieprawidłowy login lub hasło!</span>';
				header('Location: ../index.php');
				
			}
			
		}
		
		$connection->close();
	}
	
?>