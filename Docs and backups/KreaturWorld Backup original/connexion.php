<!--
	connexion.php : Formulaire de connexion
	Author : Karakayn
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8" />
		<title>KreaturWorld - Connexion</title>
		<link rel="stylesheet" href="../world/css/Css_Page_FW.css"/>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lte IE 7]>
		<link rel="stylesheet" href="../css/Css_Page_FW_IE.css" />
		<![endif]-->
	</head>
	
	<body>
		<?php 
			require_once "header.php";
		?>

		<section>
			<article>
				<?php
				if(!isset($_POST['Envoyer1'])) {
				?>

					<form action="connexion.php" method="post">
						Pseudo: <input type="text" name="pseudo"/>
						<br/><br/>
						Mot de passe: <input type="password" name="mdp"/>
						<br/><br/>
						<input type="submit" name="Envoyer1" value="Connexion" />
					</form>

				<?php
				}
					if (isset($_POST['Envoyer1'])) {
						// Hachage du mot de passe
						$pass_hache = sha1(htmlspecialchars($_POST['mdp']));

						require_once "config.php";
						require_once "JoueurManager.class.php";

						//Création du manager
						$joueurmanager = new JoueurManager($db);

						$resultat = $joueurmanager->verifConnexion(htmlspecialchars($_POST['pseudo']), $pass_hache);

						if ($resultat['id'] == NULL) 
						{
						    echo 'Mauvais identifiant ou mot de passe !';
						}
						else
						{
						    //session_start() au debut du fichier;
						    $_SESSION['id'] = $resultat['id'];
						    $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
						    echo 'Vous êtes connecté !';
						}
					}
					
				?>
			</article>
		</section>
	</body>
</html>