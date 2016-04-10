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
		</div>
		<div class = "question">
			<form action="resform1.php" method="post">
			<b> 1. Pour chacun des titres écoutés, quelle(s) émotion(s) avez-vous ressentie(s) ? </b><br/>
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
		       <td style="text-align:left">Colère</td>
		       <td> <input type="checkbox" name="etitre1[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre2[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre3[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre4[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre5[]" value="colère" /> </td>
		       <td> <input type="checkbox" name="etitre6[]" value="colère" /> </td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Excitation</td>
		       <td><input type="checkbox" name="etitre1[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="excitation" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="excitation" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Calme/détente</td>
		       <td><input type="checkbox" name="etitre1[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="calme" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="calme" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Joie</td>
		       <td><input type="checkbox" name="etitre1[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="joie" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="joie" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Fatigue</td>
		       <td><input type="checkbox" name="etitre1[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="fatigue" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="fatigue" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Ennui</td>
		       <td><input type="checkbox" name="etitre1[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="ennui" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="ennui" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Tristesse</td>
		       <td><input type="checkbox" name="etitre1[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="tristesse" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="tristesse" /></td>
		   </tr>
		   <tr>
		       <td style="text-align:left">Indifférence</td>
		       <td><input type="checkbox" name="etitre1[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre2[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre3[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre4[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre5[]" value="indifference" /></td>
		       <td><input type="checkbox" name="etitre6[]" value="indifference" /></td>
		   </tr>
		    <tr>
		       <td style="text-align:left">Autre</td>
		       <td><br/><input type="checkbox" name="etitre1[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre1" id = "autre1" placeholder = "Autre émotion" style="text-align:center"/>
		   </td>
		       <td><br/><input type="checkbox" name="etitre2[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre2" id = "autre2" placeholder = "Autre émotion" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="etitre3[]" value="autre"/>
		       <br/>
		       <input type = "text" name = "autre3" id = "autre3" placeholder = "Autre émotion" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="etitre4[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre4" id = "autre4" placeholder = "Autre émotion" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="etitre5[]" value="autre" />
		       <br/>
		       <input type = "text" name = "autre5" id = "autre5" placeholder = "Autre émotion" style="text-align:center"/></td>
		       <td><br/><input type="checkbox" name="etitre6[]" value="autre"/>
		       <br/>
		       <input type = "text" name = "autre6" id = "autre6" placeholder = "Autre émotion" style="text-align:center"/></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant >" />
			</form>
		</div>
		<div> 
		</div>

</body>
</html>
