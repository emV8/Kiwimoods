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

$requete = "SELECT titre, artiste FROM music WHERE playlist_id = '".$_SESSION ['playlist_id']."'";
$res = mysql_query($requete);	

while($row = mysql_fetch_array($res)){
	$title_playlist[] = $row['titre'];
}

if (isset($_POST['gouttitre1']) && $_POST['gouttitre1']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likemusic (likesong, user_id , title) VALUES("'.$_POST['gouttitre1'].'","' .$userid.'","'.$title_playlist[0].'")';
	$res = mysql_query($requete);
	$ok1 = true;
}else{
	echo false;
}
if (isset($_POST['gouttitre2']) && $_POST['gouttitre2']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likemusic (likesong, user_id , title) VALUES("'.$_POST['gouttitre2'].'","' .$userid.'","'.$title_playlist[1].'")';
	$res = mysql_query($requete);
	$ok2 = true;
}else{
	echo false;
}
if (isset($_POST['gouttitre3']) && $_POST['gouttitre3']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likemusic (likesong, user_id , title) VALUES("'.$_POST['gouttitre3'].'","' .$userid.'","'.$title_playlist[2].'")';
	$res = mysql_query($requete);
	$ok3 = true;
}else{
	echo false;
}
if (isset($_POST['gouttitre4']) && $_POST['gouttitre4']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likemusic (likesong, user_id , title) VALUES("'.$_POST['gouttitre4'].'","' .$userid.'","'.$title_playlist[3].'")';
	$res = mysql_query($requete);
	$ok4 = true;
}else{
	echo false;
}
if (isset($_POST['gouttitre5']) && $_POST['gouttitre5']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likemusic (likesong, user_id , title) VALUES("'.$_POST['gouttitre5'].'","' .$userid.'","'.$title_playlist[4].'")';
	$res = mysql_query($requete);
	$ok5 = true;
}else{
	echo false;
}
if (isset($_POST['gouttitre6']) && $_POST['gouttitre6']!=""){
	global $dbprefix;
	$requete = 'INSERT INTO  likemusic (likesong, user_id , title) VALUES("'.$_POST['gouttitre6'].'","' .$userid.'","'.$title_playlist[5].'")';
	$res = mysql_query($requete);
	$ok6 = true;
}else{
	echo false;
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form4.php");
}

?>