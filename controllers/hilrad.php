<?php
	/* Hilrad marche controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/HilradView.class.php");

	$view = new GeneralView();
	$HilradView = new HilradView();

	$view->header("KreaturWorld - Marché d'Hilrad");
		$view->topBar();

		$HilradView->intro();
		$HilradView->noArticles();

	$view->endPage();
?>