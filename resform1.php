<?php

	$connexion = mysql_connect("localhost", "root");
	$bdd = mysql_select_db("kiwimoods", $connexion);
	mysql_query("SET NAMES 'utf8'");
	session_start();
	$userid = $_SESSION['userid'];

if(!empty($_POST['etitre1'])){
	 $ok1 = false;
		foreach($_POST['etitre1'] as $selected){
			$context = $selected;
			if ($selected=="autre"){
				if (empty($_POST['autre1']) && $_POST['autre1']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$context.= " : ";
					$othercontext = $_POST['autre1'];
					$context.= $othercontext;
					$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					$ok1 = true;
				}
			}else{
				$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok1 = true;
			}
		}
}else{
	require("form1.php");
		echo "<script> alert('Merci de sélectionner au moins une émotion pour le titre 1') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['etitre2'])){
	 $ok2 = false;
		foreach($_POST['etitre2'] as $selected){
			$context = $selected;
			if ($selected=="autre"){
				if (empty($_POST['autre1']) && $_POST['autre2']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$context.= " : ";
					$othercontext = $_POST['autre2'];
					$context.= $othercontext;
					$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					$ok2 = true;
				}
			}else{
				$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok2 = true;
			}
		}
}else{
	require("form1.php");
		echo "<script> alert('Vous devez sélectionner au moins une émotion pour le titre 2') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['etitre3'])){
	 $ok3 = false;
		foreach($_POST['etitre3'] as $selected){
			$context = $selected;
			if ($selected=="autre"){
				if (empty($_POST['autre3']) && $_POST['autre3']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$context.= " : ";
					$othercontext = $_POST['autre3'];
					$context.= $othercontext;
					$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					$ok3 = true;
				}
			}else{
				$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok3 = true;
			}
		}
}else{
	require("form1.php");
		echo "<script> alert('Vous devez sélectionner au moins une émotion pour le titre 3') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['etitre4'])){
	 $ok4 = false;
		foreach($_POST['etitre4'] as $selected){
			$context = $selected;
			if ($selected=="autre"){
				if (empty($_POST['autre4']) && $_POST['autre4']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$context.= " : ";
					$othercontext = $_POST['autre4'];
					$context.= $othercontext;
					$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					$ok4 = true;
				}
			}else{
				$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok4 = true;
			}
		}
}
else{
	require("form1.php");
		echo "<script> alert('Vous devez sélectionner au moins une émotion pour le titre 4') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['etitre5'])){
	 $ok5 = false;
		foreach($_POST['etitre5'] as $selected){
			$context = $selected;
			if ($selected=="autre"){
				if (empty($_POST['autre5']) && $_POST['autre5']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$context.= " : ";
					$othercontext = $_POST['autre5'];
					$context.= $othercontext;
					$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					$ok5 = true;
				}
			}else{
				$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok5 = true;
			}
		}
}else{
	require("form1.php");
		echo "<script> alert('Vous devez sélectionner au moins une émotion pour le titre 5') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

if(!empty($_POST['etitre6'])){
	 $ok6 = false;
		foreach($_POST['etitre6'] as $selected){
			$context = $selected;
			if ($selected=="autre"){
				if (empty($_POST['autre6']) && $_POST['autre6']==""){
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$context.= " : ";
					$othercontext = $_POST['autre6'];
					$context.= $othercontext;
					$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
					$res = mysql_query($requete);
					$ok6 = true;
				}
			}else{
				$requete = 'INSERT INTO emotion (emotion_name, user_id) VALUES("'.$context.'","' .$userid.'")';
				$res = mysql_query($requete);
				$ok6 = true;
			}
		}
}else{
	require("form1.php");
		echo "<script> alert('Vous devez sélectionner au moins une émotion pour le titre 6') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

if ($ok1 && $ok2 && $ok3 && $ok4 && $ok5 && $ok6){
	header("Location:form2.php");
}


?>