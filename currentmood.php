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
			$requete = 'INSERT INTO '.$dbprefix.' listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
			$res = mysql_query($requete);
			if($_SESSION['tuto1']){	
				header("Location: form.php");
				exit;
			}else{
				header("Location: tuto1.php");
				exit;
			}
		}
	}else{
		$requete = 'INSERT INTO '.$dbprefix.' listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
		$res = mysql_query($requete);
		if($_SESSION['tuto1']){	
				header("Location: form.php");
				exit;
			}else{
				header("Location: tuto1.php");
				exit;
			}
	}
}else{
	require("mood.php");
	echo "<script> alert('Merci de sélectionner une humeur') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

?>