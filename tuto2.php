<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  
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

	<div id = "player">
      <?php
        include 'player.php';
        genplaylist();
      ?>
  </div>
</br></br></br></br></br></br></br></br></br></br></br>
   

        <div id = "tuto2">
            Vous allez maintenant passer au questionnaire. <br/>
            Ce dernier est composé de 10 questions et chacune est obligatoire. <br/>
            N'hésitez pas à remplir le champ <i> "autre" </i> si aucune des formulations ne vous convient. <br/>
            Merci de répondre le plus sincèrement possible à ce questionnaire. <br/> <br/>
            Bon courage pour le questionnaire !
            <br/>
            <br/>
            <input class = "suivanttuto" type="submit" value="Répondre au questionnaire" onclick="self.location.href='form.php'"/>
        </div>

  
      
        <script src="jquery.js"></script>
        <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
        <script src="script.js"></script> 
</body>
</html>

    
    