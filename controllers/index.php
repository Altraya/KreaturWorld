<?php
	/* General controller */

	require_once("./views/GeneralView.class.php");

	$view = new GeneralView();

	$view->header("KreaturWorld - Accueil");
		$view->topBar();
		$view->menuBar();
	$view->endPage();
?>