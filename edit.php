<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Redigera</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="" method="POST">

<nav id="navbar">
	<a href="index.php">Hem</a>
	<a href="play.php">Spela</a>
	<a class="active" href="edit.php">Redigera</a>
</nav>	

<form action="" method="POST">
	place
	<input type="text" name="place"> <br>
	text
	<textarea name="text"> </textarea> <br>
	<input type="submit" name="submit">
	</form>

<main class="content">
	<section>
		<h1>Redigera</h1>

		</textarea>
		
		</input>
<?php

//echo "<pre>" . json_encode($_POST,1) . "</pre>";

echo "<pre>" . print_r($_POST,1) . "</pre>";


echo $_POST['place'];

echo $_POST['text'];

// TODO protect with your login
// add, edit, delete pages & events
// skriv ut en lista över sidor



?>
</main>
<script src="js/navbar.js"></script>
</body>
</html>