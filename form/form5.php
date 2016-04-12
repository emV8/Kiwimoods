<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css.css" />
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

<div>
			<?php
        include '../player.php';
        genplaylist();
      ?>
		<div class = "question">
			<form action="resform5.php" method="post">
			<b> 5. Connaissiez-vous chacun de ces titres avant cette écoute ? </b><br/>
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
		       <td> Oui </td>
		       <td> <input type='radio' name="connaissancetitre1" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre2" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre3" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre4" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre5" value="oui" /> </td>
		       <td> <input type='radio' name="connaissancetitre6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td> Non</td>
		       <td><input type="radio" name="connaissancetitre1" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre2" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre3" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre4" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre5" value="non" /></td>
		       <td><input type="radio" name="connaissancetitre6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<br/>
			<b> 6. Connaissiez-vous l'artiste de chacun de ces titres avant cette écoute ? </b><br/>
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
		       <td> Oui </td>
		       <td> <input type='radio' name="connaissanceartiste1" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste2" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste3" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste4" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste5" value="oui" /> </td>
		       <td> <input type='radio' name="connaissanceartiste6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td> Non</td>
		       <td><input type="radio" name="connaissanceartiste1" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste2" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste3" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste4" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste5" value="non" /></td>
		       <td><input type="radio" name="connaissanceartiste6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			<br/>
			<progress max="10" value = "5"></progress>
			<br/>
			</form>
		</div>
		

</body>
</html>
