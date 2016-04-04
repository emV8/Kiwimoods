<?php

	$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");
	session_start();
	$userid = $_SESSION['userid'];

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
		$requete = 'INSERT INTO knowtitle (knowtitle, user_id) VALUES("'.$_POST['connaissancetitre1'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok1 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 1') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}if (isset($_POST['connaissancetitre2']) && $_POST['connaissancetitre2']!=""){
		$requete = 'INSERT INTO knowtitle (knowtitle, user_id) VALUES("'.$_POST['connaissancetitre2'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok2 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 2') </script>";
		echo "<script> location.href = history.back(-1) </script>";;
	}
	if (isset($_POST['connaissancetitre3']) && $_POST['connaissancetitre3']!=""){
		$requete = 'INSERT INTO knowtitle (knowtitle, user_id) VALUES("'.$_POST['connaissancetitre3'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok3 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 3') </script>";
		echo "<script> location.href = history.back(-1) </script>";;
	}
	if (isset($_POST['connaissancetitre4']) && $_POST['connaissancetitre4']!=""){
		$requete = 'INSERT INTO knowtitle (knowtitle, user_id) VALUES("'.$_POST['connaissancetitre4'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok4 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 4') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}
	if (isset($_POST['connaissancetitre5']) && $_POST['connaissancetitre5']!=""){
		$requete = 'INSERT INTO knowtitle (knowtitle, user_id) VALUES("'.$_POST['connaissancetitre5'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok5 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 5') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}
	if (isset($_POST['connaissancetitre6']) && $_POST['connaissancetitre']!=""){
		$requete = 'INSERT INTO knowtitle (knowtitle, user_id) VALUES("'.$_POST['connaissancetitre6'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok6 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 6') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}


	//question 6

		if (isset($_POST['connaissanceartiste1']) && $_POST['connaissanceartiste1']!=""){
		$requete = 'INSERT INTO knowartist (knowartist, user_id) VALUES("'.$_POST['connaissanceartiste1'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok1 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 1') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}if (isset($_POST['connaissanceartiste2']) && $_POST['connaissanceartiste2']!=""){
		$requete = 'INSERT INTO knowartist (knowartist, user_id) VALUES("'.$_POST['connaissanceartiste2'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok2 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 2') </script>";
		echo "<script> location.href = history.back(-1) </script>";;
	}
	if (isset($_POST['connaissanceartiste3']) && $_POST['connaissanceartiste3']!=""){
		$requete = 'INSERT INTO knowartist (knowartist, user_id) VALUES("'.$_POST['connaissanceartiste3'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok3 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 3') </script>";
		echo "<script> location.href = history.back(-1) </script>";;
	}
	if (isset($_POST['connaissanceartiste4']) && $_POST['connaissanceartiste4']!=""){
		$requete = 'INSERT INTO knowartist (knowartist, user_id) VALUES("'.$_POST['connaissanceartiste4'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok4 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 4') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}
	if (isset($_POST['connaissanceartiste5']) && $_POST['connaissanceartiste5']!=""){
		$requete = 'INSERT INTO knowartist (knowartist, user_id) VALUES("'.$_POST['connaissanceartiste5'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok5 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 5') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}
	if (isset($_POST['connaissanceartiste6']) && $_POST['connaissanceartiste']!=""){
		$requete = 'INSERT INTO knowartist (knowartist, user_id) VALUES("'.$_POST['connaissanceartiste6'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok6 = true;
	}else{
		require("form5.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 6') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}

	if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
		header("Location:form4.php");
	}

?>