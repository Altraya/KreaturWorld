<?php
	/* Classement controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/ClassementView.class.php");

	$view = new GeneralView();
	$ClassementView = new ClassementView();

	$view->header("KreaturWorld - Classement");
		$view->topBar();

		$ClassementView->intro();
		$ClassementView->noClassement();
	$view->endPage();
?>