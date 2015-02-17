<?php
	/* General controller */

	require_once("./views/generalView.class.php");

	$view = new generalView();

	$view->header("KreaturWorld - Accueil");
		$view->topBar();
		$view->menuBar();
	$view->closeBody();
	$view->closeHTML();
?>