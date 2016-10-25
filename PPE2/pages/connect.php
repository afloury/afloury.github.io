<?php

if (!isset($_SESSION['login'])) {
	header ('Location: index.php?page=connexion');
	exit();
}
?>

<div id="contenu">
			</br>
			<h3 class="jj">Modification des menus</h3>
			
			<td>Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> </td><br />
			</tr>
            <tr >    
        
        <td><a href="index.php?page=reservationdDconnexion">Déconnexion</a> </td>
		
		
			<table border="1">
				<tr><!--<th>ID</th>--><th>Jour</th><th>entrée</th><th>plat</th><th>dessert</th><th>Supprimer</th><th>Modifier</th></tr>
	
			<?php 
				//connexion à la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$sql = "SELECT * FROM rep ;";
				$resultat = mysql_query($sql);
				// Récupération et affichage des données

				while($ligne=mysql_fetch_array($resultat, MYSQL_ASSOC))
				{
					//echo('<tr><td>'.$ligne['id'].'</td>');
					echo('<td>'.stripslashes ($ligne['jour']).'</td>');
					echo('<td>'.stripslashes ($ligne['entree']).'</td>');
					echo('<td>'.stripslashes ($ligne['plat']).'</td>');
					echo('<td>'.stripslashes ($ligne['dessert']).'</td>');
					echo('<td><a href="pages/actions/rep.action.supprimer.php?id='.$ligne['jour'].'">Supprimer</a></td>');
					echo('<td><a href="index.php?page=forms/rep.form.modifier&id='.$ligne['jour'].'">Modifier</a></td></tr>');
		
				}

			?>
			</table>
			<p><a href="index.php?page=forms/rep.form.ajouter">Ajouter une information</a></p>
			
	
	
		</div><!-- #contenu -->