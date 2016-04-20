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

if(isset($_POST['goutplaylist']) && $_POST['goutplaylist']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likeplaylist (user_id, mood_name /*, playlist_id */) VALUES("'.$_SESSION['userid'].'","' .$goutplaylist.'")';
	$res = mysql_query($requete);
	$goutplaylist = $_POST['goutplaylist'];
	header("Location:form9.php");
}else{
	echo false;
}



?>