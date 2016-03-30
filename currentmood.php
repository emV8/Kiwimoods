<?php


session_start();

$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");

	if(!empty($_POST['mood'])){
		$mood = $_POST['mood'];
		if ($_POST['mood']=="autre"){
			if (!empty($_POST['otherMood'])){
				$otherMood = $_POST['otherMood'];
				$mood+= $otherMood;
			}else{
				echo "Vous devez entrer une autre humeur";
			}
		}
	$requete = 'INSERT INTO currentmood (user_id, mood_name) VALUES("'.$_SESSION['userid'].'","' .$mood.'")';
	$res = mysql_query($requete);
}else{
	echo "Vous devez sélectionner une humeur";
}

?>