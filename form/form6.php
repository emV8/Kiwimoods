<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css.css" />
  <script src="script.js"></script>
</head>

<body>
<header>
	<div id = "loginUser">
	<?php
		session_start();
		echo $_SESSION['login'];
	?>
	</div>
</header>

<div>
			<?php
        include '../player.php';
        genplaylist();
      ?>
		<div class = "smallquestion">
			<form action="resform6.php" method="post">
			<b> 7. Avant d'écouter cette playlist, vous avez choisi '
				<?php
					$connexion = mysql_connect("localhost", "root");
					$bdd = mysql_select_db("kiwimoods", $connexion);
					mysql_query("SET NAMES 'utf8'");
					$userid = $_SESSION['userid'];
					$requete = "SELECT mood_name FROM currentmood WHERE user_id = '".$userid."'";
					$res = mysql_query($requete);
					$row = mysql_fetch_row($res);
					if ($row[0]){
						echo $row[0];
					}
				?> ' pour qualifier votre humeur. <br/> 
				Trouvez-vous qu'elle ait changée après cette écoute ? </b><br/>
			<br/>
		       <input type='radio' name="moodplaylist" value="oui" />Oui <br/>
		       <input type="radio" name="moodplaylist" value="non" />Non <br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			<br/>
			<progress max="10" value = "6"></progress>
			<br/>
			</form>
		</div>
		

</body>
</html>
