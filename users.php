<?php

	$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");


	if (!empty($_POST['loginConn']) and !empty($_POST['passwordConn'])){
		connection();
	} elseif (!empty($_POST['logInscription']) and !empty($_POST['passwordInscription'])) {
		inscription();
	}

	function connection(){
		$identifiant = $_POST['loginConn'];
		$mdp = $_POST['passwordConn'];
		$mdpcode = md5($mdp);
		$requete = "SELECT * FROM user WHERE login = '".$identifiant."' AND mdp = '".$mdpcode."'";
		$res = mysql_query($requete);
		
		$row = mysql_fetch_row($res);
		if ($row[0]){
			//echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
			echo "Vous êtes connecté, '".$identifiant."'";
			$requete3 = "SELECT user_id FROM user WHERE login = '".$identifiant."'";
			$res = mysql_query($requete3);
			$userid = mysql_fetch_row($res)[0];
			session_start();
			$_SESSION['login'] = $identifiant;
			$_SESSION['userid'] = $userid;
			header('Location: mood.php');    

		}else{
			//require 'connexion.php';
			//echo "<script type='text/javascript'>document.getElementById('idfaux').innerHTML = 'Identifiant incorrect';</script>";
			echo "Oups";
		}
	}


	function inscription(){
		$identifiant = $_POST['logInscription'];
		$mdp = $_POST['passwordInscription'];
		$mail = $_POST['mail'];
		$requete = "SELECT * FROM user WHERE login = '".$identifiant."'";
		$res = mysql_query($requete);
		$row = mysql_fetch_row($res);
		if (!$row[0]){
			$mdpcode = md5($mdp);
			$requete2 = 'INSERT INTO user (login, mdp, mail) VALUES("'.$identifiant.'","' .$mdpcode.'", "' .$mail.'")';
			$res2 = mysql_query($requete2);
			if ($res2){
				echo "inscription ok";
				$requete3 = "SELECT user_id FROM user WHERE login = '".$identifiant."'";
				$res = mysql_query($requete3);
				$userid = mysql_fetch_row($res)[0];
				session_start();
				$_SESSION['login'] = $identifiant;
				$_SESSION['userid'] = $userid;
				 header('Location: mood.php');    
			}else{
				echo "oups inscription";
			}
		}else{
			echo "déjà inscrit";
		}
	}

	?>