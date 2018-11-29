<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Spela</title>
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
<main class="content">
	<section>
		<h1>Spela</h1>
<!--
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit hic aliquid nostrum quibusdam veritatis? Eaque accusantium odit id deserunt, quae minima adipisci nesciunt illum ipsa ea placeat, earum laboriosam corrupti.</p>
		<footer class="gotopagelinks">
			<p>
				<a href="play.php?page=1">Nästa sida</a>
				<a href="play.php?page=2">Gå till sidan</a>
			</p>
		</footer>
-->
<?php
	include_once 'include/dbinfo.php'; //länkar filen

	// PDO

	$dbh = new PDO('mysql:host=localhost;dbname=story;charset=utf8mb4', $dbuser, $dbpass); //includerar databasen

	//echo "<pre>" . print_r($dbh,1) . "</pre>";

	if (isset($_GET['page'])) {
		
		$filteredPage = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT); //säkerhets grej som filtrerar inputs

		$stmt = $dbh->prepare("SELECT * FROM story WHERE id = :id"); 
		$stmt->bindParam(':id', $filteredPage); //hittar :id och byter ut den
		$stmt->execute(); //kör

		$row = $stmt->fetch(PDO::FETCH_ASSOC); //hämtar

		//echo "<pre>" . print_r($row,1) . "</pre>";

		echo $row['text'] . "<h1>  </h1>"; //skickar ut första raden

		$stmt = $dbh->prepare("SELECT * FROM storylinks WHERE storyid = :id"); //samma sak fast med länkarna
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();

		$row = $stmt->fetchall(PDO::FETCH_ASSOC);

	
		 //echo "<pre>" . print_r($row,1) . "</pre>"; 
		

		foreach ($row as $val) {
			echo "<a href=\"?page=" . $val['target'] . "\">" . $val['text'] . "<br> </a>"; 
		}





	} elseif(isset($_SESSION['page'])) {
		// TODO load page from db
		// use for returning player / cookie
	} else {
		// TODO load start of story from DB
	}

?>
</main>
<script src="js/navbar.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>