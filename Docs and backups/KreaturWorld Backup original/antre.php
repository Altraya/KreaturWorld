<!--
	KreaturList.php : Controleur principal du parc a Kreatur.
	Permet de lister les kreaturs.
	Author : Karakayn
-->
<?php
	session_start();

	require_once('VueGeneral.class.php');
	require_once('VueAntre.class.php');

	$vueG = new VueGeneral();
	$vue = new VueAntre();

	$vueG->debutPage();

		$vueG->debutPageSectionArticle();
		$vueG->debutParagraphe();
			
			//si le joueur n'est pas connecté on lui affiche un petit message
			if($_SESSION['id'] == NULL){
				$vue->messageNonConnecte();
			}else{
				$vue->corpsAntre();
				//Sinon on affiche les dragons du joueur
				require_once('config.php');
				require_once('KreaturManager.class.php');
				require_once('VueKreatur.class.php');
				require_once('JoueurManager.class.php');
				require_once('Joueur.class.php');

				//Création du manager
				$manager = new KreaturManager($db);

				//Création de la vue
				$vue = new VueKreatur();

				//Creation du manager du joueur
				$joueurManager = new JoueurManager($db);


				//Permet de recuperer le joueur avec le bon pseudo pour afficher ses dragons.
				$joueur = $joueurManager->getJoueur($_SESSION['pseudo']);

				//affiche les dragons du joueur
				$vue->afficherKreatur($manager->getListKreatur($joueur));
			}
			
		$vueG->finParagraphe();

	$vueG->finPageSectionArticle();

	$vueG->footer();

	$vueG->finPage();

?>