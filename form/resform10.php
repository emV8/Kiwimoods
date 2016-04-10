<?php

include_once('../../config-tut8.php');
$connexion = mysql_connect($databaselocation, $databaseuser, $databasepass);
if (!$connexion) {
	die('Could not connect: ' . mysql_error());
}
$bdd = mysql_select_db($databasename, $connexion);
if (!$bdd) {
	die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
mysql_query("SET NAMES 'utf8'");

session_start();
$userid = $_SESSION['userid'];


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
			$requete = 'INSERT INTO '.$dbprefix.' namemoodplaylist (mood_name, user_id /*, playlist_id */) VALUES("'.$mood.'","' .$userid.'")';
			$res = mysql_query($requete);
					//header("Location:form8.php");
		}
	}else{
		$requete = 'INSERT INTO '.$dbprefix.' namemoodplaylist (mood_name, user_id /*, playlist_id */) VALUES("'.$mood.'","' .$userid.'")';
		$res = mysql_query($requete);
				//header("Location:form8.php");
	}
}else{
	require("form10.php");
	echo "<script> alert('Merci de sélectionner au moins une humeur') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

?>