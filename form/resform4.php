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


if(!empty($_POST['cptitre1'])){
	global $dbprefix;
	$ok1 = false;
	foreach($_POST['cptitre1'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec1']) && $_POST['autrec1']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok1 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok1 = true;
		}
	}
}else{
	require("form4.php");
	echo "<script> alert('Merci de sélectionner au moins un contexte pour le titre 1') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['cptitre2'])){
	global $dbprefix;
	$ok2 = false;
	foreach($_POST['cptitre2'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec1']) && $_POST['autrec2']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec2'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok2 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok2 = true;
		}
	}
}else{
	require("form4.php");
	echo "<script> alert('Vous devez sélectionner au moins un contexte pour le titre 2') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['cptitre3'])){
	global $dbprefix;
	$ok3 = false;
	foreach($_POST['cptitre3'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec3']) && $_POST['autrec3']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec3'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok3 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok3 = true;
		}
	}
}else{
	require("form4.php");
	echo "<script> alert('Vous devez sélectionner au moins un contexte pour le titre 3') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['cptitre4'])){
	global $dbprefix;
	$ok4 = false;
	foreach($_POST['cptitre4'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec4']) && $_POST['autrec4']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec4'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok4 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok4 = true;
		}
	}
}
else{
	require("form4.php");
	echo "<script> alert('Vous devez sélectionner au moins un contexte pour le titre 4') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['cptitre5'])){
	global $dbprefix;
	$ok5 = false;
	foreach($_POST['cptitre5'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec5']) && $_POST['autrec5']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec5'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok5 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok5 = true;
		}
	}
}else{
	require("form4.php");
	echo "<script> alert('Vous devez sélectionner au moins un contexte pour le titre 5') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['cptitre6'])){
	global $dbprefix;
	$ok6 = false;
	foreach($_POST['cptitre6'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec6']) && $_POST['autrec6']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec6'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok6 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok6 = true;
		}
	}
}else{
	require("form4.php");
	echo "<script> alert('Vous devez sélectionner au moins un contexte pour le titre 6') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form5.php");
}

?>