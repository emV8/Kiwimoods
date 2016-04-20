<?php
$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
$ok1 = false;
$ok2 = false;
$ok3= false;
$ok4 = false;
$ok5 = false;
$ok6 = false;
if (!$connexion) {
	die('Could not connect: ' . mysql_error());
}

if (!$bdd) {
	die ('Impossible de sélectionner la base de données : ' . mysql_error());
}

if(!empty($_POST['namemoodplaylist'])){
	global $dbprefix;
	$mood = $_POST['namemoodplaylist'];
	if ($mood=="autre"){
		if (empty($_POST['othermoodplaylist']) && $_POST['othermoodplaylist']==""){
			require("form10.php");
			echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
			echo "<script> location.href = history.back(-1) </script>";
		}else{
			$mood.= " : ";
			$othermood = $_POST['othermoodplaylist'];
			$mood.= $othermood;
			$requete = 'INSERT INTO  namemoodplaylist (mood_name, user_id /*, playlist_id */) VALUES("'.$mood.'","' .$userid.'")';
			$res = mysql_query($requete);

			$requete2 = 'INSERT INTO  listened (user_id, playlist_id) VALUES("'.$userid.'","' .$_SESSION['playlist_id'].'")';
			$res2 = mysql_query($requete2);
			header("Location:tuto2.php");
		}
	}else{
		$requete = 'INSERT INTO  namemoodplaylist (mood_name, user_id /*, playlist_id */) VALUES("'.$mood.'","' .$userid.'")';
		$res = mysql_query($requete);

		$requete2 = 'INSERT INTO  listened (user_id, playlist_id) VALUES("'.$userid.'","' .$_SESSION['playlist_id'].'")';
			$res2 = mysql_query($requete2);
			header("Location:tuto2.php");
			header("Location:tuto2.php");
	}
}else{
	echo false;
}

?>