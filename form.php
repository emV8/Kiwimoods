<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
</head>

<body>
<header>
	<div id = "loginUser">
	<?php
	if (session_status() == PHP_SESSION_NONE || session_id()== ""){
		session_start();
		echo $_SESSION['login'];
	}
	?>
	</div>
</header>

      <?php
        include 'player.php';
        genplaylist();
      ?>

       <a href="form1.php" class="button">Etape suivante</a>
        
        <script src="jquery.js"></script>
        <script src="script.js"></script> 
</body>
</html>
