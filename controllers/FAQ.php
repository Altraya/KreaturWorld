<?php
	/* FAQ controller */

	require_once("./views/GeneralView.class.php");
	require_once("./views/FAQView.class.php");

	$view = new GeneralView();
	$FaqView = new FAQView();

	$view->header("KreaturWorld - FAQ");
		$view->topBar();
		$FaqView->intro();
		$FaqView->map();
		$FaqView->guild();
	$view->endPage();
?>