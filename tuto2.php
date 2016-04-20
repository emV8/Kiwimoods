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
	$_SESSION['tuto2'] = true;
	?>
	</div>
	</header>

	<div id = "tuto">
		Vous allez maintenant passer au questionnaire. <br/>
		Ce dernier est composé de 10 questions et chacune est obligatoire. <br/>
		N'hésitez pas à remplir le champ <i> "autre" </i> si aucune des formulations ne vous convient. <br/>
		Merci de répondre le plus sincèrement possible à ce questionnaire. <br/> <br/>
		Bon courage pour le questionnaire !
		<br/>
		<br/>
		<span> <input type = "button" class="suivant" value = "Répondre au questionnaire >" onclick = "self.location.href = 'form/form1.php'"/> </span>
	</div>
	


</body>
</html>