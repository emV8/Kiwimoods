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

if(!empty($_POST['possiblecontextplaylist'])){
	global $dbprefix;
	foreach($_POST['possiblecontextplaylist'] as $selected){
		$context = $selected;
		if ($selected=="autrec"){
			if (empty($_POST['autrec']) && $_POST['autrec']==""){
				echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}else{
				$context.= " : ";
				$othercontext = $_POST['autrec'];
				$context.= $othercontext;
				$requete = 'INSERT INTO '.$dbprefix.' possiblecontextplaylist (context_name, user_id /*, playlist_id */) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				header("Location:form10.php")
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontextplaylist (context_name, user_id /*, playlist_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			header("Location:form10.php")
		}
	}
}else{
	echo false;
}

?>