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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<main class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                <a class="nav-link" href="index.php">hem <span class="sr-only">(current)</span></a>
              
    
    <a class="nav-link" href="play.php?page=1">spela <span class="sr-only">(current)</span></a>
  
  
    <a class="nav-link" href="edit.php" background-color="red">redigera <span class="sr-only">(current)</span></a>
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

echo "<pre>" . print_r($_POST,1) . "</pre>"; //printar ut det man har skrivit


echo $_POST['place'];

echo $_POST['text'];


















// TODO protect with your login
// add, edit, delete pages & events
// skriv ut en lista över sidor



?>
</main>
<script src="js/navbar.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>