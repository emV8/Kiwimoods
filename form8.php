<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  <script src="script.js"></script>
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

		<div class = "smallquestion">
			<form action="resform8.php" method="post">
			<b> 9. Avez-vous apprécié cette playlist ? </b><br/>
			<br/>	
		       <input type='radio' name="goutplaylist" value="oui" /> Oui <br/>
		       <input type="radio" name="goutplaylist" value="non" /> Non <br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			</form>
            <?php
                include 'player.php';
                genplaylist();
            ?>
		</div>
     
</body>
</html>
