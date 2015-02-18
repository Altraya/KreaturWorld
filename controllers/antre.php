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
			
			//else displays players' kreaturs
			require_once('./private/config.php');
			//echo"conf ok";
			require_once('./models/KreaturManager.class.php');
			//echo"KM ok";
			require_once('./models/Player.class.php');
			//echo"P ok";
			//echo"*************<br/>";
			require_once('./views/KreaturView.class.php');
			//echo"KV ok";
			require_once('./models/PlayerManager.class.php');
			//echo"PM ok";

			$manager = new KreaturManager($db);
			//echo"<br/> KM create ok";

			$viewK = new KreaturView();
			//echo"KV create ok";

			$playerManager = new PlayerManager($db);
			//echo"PM create ok";

			//Allow you to recover the player with the right nickname to display his Kreaturs'
			//$player = $playerManager->getPlayer($_SESSION['pseudo']);

			//affiche les dragons du joueur
			//$viewK->displayKreatur($manager->getListKreatur($player));
		/*}*/
			
		$viewG->endParagraph();

	$viewG->endSection();

	$viewG->footer();

	$viewG->endPage();

?>