<!--
	deconnexion.php : Deconnexion manuelle du joueur
	Author : Karakayn
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8" />
		<title>KreaturWorld - Déconnexion</title>
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
					// Suppression des variables de session et de la session
					$_SESSION = array();
					session_destroy();

					// Suppression des cookies de connexion automatique
					setcookie('login', '');
					setcookie('pass_hache', '');
					echo"Vous êtes bien déconnecté, voyageur !";
				?>
			</article>
		</section>
	</body>
</html>