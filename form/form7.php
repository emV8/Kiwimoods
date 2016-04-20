
			<form action="form/resform7.php" method="post" onsubmit="return false">
			<b> 8. Si oui, vers quelle humeur a-t-elle changé ? </b><br/>
			<br/>
		       <input type='radio' name="newmoodplaylist" value="colère" /> Colère <br/>
		       <input type="radio" name="newmoodplaylist" value="excitation" /> Excitation <br/>
		       <input type="radio" name="newmoodplaylist" value="calme" /> Calme/détente <br/>
		       <input type="radio" name="newmoodplaylist" value="joie" /> Joie <br/>
		       <input type="radio" name="newmoodplaylist" value="peur" /> Peur <br/>
		       <input type="radio" name="newmoodplaylist" value="fatigue" /> Fatigue <br/>
		       <input type="radio" name="newmoodplaylist" value="ennui" /> Ennui <br/>
		       <input type="radio" name="newmoodplaylist" value="tristesse" /> Tristesse <br/>
		       <input type="radio" name="newmoodplaylist" value="autre" /> Autre <br/>
		       <input type = "text" name = "othermoodplaylist" id = "autre" placeholder = "Autre humeur" style="text-align:center"/> <br/>
			<input class = "suivant" type="submit" value="Suivant" onclick="loadForm(this)">
			<br/>
			<progress max="10" value = "7"></progress>
			<br/>
			</form>
