<?php
	/* Home controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/HomeView.class.php");

	$view = new GeneralView();
	$HomeView = new HomeView();

	$view->header("KreaturWorld - Accueil");
		$view->topBar();

		$HomeView->intro();
	$view->endPage();
?>