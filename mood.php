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
		session_start();
		echo $_SESSION['login'];
	?>
	</div>
</header>

<div class="text">
	Comment qualifieriez-vous votre humeur au cours de la journée ?
</div>
<div id = "currentMood">
	<form action="currentmood.php" method="post">
		<div id="excitation"> <img src="img/music/orange.png" width="25%" alt="excitation"> <br/> Excitation <br/> <input type='radio' name="mood" value='excitation' /> </div>
		<div id="angry"> <img src="img/music/rouge.png" width="25%" alt="colère"> <br/> Colère <br/> <input type='radio' name="mood" value='angry' /></div>
		<div id="happiness"> <img src="img/music/jaune.png" width="25%" alt="joie"> <br/> Joie <br/> <input type='radio' name="mood" value='happiness' /> </div>
		<div id="other"> <img src="img/music/blanc.png" width="25%" alt="autre"> <br/> Autre <br/> <input type='radio' name="mood[]" value='other' /> <br/> <input type="text" name="otherMood" style="width:50%; position:relative; left:-10%;"/> </div>
		<div id="calm"> <img src="img/music/vert.png" width="25%" alt="calme"> <br/> Calme/relaxation <br/> <input type='radio' name="mood" value='calm' /> </div>
		<div id="sadness"> <img src="img/music/noir.png" width="25%" alt="tristesse"> <br/> Tristesse <br/> <input type='radio' name="mood" value='sadness' /> </div>
		<div id="tired"> <img src="img/music/violet.png" width="25%" alt="fatigue"> <br/> Fatigue <br/> <input type='radio' name="mood" value='tired' /></div>
		<input type="submit" value="Envoyer" id="button_moods"/>
	</form>
</div>
</body>
</html>


<!--

<div id = "excitation"> <img src="img/music/bleu.png" width="25%" alt="bleu"> <br/> Blabla <br/> <input type='radio' name="mood" value='blabla'/><label for="blabla"></label> 

	Pour plusieurs checkbox :


		<div id="excitation"> <img src="img/music/orange.png" width="25%" alt="excitation"> <br/> Excitation <br/> <input type='radio' name="mood[]" value='excitation' /> </div>

-->
