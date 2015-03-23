<?php
	/*
		action.php : controller of actions execute by Kreaturs
		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/ActionView.class.php');

	$view = new GeneralView();
	$ActionView = new ActionView();

		$view->header("KreaturWorld - Actions");
		$view->topBar();

		//if the player is not connected -> error message
		//if($_SESSION['playersId'] == NULL){
		if(!isset($_SESSION['playersId'])){
			$view->notConnected();
		}else{
			$ActionView->intro();
			
			//else displays players' kreaturs
			require_once('./private/config.php');
			require_once('./models/KreaturManager.class.php');
			require_once('./models/Player.class.php');
			require_once('./views/KreaturView.class.php');
			require_once('./models/PlayerManager.class.php');

			$manager = new KreaturManager($db);

			$KreaturView = new KreaturView();

			$playerManager = new PlayerManager($db);

			//Allow you to recover the player with the right nickname to display his Kreaturs'
			$player = $playerManager->getPlayer($_SESSION['playersName']);

			//affiche les dragons du joueur
			$KreaturView->kreaturOnTable($manager->getListKreatur($player));
		}
		
	$view->endPage();

?>