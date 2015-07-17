<?php
	/*
		connexion.php : connexion controller

		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/InscriptionView.class.php');

	$viewG = new GeneralView();
	$view = new InscriptionView();
	
	$viewG->header("KreaturWorld - Connexion");
	$viewG->topBar();

	//if the button of the form is not set
	if(!isset($_POST['buttonConnexion'])){
		$view->titleConnexion();
		//show form for adding quest
		$view->connexionForm();
	}else{

		require_once("./private/config.php");
		require_once("./models/PlayerManager.class.php");

		$playerManager = new PlayerManager($db);

		//formatting data
		$pseudo = htmlspecialchars(ucfirst($_POST['pseudo']));
		$password = sha1(htmlspecialchars($_POST['password']));	//crypt password

		//table who countain informations about player
		$infoPlayer = array();

		//verif if the player exist and return his id (+pseudo and pass)
		$infoPlayer = $playerManager->verifConnexion($pseudo, $password);

		//if the player exist : create the session variable
		if($infoPlayer !== NULL){
			$_SESSION['playersId'] = $infoPlayer['id'];
			$_SESSION['playersName'] = $infoPlayer['pseudo'];
		}else{
			$view->errorMessage();
		}
		header('Location: ./home.php'); 
	}

	$viewG->endPage();

?>