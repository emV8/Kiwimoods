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
        	Vous écoutez la playlist n° <?php echo $_SESSION['playlist_id'] ?>. <br/>
            À la fin de cette playlist, vous passerez au questionnaire. <br/>
            Ce dernier est composé de 10 questions et chacune est obligatoire. <br/>
            N'hésitez pas à remplir le champ <i> "autre" </i> si aucune des formulations ne vous convient. <br/>
            Merci de répondre le plus sincèrement possible à ces questions et de quitter la page, si vous le souhaitez, après avoir répondu à toutes les questions. <br/> <br/>
            Bon courage pour le questionnaire !
            <br/>
            <br/>
            <input class = "suivanttuto" type="submit" value="Répondre au questionnaire" onclick="self.location.href='form.php'"/>
        </div>

 <?php

 $listened_playlist = array();
//$requete = "SELECT playlist_id FROM listened WHERE user_id = '".$userid."'";
$requete = "SELECT playlist_id FROM listened WHERE user_id = 1";
$res = mysql_query($requete);	
while($row = mysql_fetch_array($res)){
	$listened_playlist[] = $row['playlist_id'];
}

if (count($listened_playlist)!=6){
				$all_playlist = range(1,6);
				shuffle($all_playlist);
				foreach ($all_playlist as $id) {
					if (!in_array($id, $listened_playlist)){
						$_SESSION['playlist_id'] = $id;
						break;
					}
				}
			}

 ?> 
      
        <script src="jquery.js"></script>
        <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
        <script src="script.js"></script> 
</body>
</html>

    
    