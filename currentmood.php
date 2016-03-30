<?php


session_start();

$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");

	if(!empty($_POST['mood'])){

	$requete = 'INSERT INTO currentmood (user_id, mood_name) VALUES("'.$_SESSION['userid'].'","' .$_POST['mood'].'")';
	$res = mysql_query($requete);
}else{
	echo "Vous devez sélectionner une humeur";
}

?>