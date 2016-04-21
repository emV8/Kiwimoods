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
		echo "Bienvenue, ". $_SESSION['login']." !";
	}
	?>
	</div>
</header>

<div class="text">
	Comment qualifieriez-vous votre humeur au cours des dernières heures ?
</div>
<div id = "currentMood">
	<form action="currentmood.php" method="post">
		<div id="excitation"> <img src="img/music/orange.png" width="25%" alt="excitation"> <br/> Excitation <br/> <span class ="radiomood"> <input type='radio' name="mood" value='excitation' /> </span> </div>
		<div id="angry"> <img src="img/music/rouge.png" width="25%" alt="colère"> <br/> Colère <br/> <span class ="radiomood"> <input type='radio' name="mood" value='colère' /> </span> </div>
		<div id="happiness"> <img src="img/music/jaune.png" width="25%" alt="joie"> <br/> Joie <br/> <span class ="radiomood"> <input type='radio' name="mood" value='joie' /> </span> </div>
		<div id="other"> <img src="img/music/blanc.png" width="25%" alt="autre"> <br/> Autre <br/> <span class ="radiomood"> <input type='radio' name="mood" value='autre' /> </span> <br/> <input type="text" name="otherMood" id = "otherMood" placeholder="Si autre, écrire une/des émotion(s)..."/> </div>
		<div id="calm"> <img src="img/music/vert.png" width="25%" alt="calme"> <br/> Calme/relaxation <br/> <span class ="radiomood"> <input type='radio' name="mood" value='calme' /> </span> </div>
		<div id="sadness"> <img src="img/music/noir.png" width="25%" alt="tristesse"> <br/> Tristesse <br/> <span class ="radiomood"> <input type='radio' name="mood" value='tristesse' /> </span> </div>
		<div id="tired"> <img src="img/music/violet.png" width="25%" alt="fatigue"> <br/> Fatigue <br/> <span class ="radiomood"> <input type='radio' name="mood" value='fatigue' /> </span> </div>
		<input type="submit" class = "suivant" value="Envoyer" id="button_moods"/>
	</form>
</div>
</body>
</html>
