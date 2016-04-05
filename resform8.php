<?php

	$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");
	
	session_start();
	$userid = $_SESSION['userid'];
	
	if(isset($_POST['goutplaylist']) && $_POST['goutplaylist']!=""){
		$requete = 'INSERT INTO likeplaylist (user_id, mood_name /*, playlist_id */) VALUES("'.$_SESSION['userid'].'","' .$goutplaylist.'")';
		$res = mysql_query($requete);
		$goutplaylist = $_POST['goutplaylist'];
		header("Location:form9.php");
		}else{
			require("form6.php");
			echo "<script> alert('Merci de sélectionner un choix') </script>";
			echo "<script> location.href = history.back(-1) </script>";
		}



?>