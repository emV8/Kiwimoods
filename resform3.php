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

	if (isset($_POST['gouttitre1']) && $_POST['gouttitre1']!=""){
		$requete = 'INSERT INTO likemusic (likesong, user_id /*, music_id */) VALUES("'.$_POST['gouttitre1'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok1 = true;
	}else{
		require("form3.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 1') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}if (isset($_POST['gouttitre2']) && $_POST['gouttitre2']!=""){
		$requete = 'INSERT INTO likemusic (likesong, user_id /*, music_id */) VALUES("'.$_POST['gouttitre2'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok2 = true;
	}else{
		require("form3.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 2') </script>";
		echo "<script> location.href = history.back(-1) </script>";;
	}
	if (isset($_POST['gouttitre3']) && $_POST['gouttitre3']!=""){
		$requete = 'INSERT INTO likemusic (likesong, user_id /*, music_id */) VALUES("'.$_POST['gouttitre3'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok3 = true;
	}else{
		require("form3.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 3') </script>";
		echo "<script> location.href = history.back(-1) </script>";;
	}
	if (isset($_POST['gouttitre4']) && $_POST['gouttitre4']!=""){
		$requete = 'INSERT INTO likemusic (likesong, user_id /*, music_id */) VALUES("'.$_POST['gouttitre4'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok4 = true;
	}else{
		require("form3.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 4') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}
	if (isset($_POST['gouttitre5']) && $_POST['gouttitre5']!=""){
		$requete = 'INSERT INTO likemusic (likesong, user_id /*, music_id */) VALUES("'.$_POST['gouttitre5'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok5 = true;
	}else{
		require("form3.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 5') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}
	if (isset($_POST['gouttitre6']) && $_POST['gouttitre']!=""){
		$requete = 'INSERT INTO likemusic (likesong, user_id /*, music_id */) VALUES("'.$_POST['gouttitre6'].'","' .$userid.'")';
		$res = mysql_query($requete);
		$ok6 = true;
	}else{
		require("form3.php");
		echo "<script> alert('Merci de sélectionner un choix pour le titre 6') </script>";
		echo "<script> location.href = history.back(-1) </script>";
	}

	if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
		header("Location:form4.php");
	}

?>