<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  
</head>

<body>
<header>
	<div id = "loginUser">
	<?php
	if (session_status() == PHP_SESSION_NONE || session_id()== ""){
		session_start();
		echo $_SESSION['login'];
	}

	
	?>
	</div>
</header>

	<div id = "player">
      <?php
        include 'player.php';
        genplaylist();
      ?>
  </div>
</br></br></br></br></br></br></br></br></br></br></br>
    <div id = "question">
      <?php
        include 'form/form1.php';

		?>


       <script>
       	var btn = document.getElementById("player_button");
       	btn.addEventListener('click', function(){
       		document.location.href = '<?php echo $location ?>';
       	});
       </script>

     
    </div>
      
        <script src="jquery.js"></script>
        <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
        <script src="script.js"></script> 
</body>
</html>
