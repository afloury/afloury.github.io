<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

	$base = mysql_connect ('localhost', 'root', '');
	mysql_select_db ('rep', $base);

	// on teste si une entrée de la base contient ce couple login / pass
	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	// si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: index.php?page=connect');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Connexion</title>

<!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<link rel="stylesheet" type="text/css" href="css/styles.css" />

<!--[if lt IE 7]>
<style type="text/css">
	.gallery span { behavior: url(iepngfix.htc); cursor: pointer; }
	.gallery li { background: url(images/drop-shadow.gif) no-repeat center bottom; }
</style>
<![endif]-->
</head>

<body>
	<!--start header-->


	<div id="container">
		<section id="main">
			<!-- #main content and sidebar area -->

			<aside id="sidebar1">
				<!-- sidebar1 -->

				<br> <br> <br> <img src="images/az.jpg" alt="" /><br />
				<img src="images/az1.jpg" alt="" /><br /> <br />
			</aside>
			<!-- end of sidebar1 -->

			<section id="content">
				<!-- #content -->
				<article>

				
				
<div id="inscription">
    
    
    
    
   <fieldset>Connexion</fieldset>
<form action="index.php?page=connexion" method="post">
Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" id="pseudo" class="black" ><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>" id="pass" class="black" ><br />
<input type="submit" name="connexion" value="Connexion" id="valider" class="black" >
</form>
<a href="index.php?page=inscriptionReservation" class="black">Vous inscrire</a>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</div>





				</article>
			</section>
			<ul>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
			<h3 class="fontface"></h3>
			<br>
					</section>
	</div>
</body>

</html>