<?php

if (!isset($_SESSION['login'])) {
	header ('Location: index.php?page=connexion');
	exit();
}
?>
<div id="contenu">
<h3 class="jj">Modification des menus</h3>

<?php
	// fichier : forms/information.form.modifier.php //
	

				//connexion à la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$jour=$_SESSION['id'];
				$sql = "SELECT * FROM rep WHERE jour=".$jour.";";
				$resultat = mysql_query($sql);
				// Récupération et affichage des données

				while($ligne=mysql_fetch_array($resultat, MYSQL_ASSOC))
				{
				
?>

	<form action="pages/actions/rep.action.modifier.php" method="get">
		<p><input type="hidden" name="jour" value="<?php echo $ligne['jour'];?>" /></p>
		<fieldset>
				<legend><i>Les champs signalés par <span class="rouge"> * </span>sont obligatoires</i></legend>
				<p><label class="rouge">
					* <span class="obligatoire">Entrée : </span>
					<input class="validate[required]" type="text" name="entree" id="entree" value="<?php echo $ligne['entree'];?>" style="color:black;"/>
				</label></p>
				<p></p>
				<p><label class="rouge">
					* <span class="obligatoire">Plat : </span>
					<input class="validate[required]" type="text" name="plat" id="plat" value="<?php echo $ligne['plat'];?>"  style="color:black;"/>
				</label></p>
				<p><label class="rouge">
					* <span class="obligatoire">Dessert : </span>
					<input class="validate[required]" type="text" name="dessert" id="dessert" value="<?php echo $ligne['dessert'];?>" style="color:black;"/>
				</label></p>
				

</fieldset>
		<p><input type="submit"  value="Modifier" class="choosedate" /></p>

<?php
				}
?>

	</form>

</div>