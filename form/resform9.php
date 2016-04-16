<?php

include_once('../../config-tut8.php');
$connexion = mysql_connect($databaselocation, $databaseuser, $databasepass);
$ok1 = false;
$ok2 = false;
$ok3= false;
$ok4 = false;
$ok5 = false;
$ok6 = false;
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
				header("Location:form/form10.php")
			}
		}else{
			$requete = 'INSERT INTO '.$dbprefix.' possiblecontextplaylist (context_name, user_id /*, playlist_id */) VALUES("'.$context.'","' .$userid.'")';
			$res = mysql_query($requete);
			header("Location:form/form10.php")
		}
	}
}else{
	echo false;
}

?>