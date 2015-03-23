<?php
	/* Cemetery controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/CemeteryView.class.php");

	$view = new GeneralView();
	$CemeteryView = new CemeteryView();

	$view->header("KreaturWorld - Cimetière");
		$view->topBar();
		$CemeteryView->intro();
		$CemeteryView->noKreatur();
	$view->endPage();
?>