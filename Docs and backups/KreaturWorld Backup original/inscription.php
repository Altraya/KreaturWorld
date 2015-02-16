<!--
	inscription.php : Formulaire d'inscription
	Permet de s'inscrire et d'avoir sa première Kreatur
	Author : Karakayn
-->
<?php

	require_once('VueGeneral.class.php');
	require_once('VueInscription.class.php');
	$vueG = new VueGeneral();
	$vue = new VueInscription();

	$vueG->debutPage();
	$vueG->debutPageSectionArticle();

	$vue->afficherFormulaireInscriptionJoueur();

	//si on a pas encore repondu au 2eme formulaire, seulement au premier on cree notre joueur
	if (!isset($_POST['Envoyer2']) && isset($_POST['Envoyer1']) && $_POST['Envoyer1'] == 'Envoyer'){
		//Pour le premier formulaire, tous les champs ont un required, ce qui veut dire que la personne ne pourra pas valider le formulaire tant quelle n'aura pas valider tous  les champs.
		$verifFormulaireJoueur = false;
		if(!$verifFormulaireJoueur){
			if(!verifMail(htmlspecialchars($_POST['mail']))){
				$vue->afficherMailInvalide();
			}
			if(!verifMdp(htmlspecialchars($_POST['mdp']), htmlspecialchars($_POST['mdpVerif']))){
				$vue->afficherErreurMdpDifferent();
			}
		}else{
			require_once('config.php');
			require_once('Joueur.class.php');
			require_once('JoueurManager.class.php');
			echo"toto";
			$donneeDuJoueur = array(
								"pseudo" => $_POST['pseudo'], 
								"mdp" => $_POST['mdp'], 
								"mail" => $_POST['mail'], 
								"dateDeNaissance" => $_POST['dateDeNaissance'], 
								"sexe" => $_POST['sexe']);
			var_dump($donneeDuJoueur);
			//Création du joueur
			$joueur = new Joueur($donneeDuJoueur);
			var_dump($donneeDuJoueur);

			//Création du manager
			$Joueurmanager = new JoueurManager($db);

			//Add du joueur en bdd
			$Joueurmanager->add($joueur);
			$vue->afficherFelicitationInscriptionJoueur($joueur->getPseudo());

		}

	}

	if (($verifFormulaireJoueur) && (!isset($_POST['Envoyer2']))) {
		echo"jsuis dans l'avant formulaire 2 !";
		$vue->afficherFormulaireInscriptionKreaturDuJoueur();
		echo"Pourquoi? :'( ";
	}

	//si on a répondu aux deux formulaires
	if (isset($_POST['Envoyer2']) && $_POST['Envoyer2'] == 'Envoyer') {
		
		require_once('config.php');
		require_once('Kreatur.class.php');
		require_once('KreaturManager.class.php');

		//Création de la kreatur
		$kreatur = new Kreatur($_POST);

		//Création du manager
		$Kreaturmanager = new KreaturManager($db);

		$Kreaturmanager->add($kreatur);
		$vue->afficherFelicitationKreaturAdopte($kreatur->getNom());
	}

	$vueG->finPageSectionArticle();
	$vueG->finPage();

	//return true si le mail est valide
	function verifMail($mail){
		return filter_var($mail, FILTER_VALIDATE_EMAIL);
	}

	function verifMdp($mdp1, $mdp2){
		//verifie que les deux mdps sont identique ou non
		if($mdp1 == $mdp2){
			$verifFormulaireJoueur = true;
		}else{
			$verifFormulaireJoueur = false;
		}		
		return $verifFormulaireJoueur;
	}
?>