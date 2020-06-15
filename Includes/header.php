<?php
	require_once("./DB/connect.php");
	require_once("./DB/request.php");
	$DB = ConnectDB("livequestion", "127.0.0.1", "3306", "root", "");
?>
<html>
	<head>
		<meta charset="Utf-8"/>
		<?php
			if($DB == null){
				echo '<script>alert("Erreur lors de la connexion à la base de donnée");</script>';
			}
		?>
		<title>LiveQuestion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/b33430525b.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="icon" type="image/jpg" href="Contents/icon.jpg"/>
	</head>
	<body>
		<?php
			require_once("./Includes/nav.php");
		?>