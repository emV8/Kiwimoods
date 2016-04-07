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
			<form action="resform10.php" method="post">
			<b> 11. A quelle(s) humeur(s) associeriez-vous cette playlist ? </b><br/>
			<br/>
		       <input type='checkbox' name="namemoodplaylist" value="colère" /> Colère <br/>
		       <input type="checkbox" name="namemoodplaylist" value="excitation" /> Excitation <br/>
		       <input type="checkbox" name="namemoodplaylist" value="calme" /> Calme/détente <br/>
		       <input type="checkbox" name="namemoodplaylist" value="joie" /> Joie <br/>
		       <input type="checkbox" name="namemoodplaylist" value="peur" /> Peur <br/>
		       <input type="checkbox" name="namemoodplaylist" value="fatigue" /> Fatigue <br/>
		       <input type="checkbox" name="namemoodplaylist" value="ennui" /> Ennui <br/>
		       <input type="checkbox" name="namemoodplaylist" value="tristesse" /> Tristesse <br/>
		       <input type="checkbox" name="namemoodplaylist" value="autre" /> Autre : <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Autre humeur" style="text-align:center"/> <br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			</form>
		</div>
     <?php
            include 'player.php';
            genplaylist();
        ?>
</body>
</html>
