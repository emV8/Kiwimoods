<?php

$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
if (!$connexion) {
	die('Could not connect: ' . mysql_error());
}

if (!$bdd) {
	die ('Impossible de sélectionner la base de données : ' . mysql_error());
}

$ok1 = false;
$ok2 = false;
$ok3 = false;
$ok4 = false;
$ok5 = false;
$ok6 = false;

$ok12 = false;
$ok22 = false;
$ok32 = false;
$ok42 = false;
$ok52 = false;
$ok62 = false;

	//question 5
if (isset($_POST['connaissancetitre1']) && $_POST['connaissancetitre1']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowtitle (knowtitle, user_id /*, music_id */) VALUES("'.$_POST['connaissancetitre1'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok1 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre2']) && $_POST['connaissancetitre2']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowtitle (knowtitle, user_id /*, music_id */) VALUES("'.$_POST['connaissancetitre2'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok2 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre3']) && $_POST['connaissancetitre3']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowtitle (knowtitle, user_id /*, music_id */) VALUES("'.$_POST['connaissancetitre3'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok3 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre4']) && $_POST['connaissancetitre4']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowtitle (knowtitle, user_id /*, music_id */) VALUES("'.$_POST['connaissancetitre4'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok4 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre5']) && $_POST['connaissancetitre5']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowtitle (knowtitle, user_id /*, music_id */) VALUES("'.$_POST['connaissancetitre5'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok5 = true;
}else{
	echo false;
}
if (isset($_POST['connaissancetitre6']) && $_POST['connaissancetitre6']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowtitle (knowtitle, user_id /*, music_id */) VALUES("'.$_POST['connaissancetitre6'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok6 = true;
}else{
	echo false;
}


	//question 6

if (isset($_POST['connaissanceartiste1']) && $_POST['connaissanceartiste1']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowartist (knowartist, user_id /*, music_id */) VALUES("'.$_POST['connaissanceartiste1'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok1 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste2']) && $_POST['connaissanceartiste2']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowartist (knowartist, user_id /*, music_id */) VALUES("'.$_POST['connaissanceartiste2'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok2 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste3']) && $_POST['connaissanceartiste3']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowartist (knowartist, user_id /*, music_id */) VALUES("'.$_POST['connaissanceartiste3'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok3 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste4']) && $_POST['connaissanceartiste4']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowartist (knowartist, user_id /*, music_id */) VALUES("'.$_POST['connaissanceartiste4'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok4 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste5']) && $_POST['connaissanceartiste5']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowartist (knowartist, user_id /*, music_id */) VALUES("'.$_POST['connaissanceartiste5'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok5 = true;
}else{
	echo false;
}
if (isset($_POST['connaissanceartiste6']) && $_POST['connaissanceartiste6']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  knowartist (knowartist, user_id /*, music_id */) VALUES("'.$_POST['connaissanceartiste6'].'","' .$userid.'")';
	$res = mysql_query($requete);
	$ok6 = true;
}else{
	echo false;
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form6.php");
}

?>