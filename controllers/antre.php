<?php
	/*
		antre.php : Kreatur parc's controller
		Author : Karakayn
	*/

	session_start();

	require_once('./views/GeneralView.class.php');
	require_once('./views/AntreView.class.php');

	$viewG = new GeneralView();
	$view = new AntreView();
	
	$viewG->header("KreaturWorld - Accueil");
	$viewG->topBar();
	$viewG->menuBar();

	$viewG->section();
			
		//if the player is not connected -> error message
		/*if($_SESSION['id'] == NULL){
			$viewG->notConnected();
		}else{*/
			$view->welcome();
			
			//Sinon on affiche les dragons du joueur
			require_once('./private/config.php');
			require_once('./models/KreaturManager.class.php');
			require_once('./views/KreaturView.class.php');
			require_once('./models/PlayerManager.class.php');
			require_once('./models/Player.class.php');
/*
			//Création du manager
			$manager = new KreaturManager($db);

			//Création de la vue
			$vue = new VueKreatur();

			//Creation du manager du joueur
			$joueurManager = new JoueurManager($db);


			//Permet de recuperer le joueur avec le bon pseudo pour afficher ses dragons.
			$joueur = $joueurManager->getJoueur($_SESSION['pseudo']);

			//affiche les dragons du joueur
			$vue->afficherKreatur($manager->getListKreatur($joueur));*/
		/*}*/
			
		$viewG->endParagraph();

	$viewG->endSection();

	$viewG->footer();

	$viewG->endPage();

?>