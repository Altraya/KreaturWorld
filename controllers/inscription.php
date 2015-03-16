<?php
	/*
		inscription.php : Inscriptions controller

		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/InscriptionView.class.php');

	$viewG = new GeneralView();
	$view = new InscriptionView();
	
	$viewG->header("KreaturWorld - Inscription");
	$viewG->topBar();

	//if the button of the form is not set
	if(!isset($_POST['buttonInscription'])){
		$view->title();
		//show form for adding quest
		$view->inscriptionForm();
	}else{

		require_once("./private/config.php");
		require_once("./models/Player.class.php");
		require_once("./models/PlayerManager.class.php");

		$playerManager = new PlayerManager($db);

		$infoForm = array();

		//formatting data
		$infoForm["pseudo"] = htmlspecialchars($_POST['pseudo']);
		$infoForm["pwd"] = htmlspecialchars($_POST['password']);	
		$infoForm["birthdate"] = Date("d/m/Y", strtotime(htmlspecialchars($_POST['date']))); //convert date to dd/mm/YYYY
		$infoForm["mail"] = htmlspecialchars($_POST['mail']);
		$infoForm["sex"] = htmlspecialchars($_POST['sexe']);

		//add the inscription date to the table
		$infoForm["inscriptionDate"] = Date("d/m/Y"); //the current date dd/mm/yyyy
		
		//Create a new player with information on form
		$newPlayer = new Player($infoForm);

		$verifPlayer = $playerManager->getPlayer($infoForm['pseudo']);
		$playerIdExist = (int) $verifPlayer->getId(); 

		//search if the player exist with this pseudo
		if($playerIdExist == 0){
			
			//Add the player to the database
			$playerManager->add($newPlayer);
			//Confirmation message
			$view->successMessage();
		
			//table who countain informations about player
			$infoPlayer = array();

			//verif if the player exist and return his id (+pseudo and pass)
			$infoPlayer = $playerManager->verifConnexion($infoForm["pseudo"], $infoForm["pwd"]);

			//if the player exist : create the session variable
			if($infoPlayer != NULL){
				$_SESSION['playersId'] = $infoPlayer['id'];
				$_SESSION['playersName'] = $infoPlayer['pseudo'];
			}else{
				$view->errorMessage();
			}
		}else{
			$view->errorMessageDuplicatePlayer();
		}
	}

	$viewG->endPage();

?>