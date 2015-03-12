<?php
	/*
		action.php : controller of actions execute by Kreaturs
		Author : Karakayn
	*/

	require_once('./views/GeneralView.class.php');
	//require_once('./views/ActionView.class.php');

	$viewG = new GeneralView();
	//$view = new AntreView();
	
	$viewG->header("KreaturWorld -  Actions");
	$viewG->topBar();
	$viewG->menuBar();

	$viewG->section();
			
		//if the player is not connected -> error message
		if($_SESSION['playersId'] == NULL){
			$viewG->notConnected();
		}else{
			//$view->welcome();
			
	
		}
			
		$viewG->endParagraph();

	$viewG->endSection();

	$viewG->endPage();

?>