
			<form action="resform3.php" method="post" onsubmit="return false">
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
		       <td> Oui </td>
		       <td> <input type='radio' name="gouttitre1" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre2" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre3" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre4" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre5" value="oui" /> </td>
		       <td> <input type='radio' name="gouttitre6" value="oui" /> </td>
		   
		   </tr>
		   
		   <tr>
		       <td> Non</td>
		       <td><input type="radio" name="gouttitre1" value="non" /></td>
		       <td><input type="radio" name="gouttitre2" value="non" /></td>
		       <td><input type="radio" name="gouttitre3" value="non" /></td>
		       <td><input type="radio" name="gouttitre4" value="non" /></td>
		       <td><input type="radio" name="gouttitre5" value="non" /></td>
		       <td><input type="radio" name="gouttitre6" value="non" /></td>
		   </tr>
			</table>
			<br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/>
			<progress max="10" value = "3"></progress>
			<br/>
			</form>

