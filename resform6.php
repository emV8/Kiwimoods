<?php

	$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");
	
	session_start();
	$userid = $_SESSION['userid'];
	
	if(isset($_POST['moodplaylist']) && $_POST['moodplaylist']!=""){
		$requete = 'INSERT INTO moodplaylist (user_id, mood_name) VALUES("'.$_SESSION['userid'].'","' .$moodplaylist.'")';
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