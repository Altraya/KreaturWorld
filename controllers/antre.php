<?php
	/*
		antre.php : Kreatur parc's controller
		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/AntreView.class.php');

	$viewG = new GeneralView();
	$view = new AntreView();
	
	$viewG->header("KreaturWorld - Antre de vos Kréaturs");
	$viewG->topBar();

		//if the player is not connected -> error message
		//if($_SESSION['playersId'] == NULL){
		if(!isset($_SESSION['playersId'])){
			$viewG->notConnected();

			echo("KEK EKEKEKEKEKEKKEK");
		}else{
			$view->welcome();
			
			//else displays players' kreaturs
			require_once('./private/config.php');
			require_once('./models/KreaturManager.class.php');
			require_once('./models/Player.class.php');
			require_once('./views/KreaturView.class.php');
			require_once('./models/PlayerManager.class.php');
			
			$manager = new KreaturManager($db);

			$viewK = new KreaturView();

			$playerManager = new PlayerManager($db);


			//Allow you to recover the player with the right nickname to display his Kreaturs'
			$player = $playerManager->getPlayer($_SESSION['playersName']);

			//affiche les dragons du joueur
			$viewK->displayKreatur($manager->getListKreatur($player));
		}


	$viewG->endPage();

?>