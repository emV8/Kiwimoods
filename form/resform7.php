<?php
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];
$ok1 = false;
$ok2 = false;
$ok3= false;
$ok4 = false;
$ok5 = false;
$ok6 = false;
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}


if(!empty($_POST['newmoodplaylist'])){
	global $dbprefix;
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
			$requete = 'INSERT INTO  newmoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
			$res = $connexion -> query($requete);
			header("Location:form8.php");
		}
	}else{
		$requete = 'INSERT INTO  newmoodplaylist (mood_name, user_id , playlist_id) VALUES("'.$mood.'","' .$userid.'", "'.$_SESSION['playlist_id'].'")';
		$res = $connexion -> query($requete);
		header("Location:form8.php");
	}
}else{
	echo false;
}

?>