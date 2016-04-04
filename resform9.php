<?php

$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];


if(!empty($_POST['possiblecontextplaylist'])){
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
					$requete = 'INSERT INTO possiblecontextplaylist (context_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					header("Location:form10.php")
				}
			}else{
				$requete = 'INSERT INTO possiblecontextplaylist (context_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				header("Location:form10.php")
			}
		}
}else{
	require("form9.php");
		echo "<script> alert('Merci de sélectionner au moins un contexte') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

?>