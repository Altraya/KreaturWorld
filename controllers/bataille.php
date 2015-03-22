<?php
	/* Battles controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/BatailleView.class.php");

	$view = new GeneralView();
	$BatailleView = new BatailleView();

	$view->header("KreaturWorld - Bataille");
		$view->topBar();
	$view->endPage();
?>