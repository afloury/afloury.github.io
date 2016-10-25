<?php 
				$jour=addslashes($_GET['jour']);
				$entree=addslashes($_GET['entree']);
				$plat=addslashes($_GET['plat']); //Permet de modifier "L'astronomie"
				$dessert=addslashes($_GET['dessert']);
				
				//connexion à la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$sql = "UPDATE rep SET entree='".$entree."',plat='".$plat."',dessert='".$dessert."' WHERE jour=".$jour." ;";
				$resultat = mysql_query($sql);
				
				
				// Affichage des données
				header("Location: ../../index.php?page=connect");
?>