
<script src="script.js"></script>
<?php

$connexion = mysql_connect("localhost", "root");
$bdd = mysql_select_db("kiwimoods", $connexion);
mysql_query("SET NAMES 'utf8'");
session_start();
$userid = $_SESSION['userid'];


if(!empty($_POST['mood'])){
    ?>
    <SCRIPT language="javascript">
   function ouvre_popup(page) {
       window.open('form.php',"PLAYLIST","menubar=no, status=no, scrollbars=no, menubar=no, width=200, height=100");
   }
    </SCRIPT>
    <?php
			$mood = $_POST['mood'];
			if ($mood=="autre"){
				if (empty($_POST['otherMood']) && $_POST['otherMood']==""){
					require("mood.php");
					echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
					echo "<script> location.href = history.back(-1) </script>";
				}else{
					$mood.= " : ";
					$othermood = $_POST['othermood'];
					$mood.= $othermood;
					$requete = 'INSERT INTO listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
					$res = mysql_query($requete);
					header("Location: form1.php");
					exit;
				}
			}else{
				$requete = 'INSERT INTO listenmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
				$res = mysql_query($requete);
				header("Location: form.php");
				exit;
			}
}else{
		require("mood.php");
		echo "<script> alert('Merci de sélectionner une humeur') </script>";
		echo "<script> location.href = history.back(-1) </script>";
}

?>