<?php

if (!isset($_SESSION['login'])) {
	header ('Location: index.php?page=connexion');
	exit();
}
?>
<div id="contenu">
<h3 class="jj">Ajouter un menu</h3>

<?php
	// fichier : forms/information.form.ajouter.php //

?>

  <form action="pages/actions/rep.action.ajouter.php?" method="get">
 
<fieldset>
				<legend><i>Les champs signalés par <span class = "rouge">* </span>sont obligatoires<i></legend>
				<p><label>
					* <span class="obligatoire">jour : </span>
					<input class="validate[required]" type="text" name="jour" id="jour" style="color:black;"/>
				</label></p>
				<p></p>
				<p><label>
					* <span class="obligatoire">entée : </span>
					<input class="validate[required]" type="text" name="entree" id="entree" style="color:black;"/>
				</label></p>
				<p></p>
				<label>
					* <span class="obligatoire">plat : </span>
					<input class="validate[required]" type="text" name="plat" id="plat" style="color:black;"/>
				</label></p>
				<p></p>
				<p><label>
					* <span class="obligatoire">dessert : </span>
					<input class="validate[required]" type="text" name="dessert" id="dessert" style="color:black;"/>
				</label></p>

</fieldset>
	<p><input type="submit"  value="Ajouter" style="color:black;"/></p>



</form>

</div>