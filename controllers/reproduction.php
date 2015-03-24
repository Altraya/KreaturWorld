<?php
	/*
		reproduction.php : controller of reproduction actions
		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	require_once('./views/ReproductionView.class.php');

	$view = new GeneralView();
	$ReproductionView = new ReproductionView();

		$view->header("KreaturWorld - Reproduction");
		$view->topBar();

		//if the player is not connected -> error message
		//if($_SESSION['playersId'] == NULL){
		if(!isset($_SESSION['playersId'])){
			$view->notConnected();
		}else{
			$ReproductionView->intro();
			
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
			$KreaturView->kreaturForReproduction($manager->getListKreatur($player));
		
			if(isset($_POST['buttonAccouplement']))
			{
				//open div for class row and class large-12 columns
				$view->openRowMax();

				//take informations about the couple => we get it with id
    			foreach($_POST['kreatur'] as $krea){
    				$couple[] = $manager->getKreaturById($krea);
    			}

    			//separe each specimen
    			$krea1 = $couple[0][0]; //acces to the first kreatur
    			$krea2 = $couple[1][0]; //acces to the second kreatur

    			//CHECK age
    			//check if they have age to reproduce => 250 years
    			$ageKrea1 = $krea1->getAge();
    			$ageeKrea2 = $krea2->getAge();

    			if($ageKrea1 >= 250 && $ageeKrea2 >= 250)
    			{
	    			//CHECK sex
	    			//if the sex of the two participant is different : we need a baby / homosexuality is not acceptable here.
	    			$sexKrea1 = $krea1->getSex();
	    			$sexKrea2 = $krea2->getSex();
	    			//sexKrea1 != sexKrea2 dont work
	    			if(($sexKrea1 == 'Femelle' && $sexKrea2 == 'Male') || $sexKrea1 == 'Male' && $sexKrea2 == 'Femelle'/*strcasecmp($sexKrea1, $sexKrea2)*//*$sexKrea1 =! $sexKrea2*/)
	    			{	
	    				$speciesKrea1 = $krea1->getSpecies();
	    				$speciesKrea2 = $krea2->getSpecies();
	    				//CHECK species
		    			//if the species of the two specimen match
		    			if($speciesKrea1 == $speciesKrea2)
		    			{
		    				//verif species ok
		    				//check the color for giving a color to the baby
		    				$babyColor = checkColor($krea1, $krea2);

		    				//populate table with baby informations to create a new kreatur after
							$baby['name'] = 'Wall-e'; //all the same name for baby
							$baby['species'] = $krea1->getSpecies(); //take the species of his parent
							$baby['color'] = $babyColor;
							$baby['age'] = 0;
							$baby['owner'] = $_SESSION['playersName']; //current player id
							//1/2 chance to have a femelle or a male
							$rand = rand(0,100);
							if($rand <= 50)
								$baby['sex'] = 'Femelle';
							else
								$baby['sex'] = 'Male';

							//Create a new kreatur object
							$babyKreatur = new Kreatur($baby);

							//add the new kreatur on database
							$manager->add($babyKreatur, $_SESSION['playersId']);

							//display a success message
							$ReproductionView->babyWasBorn($babyKreatur);
		    				
		    			}else{
		    				//error message : Can't do Hybrid : need to have 2 specimen of the same species
		    				$ReproductionView->errorNotSameSpecies();
		    			}
		    		}else{
		    			$ReproductionView->errorSameSex();
		    		}
		    	}else{
		    		$ReproductionView->errorAge();
		    	}

	    		$view->closeDiv(); //close the large column div
	    		$view->closeDiv(); //close the row div
			}
		}
		
	$view->endPage();

	//check the color of the parent and return the color of the baby
	//color could be : rouge,bleu,cyan,jaune,,rose,violet,vert
	function checkColor($krea1, $krea2)
	{
		if ($krea1->getColor() == 'Rouge') 
		{
			if($krea2->getColor() == 'Rouge')
			{
				//parents are in the same color : red so baby will be red
				$babyColor = 'Rouge';
			}

			if ($krea2->getColor() == 'Bleu') {
				//red + blue = purple
				$babyColor = 'Violet';
			}

			if ($krea2->getColor() == 'Cyan') {
				//red + cyan = purple
				$babyColor = 'Violet';
			}

			if ($krea2->getColor() == 'Jaune') {
				//red + yellow = orange but we dont have this so, just a rand 50/50
				$rand = rand(0,100); //random between 0 and 100
				if($rand <= 50)
					$babyColor = 'Rouge';
				else
					$babyColor = 'Jaune';
			}

			if($krea2->getColor() == 'Rose')
			{
				//red + pink = don't know but we dont have this so, just a rand 80/100 // 20/100 cause pink is rare
				$rand = rand(0,100); //random between 0 and 100
				if($rand <= 20)
					$babyColor = 'Rose';
				else
					$babyColor = 'Rouge';
			}

			if($krea2->getColor() == 'Rose')
			{
				//red + purple = don't know but we dont have this so, just a rand 80/100 // 20/100 cause purple is rare
				$rand = rand(0,100); //random between 0 and 100
				if($rand <= 20)
					$babyColor = 'Violet';
				else
					$babyColor = 'Rouge';
			}

			if ($krea2->getColor() == 'Vert') {
				//red + green = Satan = dont match so the kreatur will be always red
				$babyColor = 'Rouge';
			}

		}else{
			//DEBUG PONEY TODO : don't have time to fill all the color > other kreaturs will be red. stfu
			$babyColor = 'Rouge';
		}

		return $babyColor;
	}
?>
