<!DOCTYPE html>
<html lang="fr">
<head>
	  <meta charset="utf-8" />
	  <link rel="stylesheet" href="css.css" />
	  <script src="script.js"></script>
</head>

<body>
	<header>

	</header>
<div>
			<?php
        include 'player.php';
        genplaylist();
      ?>
	<div class = "smallquestion">
		<form action="resform9.php" method="post">
			<b> 10. Indépendamment de cette étude, dans quel(s) contexte(s) pourriez-vous réécouter cette playlist ? </b><br/>
			<br/>

			<input type="checkbox" name="possiblecontextplaylist[]" value="jamais" /> Je ne la réécouterai pas <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="transport" /> Dans les transports en commun <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="conduite" />En conduisant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="travail" />En travaillant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="révision" /> En révisant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="lecture" />En lisant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="web" />En surfant sur le web<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="jeu" /> 	En jouant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="sport" />En faisant du sport<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="seul" />Seul<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="amis" />Avec des amis<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="compagnon" />Avec son compagnon/sa compagne<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="famille" />Avec sa famille<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="autrec" /> Autre : <input type = "text" name = "autrec1" id = "autrec1" placeholder = "Autre contexte" style="text-align:center"/>
			<br/>
			<br/>
			<input class = "suivant" type="submit" value="Suivant >" />
		</form>
	</div>
	<div> 
	</div>

</body>
</html>
