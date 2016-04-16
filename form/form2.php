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
			<form action = "resform2.php"  method="post">
			<b> 2. Dans le cadre de cette expérience, dans quel(s) contexte(s) avez-vous écouté chacun de ces titres ? </b><br/>
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
		       <td style="text-align:left">Dans les transports en commun</td>
		       <td> <input type="checkbox" name="ctitre1[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre2[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre3[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre4[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre5[]" value="transport" /> </td>
		       <td> <input type="checkbox" name="ctitre6[]" value="transport" /> </td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En conduisant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="conduite" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="conduite" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En travaillant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="travail" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="travail" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En révisant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="révision" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="révision" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En lisant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="lecture" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="lecture" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En surfant sur le web</td>
		       <td><input type="checkbox" name="ctitre1[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="web" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="web" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En jouant</td>
		       <td><input type="checkbox" name="ctitre1[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="jeu" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="jeu" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">En faisant du sport</td>
		       <td><input type="checkbox" name="ctitre1[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="sport" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="sport" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Seul</td>
		       <td><input type="checkbox" name="ctitre1[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="seul" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="seul" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Avec des amis</td>
		       <td><input type="checkbox" name="ctitre1[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="amis" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="amis" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Avec son compagnon/sa compagne</td>
		       <td><input type="checkbox" name="ctitre1[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="compagnon" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="sport" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Avec sa famille</td>
		       <td><input type="checkbox" name="ctitre1[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre2[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre3[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre4[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre5[]" value="famille" /></td>
		       <td><input type="checkbox" name="ctitre6[]" value="famille" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Autre
		       	<a href="#" class="test">[?]
						<div class="raised">
						<b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>
						<div class="boxcontent">
						 
						<b> Exemple d'autres contextes possibles : </b>
						<p>
						 
						En faisant la vaisselle - En faisant le ménage ... <br />
						Sous la douche - Dans le lit ... <br />
						Avant de s'endormir - Après le repas ... <br />
						... <br/>
						</p>
						</div>
						<b class="bottom"><b class="b4b"></b><b class="b3b"></b><b class="b2b"></b><b class="b1b"></b></b>
						</div>
					</a>
		       </td>
		       <td> <br/> <input type="checkbox" name="ctitre1[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre1" id = "autre1" placeholder = "Autre contexte" style="text-align:center"/>
		   </td>
		       <td><br/><input type="checkbox" name="ctitre2[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre2" id = "autre2" placeholder = "Autre contexte" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="ctitre3[]" value="autre"/>
		       <br/>
		       <input type = "text" name = "autre3" id = "autre3" placeholder = "Autre contexte" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="ctitre4[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre4" id = "autre4" placeholder = "Autre contexte" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="ctitre5[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre5" id = "autre5" placeholder = "Autre contexte" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="ctitre6[]" value="autre"/>
		       <br/>
		       <input type = "text" name = "autre6" id = "autre6" placeholder = "Autre contexte" style="text-align:center"/></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" id="contextbutton" value="Suivant >" />
			<br/> <br/>
			<progress max="10" value = "2"></progress>
			<br/>
			</form>
		</div>

</body>
</html>
