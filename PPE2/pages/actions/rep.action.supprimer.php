<?php 
				$jour=($_GET['id']);
				// Connexion à la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$sql = "DELETE FROM rep WHERE jour=".$jour." ;";
				// Exécution de la requête
				$resultat = mysql_query($sql);
				
				
				
				// Récupération et affichage des données
				header("Location: ../../index.php?page=connect");
?>