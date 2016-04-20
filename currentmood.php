<?php

/*
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
*/
$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");

session_start();
$userid = $_SESSION['userid'];

$listened_playlist = array();
//$requete = "SELECT playlist_id FROM listened WHERE user_id = '".$userid."'";
$requete = "SELECT playlist_id FROM listened WHERE user_id = 1";
$res = mysql_query($requete);	
while($row = mysql_fetch_array($res)){
	$listened_playlist[] = $row['playlist_id'];
}

if(!empty($_POST['mood'])){
	global $dbprefix;
	$mood = $_POST['mood'];
	if ($mood=="autre"){
		if (empty($_POST['otherMood']) && $_POST['otherMood']==""){
			require("mood.php");
			echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
			echo "<script> location.href = history.back(-1) </script>";
		}else{
			$mood.= " : ";
			$othermood = $_POST['othermood'];
			$mood.= $othermood;
			$requete = 'INSERT INTO listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
			$res = mysql_query($requete);
			if($_SESSION['tuto1']){	
				header("Location: tuto2.php");
				exit;
			}else{
				header("Location: tuto1.php");
				exit;
			}
			if (count($listened_playlist)!=6){
				$all_playlist = range(1,6);
				shuffle($all_playlist);
				foreach ($all_playlist as $id) {
					if (!in_array($id, $listened_playlist)){
						$_SESSION['playlist_id'] = $id;
						break;
					}
				}
			}
			
		}
	}else{
		$requete = 'INSERT INTO listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
		$res = mysql_query($requete);
		if($_SESSION['tuto1']){	
				header("Location: tuto2.php");
				exit;
			}else{
				header("Location: tuto1.php");
				exit;
			}
			if (count($listened_playlist)!=6){
				$all_playlist = range(1,6);
				shuffle($all_playlist);
				foreach ($all_playlist as $id) {
					if (!in_array($id, $listened_playlist)){
						$_SESSION['playlist_id'] = $id;
						break;
					}
				}
			}
	}
}else{
	require("mood.php");
	echo "<script> alert('Merci de sélectionner une humeur') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}
?>