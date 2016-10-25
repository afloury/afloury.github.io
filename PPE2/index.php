<?php
	session_start();
	$page="index.inc";
?>
<!doctype html>
<html lang="fr">
<meta charset="iso-8859-15"></meta>

<title>GrungeSet- subpage</title>

<!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />

<!--[if lt IE 7]>
<style type="text/css">
	.gallery span { behavior: url(iepngfix.htc); cursor: pointer; }
	.gallery li { background: url(images/drop-shadow.gif) no-repeat center bottom; }
</style>
<![endif]-->


<body>

	<!--start header-->
	<?php include("include/navigation.inc.php");?>
		<div id="hk" ><?php include("include/right.php");?></div><ul class="tk"><img src="images/repas.jpg" />
		<a href="index.php?page=menus" >Menus des semaines</a></ul>
		<?php 
		
		echo '<div id="centre">';
		
		if(!isset($_GET["page"]))
{
      include "include/index.inc.php"; // page d’accueil : inclusion de la div contenu
}
// si la page est définie, alors, on l'inclut !
else
{
       // on vérifie que le nom du fichier contenu dans la variable $_GET["page"] existe
      if(file_exists("pages/".$_GET["page"].".php"))
      {
     		
			if(isset($_GET['id']))
			{
				$_SESSION['id']=$_GET['id']; //Si un paramètre id existe on stocke sa valeur dans une variable de session
			}
			else
			{
				//unset($_SESSION['id']);
			}
			include "pages/".$_GET["page"].".php";//inclusion de la div contenu dynamique
      }
     // La page demandée est introuvable, le serveur renvoie 404
     else
    {

		include "include/error.inc.php";
            
     }
}
echo '	</div><!-- #centre -->';  //on ferme la div centre
?>

	

	<!--start footer-->
	
	<!--end footer-->
	<!-- Free template distributed by http://freehtml5templates.com -->
</body>
</html>
