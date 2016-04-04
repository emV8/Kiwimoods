<?php

$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];


if(!empty($_POST['mood'])){
		foreach($_POST['mood'] as $selected){
			$mood = $selected;
			if ($selected=="autre"){
				if (empty($_POST['otherMood']) && $_POST['otherMood']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$mood.= " : ";
					$othermood = $_POST['othermood'];
					$mood.= $othermood;
					$requete = 'INSERT INTO listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
					$res = mysql_query($requete);
					header("Location : form1.php");
				}
			}else{
				$requete = 'INSERT INTO listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
				$res = mysql_query($requete);
				header("Location : form1.php");
			}
		}
}else{
	require("form2.php");
		echo "<script> alert('Merci de sélectionner une humeur') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

?>