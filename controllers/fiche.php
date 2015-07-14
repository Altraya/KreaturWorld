<?php
	/*
		fiche.php : Display of kreaturs information if the user is not the owner of the kreaturs, else display the managment screen
		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/FicheView.class.php');
	require_once('./private/config.php');
	require_once('./models/KreaturManager.class.php');
	require_once('./models/Kreatur.class.php');

	$viewG = new GeneralView();
	$manager = new KreaturManager($db);
	$view = new FicheView();

	$recup = $manager->getKreaturById(htmlspecialchars($_GET["kreatur"]));
	$kreatur = $recup[0];

	$kreaturName = $kreatur->getName();
	
	$viewG->header('Altraya - Fiche de '.$kreaturName);
	$viewG->topBar();

		//if the player is not connected -> error message
		//if($_SESSION['playersId'] == NULL){
		if(!isset($_SESSION['playersId'])){
			$viewG->notConnected();

		}else{
			$view->welcome($kreaturName);
			
			//else displays players' kreaturs
			require_once('./models/Player.class.php');
			require_once('./views/KreaturView.class.php');
			require_once('./models/PlayerManager.class.php');
			
			

			$viewK = new KreaturView();

			$playerManager = new PlayerManager($db);


			//Allow you to recover the player with the right nickname to display his Kreaturs'
			$player = $playerManager->getPlayer($_SESSION['playersName']);

			//if the player who want to see this information page is the owner we allow him to manage his kreatur
			if($player->getPseudo() === $kreatur->getOwner())
			{
				$viewK->displayFichePublic($kreatur);
			//else with simply display the kreatur's informations
			}else{
				//affiche les dragons du joueur
				$viewK->displayKreatur($manager->getListKreatur($player));
			}
			
		}


	$viewG->endPage();

?>