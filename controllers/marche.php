<?php
	/* Marché controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/MarcheView.class.php");

	$view = new GeneralView();
	$MarcheView = new MarcheView();

	$view->header("KreaturWorld - Marché");
		$view->topBar();
		$MarcheView->intro();

		$MarcheView->noArticles();
	$view->endPage();
?>