<?php 
				$jour=($_GET['id']);
				// Connexion � la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$sql = "DELETE FROM rep WHERE jour=".$jour." ;";
				// Ex�cution de la requ�te
				$resultat = mysql_query($sql);
				
				
				
				// R�cup�ration et affichage des donn�es
				header("Location: ../../index.php?page=connect");
?>