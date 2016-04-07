<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  <script src="script.js"></script>
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

		<div class = "question">
			<form action="resform3.php" method="post">
			<b> 3. Avez-vous apprécié ces titres ? </b><br/>
			<br/>
			<table>
   			<tr>
   				<th> </th>
		       <th>Titre 1</th>
		       <th>Titre 2</th>
		       <th>Titre 3</th>
		       <th>Titre 4</th>
		       <th>Titre 5</th>
		       <th>Titre 6</th>
		   </tr>

		   <tr>	   	
		       <td>  Oui </td>
		       <td> <input type='radio' name="gouttitre1" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre2" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre3" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre4" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre5" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td>Non</td>
		       <td><input type="radio" name="gouttitre1" value="non" /></td>
		       <td><input type="radio" name="gouttitre2" value="non" /></td>
		       <td><input type="radio" name="gouttitre3" value="non" /></td>
		       <td><input type="radio" name="gouttitre4" value="non" /></td>
		       <td><input type="radio" name="gouttitre5" value="non" /></td>
		       <td><input type="radio" name="gouttitre6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			</form>
            <?php
        include 'player.php';
        genplaylist();
      ?>
		</div>

</body>
</html>
