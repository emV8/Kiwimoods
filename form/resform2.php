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

if(!empty($_POST['ctitre1'])){
	global $dbprefix;
	foreach($_POST['ctitre1'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) && $_POST['autre1']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre1'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok1 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok1 = true;
		}
	}
}else{
    echo false;
}

if(!empty($_POST['ctitre2'])){
	global $dbprefix;
	foreach($_POST['ctitre2'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre1']) && $_POST['autre2']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre2'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok2 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok2 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['ctitre3'])){
	global $dbprefix;
	foreach($_POST['ctitre3'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre3']) && $_POST['autre3']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre3'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok3 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok3 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['ctitre4'])){
	global $dbprefix;
	foreach($_POST['ctitre4'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre4']) && $_POST['autre4']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre4'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok4 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok4 = true;
		}
	}
}
else{
	echo false;
}

if(!empty($_POST['ctitre5'])){
	global $dbprefix;
	foreach($_POST['ctitre5'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre5']) && $_POST['autre5']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre5'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok5 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok5 = true;
		}
	}
}else{
	echo false;
}

if(!empty($_POST['ctitre6'])){
	global $dbprefix;
	foreach($_POST['ctitre6'] as $selected){
		$context = $selected;
		if ($selected=="autre"){
			if (empty($_POST['autre6']) && $_POST['autre6']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autre6'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok6 = true;
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' listencontext (context_name, user_id /*, music_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			$ok6 = true;
		}
	}
}else{
	echo false;
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form3.php");
}

?>