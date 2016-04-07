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

	<div id = "tuto">
		Merci de participer à notre expérience !
		<br/>
		Voici son déroulement :
		<br/>
		<ul>
			<li> Avant d'écouter chacune des playlists, vous devrez renseigner l'humeur dans laquelle vous vous trouvez. <br/>
			La réponse à cette question est obligatoire. <br/>
			N'hésitez pas à remplir le champ "autre" si aucune des formulations ne vous convient. </li> <br/>
			<li> Vous devrez ensuite écouter chacune des playlists. <br/>
			Vous n'êtes en aucun cas obligé d'écouter toutes les playlists d'un coup, vous pouvez répartir l'écoute sur plusieurs jours par exemple. <br/>
			Merci d'écouter chaque titre et playlist dans leur intégralité. </li> <br/>
			<li> Il vous restera à répondre à un questionnaire après l'écoute de chaque playlist. <br/>
			Ce dernier est composé de 10 questions dont chacune est obligatoire. <br/>
			Merci de répondre le plus sincèrement possible et n'hésitez pas à remplir le champ "autre". <br/> </li>
		</ul> <br/>
		Merci pour votre attention et votre participation !
	</div>

</body>
</html>