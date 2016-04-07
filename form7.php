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
			<form action="resform7.php" method="post">
			<b> 8. Si oui, vers quelle humeur a-t-elle changé ? </b><br/>
			<br/>
		       <input type='radio' name="newmoodplaylist" value="colère" /> Colère <br/>
		       <input type="radio" name="newmoodplaylist" value="excitation" /> Excitation <br/>
		       <input type="radio" name="newmoodplaylist" value="calme" /> Calme/détente <br/>
		       <input type="radio" name="newmoodplaylist" value="joie" /> Joie <br/>
		       <input type="radio" name="newmoodplaylist" value="peur" /> Peur <br/>
		       <input type="radio" name="newmoodplaylist" value="fatigue" /> Fatigue <br/>
		       <input type="radio" name="newmoodplaylist" value="ennui" /> Ennui <br/>
		       <input type="radio" name="newmoodplaylist" value="tristesse" /> Tristesse <br/>
		       <input type="radio" name="newmoodplaylist" value="autre" /> Autre <br/>
		       <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Autre humeur" style="text-align:center"/> <br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			</form>
            <?php
        include 'player.php';
        genplaylist();
      ?>
		</div>

</body>
</html>
