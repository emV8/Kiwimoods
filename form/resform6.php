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
	echo false;
}



?>