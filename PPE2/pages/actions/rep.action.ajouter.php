<?php 
				$jour=addslashes($_GET['jour']);
				$entree=addslashes($_GET['entree']);
				$plat=addslashes($_GET['plat']);//Permet d'ajouter "L'astronomie"
				$dessert=addslashes($_GET['dessert']);
				//connexion à la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$sql = "INSERT INTO rep VALUES('".$jour."','".$entree."','".$plat."','".$dessert."');";
				$resultat = mysql_query($sql);
				
				
				// Affichage des données
				header("Location: ../../index.php?page=connect"); //Attention les fichiers d'action se trouvent dans "pages/actions" 
?>