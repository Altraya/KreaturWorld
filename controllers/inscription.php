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

	//if the first part of inscription form is not complete
	if(!isset($_POST['Inscription']) && !isset($_POST['buttonInscription']))
	{
		$view->errorChooseYourKreatur();
	   	header ("Refresh: 5;URL=index.php");
	}else{
		if(isset($_POST['Inscription'])){
			$infosKrea = array();
			$infosKrea["name"] = $_POST["fNomKrea"];
			$infosKrea["species"] = $_POST["kreaturSpecies"];
			$infosKrea["color"] = $_POST["color"];
			$infosKrea["age"] = 250;
			$infosKrea["sex"] = $_POST["sex"];
			//recup informations about kreatur
			$_SESSION["infosKrea"] = $infosKrea;
		}

		//if the button of the form is not set
		if(!isset($_POST['buttonInscription'])){
			$view->title();
			//show form for adding quest
			$view->inscriptionForm();
		
		//check if all informations about kreaturs are ok
		//recup all informations about the kreatur and go to the second inscription form
		}else{

			//continue the inscription with the player part
			$viewG->topBar();
			
			require_once("./private/config.php");
			require_once("./models/Player.class.php");
			require_once("./models/PlayerManager.class.php");
			require_once("./models/Kreatur.class.php");
			require_once("./models/KreaturManager.class.php");

			$playerManager = new PlayerManager($db);
			$kreaturManager = new KreaturManager($db);

			$infoForm = array();

			//formatting data
			$infoForm["pseudo"] = htmlspecialchars(ucfirst($_POST['pseudo'])); //all pseudo need to have the first letter in uppercase
			$infoForm["pwd"] = htmlspecialchars($_POST['password']);	
			$infoForm["birthdate"] = Date("d/m/Y", strtotime(htmlspecialchars($_POST['date']))); //convert date to dd/mm/YYYY
			$infoForm["mail"] = htmlspecialchars($_POST['mail']);
			$infoForm["sex"] = htmlspecialchars($_POST['sexe']);

			//add the inscription date to the table
			$infoForm["inscriptionDate"] = date("Y-m-d"); //the current date
			
			//Create a new player with information on form
			$newPlayer = new Player($infoForm);

			//search if the player exist with this pseudo
			$verifPlayer = $playerManager->getPlayer($infoForm['pseudo']);
			
			//if the player doesn't exist in DB
			if($verifPlayer == null){
				if(isset($_SESSION["infosKrea"])){

					//Add the player to the database
					$playerManager->add($newPlayer);

					//recup the player id
					$currentPlayer = $playerManager->getPlayer($infoForm["pseudo"]);
					//add the owner to the table to construc the kreatur
					$temp = $_SESSION["infosKrea"];
					$temp["owner"] = $currentPlayer->getId();
					$_SESSION["infosKrea"] = $temp;

					$kreatur = new Kreatur($_SESSION["infosKrea"]);

					$kreaturManager->add($kreatur, $currentPlayer->getId());
					//Confirmation message
					$view->successMessage();
				
					//table who countain informations about player
					$infoPlayer = array();


					//verif if the player exist and return his id (+pseudo and pass)
					$infoPlayer = $playerManager->verifConnexion($infoForm["pseudo"], $infoForm["pwd"]);

					//if the player exist : create the session variable
					if($infoPlayer !== NULL){
						$_SESSION['playersId'] = $infoPlayer['id'];
						$_SESSION['playersName'] = $infoPlayer['pseudo'];
					}else{
						$view->errorMessage();
					}
				}else{
					$view->errorChooseYourKreatur();
				}
			}else{
				$view->errorMessageDuplicatePlayer();
			}
			
		}

		
	}
	

	$viewG->endPage();

?>