<?php
	/* Map controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/MapView.class.php");

	$view = new GeneralView();
	$MapView = new MapView();

	$view->header("KreaturWorld - MAP");
		$view->topBar();
	$view->endPage();
?>