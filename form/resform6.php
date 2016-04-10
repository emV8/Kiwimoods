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

if(isset($_POST['moodplaylist']) && $_POST['moodplaylist']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO '.$dbprefix.' moodplaylist (user_id, mood_name /*, playlist_id */) VALUES("'.$_SESSION['userid'].'","' .$moodplaylist.'")';
	$res = mysql_query($requete);
	$moodplaylist = $_POST['moodplaylist'];
	if ($moodplaylist=="oui"){
		header("Location:form7.php");
	}else{
		header("Location:form8.php");
	}
}else{
	require("form6.php");
	echo "<script> alert('Merci de sélectionner un choix') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}



?>