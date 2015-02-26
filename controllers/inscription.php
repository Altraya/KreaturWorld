<?php
	/*
		inscription.php : Inscriptions controller

		Author : Karakayn
	*/

	session_start();

	require_once('./views/GeneralView.class.php');
	require_once('./views/InscriptionView.class.php');

	$viewG = new GeneralView();
	$view = new InscriptionView();
	
	$viewG->header("KreaturWorld - Inscription");
	$viewG->topBar();
	$viewG->menuBar();

		$view->title();
		$view->inscriptionForm();

	$viewG->footer();

	$viewG->endPage();

?>