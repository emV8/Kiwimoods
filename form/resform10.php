<?php
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
$ok1 = false;
$ok2 = false;
$ok3= false;
$ok4 = false;
$ok5 = false;
$ok6 = false;
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if(!empty($_POST['namemoodplaylist'])){
	global $dbprefix;
	$mood = $_POST['namemoodplaylist'];
	if ($mood=="autre"){
		if (empty($_POST['othermoodplaylist']) && $_POST['othermoodplaylist']==""){
			echo false;
		}else{
			$mood.= " : ";
			$othermood = $_POST['othermoodplaylist'];
			$mood.= $othermood;
			$requete = 'INSERT INTO  namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
			$res = mysql_query($requete);

			$requete2 = 'INSERT INTO  listened (user_id, playlist_id) VALUES("'.$userid.'","' .$_SESSION['playlist_id'].'")';
			$res2 = mysql_query($requete2);
			if ($res2){
				echo 'dans bdd';
			}else{
				echo 'pas dans bdd';
			}
			header("Location:tuto2.php");
			$res = $connexion -> query($requete);
                                                                                                                           
		}
	}else{
		$requete = 'INSERT INTO  namemoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
		$res = $connexion -> query($requete);
	}
}else{
	echo false;
}

?>