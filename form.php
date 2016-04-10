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

	<div id = "player">
      <?php
        include 'player.php';
        genplaylist();
      ?>
  </div>

       <input type = "button" id="player_button" value = "Répondre au questionnaire" onclick = "self.location.href = 'form/form1.php'"/>
        
        <script src="jquery.js"></script>
        <script src="script.js"></script> 
</body>
</html>
