<!DOCTYPE html>
<html lang="fr">
<head>
	  <meta charset="utf-8" />
	  <link rel="stylesheet" href="../css.css" />
	  <script src="script.js"></script>
</head>

<body>
	<header>

	</header>
<div>
			<?php
        include '../player.php';
        genplaylist();
      ?>
	<div class = "smallquestion">
		<form action="resform9.php" method="post">
			<b> 10. Indépendamment de cette étude, dans quel(s) contexte(s) pourriez-vous réécouter cette playlist ? </b><br/>
			<br/>

			<input type="checkbox" name="possiblecontextplaylist[]" value="jamais" /> Je ne la réécouterai pas <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="transport" /> Dans les transports en commun <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="conduite" /> En conduisant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="travail" /> En travaillant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="révision" /> En révisant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="lecture" /> En lisant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="web" /> En surfant sur le web<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="jeu" /> En jouant <br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="sport" /> En faisant du sport<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="seul" /> Seul<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="amis" /> Avec des amis<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="compagnon" /> Avec son compagnon/sa compagne<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="famille" /> Avec sa famille<br/>
			<input type="checkbox" name="possiblecontextplaylist[]" value="autrec" /> Autre :
			<a href="#" class="test">[?]
						<div class="raised">
						<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>
						<div class="boxcontent">
						 
						<b> Exemple d'autres contextes possibles : </b>
						<p>
						 
						En faisant la vaisselle - En faisant le ménage ... <br />
						Sous la douche - Dans le lit ... <br />
						Avant de s'endormir - Après le repas ... <br />
						... <br/>
						</p>
						</div>
						<b class="bottom"><b class="b4b"></b><b class="b3b"></b><b class="b2b"></b><b class="b1b"></b></b>
						</div>
					</a>
			<input type = "text" name = "autrec1" id = "autrec1" placeholder = "Autre contexte" style="text-align:center"/>
			<br/>
			<br/>
			<div>
			<input class = "suivant" type="submit" value="Suivant >" />
			<br/>
			<progress max="10" value = "9"></progress>
		</div>
			<br/>
		</form>
	</div>
	

</body>
</html>
