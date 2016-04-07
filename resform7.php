<?php

$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];


if(!empty($_POST['newmoodplaylist'])){
	$mood = $_POST['newmoodplaylist'];
			if ($mood=="autre"){
				if (empty($_POST['othermoodplaylist']) && $_POST['othermoodplaylist']==""){
					require("form7.php");
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$mood.= " : ";
					$othermood = $_POST['othermoodplaylist'];
					$mood.= $othermood;
					$requete = 'INSERT INTO moodplaylist (mood_name, user_id /*, playlist_id */) VALUES("'.$mood.'","' .$userid.'")';
					$res = mysql_query($requete);
					header("Location:form8.php");
				}
			}else{
				$requete = 'INSERT INTO moodplaylist (mood_name, user_id /*, playlist_id */) VALUES("'.$mood.'","' .$userid.'")';
				$res = mysql_query($requete);
				header("Location:form8.php");
			}
}else{
		require("form7.php");
		echo "<script> alert('Merci de sélectionner au moins une humeur') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

?>