<!--
	histoire.php : Histoire de chaque contrée et espece.
	Author : Karakayn
-->

<?php

	require_once('VueGeneral.class.php');
	require_once('VueHistoire.class.php');

	$vueG = new VueGeneral();
	$vue = new VueHistoire();

	$vueG->debutPage();
		
		$vueG->debutParagraphe();
		
			$vue->afficherHistoire();
		
		$vueG->finParagraphe();

	$vueG->footer();

	$vueG->finPage();

?>