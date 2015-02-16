<!--
	Index.php : Page d'acceuil
	Author : Karakayn
-->
<?php
	require_once('VueGeneral.class.php');
	require_once('VueIndex.class.php');
	$vueG = new VueGeneral();
	$vue = new VueIndex();

	$vueG->debutPage();
	

	$vue->afficherCorpsIndex();

	$vueG->footer();

	$vueG->finPage();
?>