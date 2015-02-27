<?php
	/*
		deconnexion.php : deconnexion controller

		Author : Karakayn
	*/

	session_start();

	require_once('./views/GeneralView.class.php');
	require_once('./views/InscriptionView.class.php');

	$viewG = new GeneralView();
	$view = new InscriptionView();
	
	$viewG->header("KreaturWorld - Deconnexion");
	$viewG->topBar();
	$viewG->menuBar();

		//destroy session variable => deconnexion
		$_SESSION = array();
		session_destroy();

		$view->successDeconnexion();

	$viewG->endPage();

?>