<?php
	session_start();
	$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	print<<<KONIEC
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		</head>
		<body>
			<form action="form06_redirect.php" method="POST">
				id_prac <input type="text" name="id_prac">
				nazwisko <input type="text" name="nazwisko">
				<input type="submit" value="Wstaw">
				<input type="reset" value="Wyczysc">
			</form>
			<a href="form06_get.php">Lista wszystkich pracowników</a>
KONIEC;
	
	if(isSet($_SESSION['error']) && $_SESSION['error'] == 1){
		printf("<br>Query failed: %s\n", $_SESSION["message"]);
		$_SESSION['error'] = 0;
	}
?>