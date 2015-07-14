<?php

/**
* 	FicheView.class.php : Specific view for the "fiche"
*
*	Author : Karakayn
*/
class FicheView{

	/*Constructeur*/
	public function __construct(){
	}


	//title and welcome message
	public function welcome($Krea){
		$html = '
		<div class="row description">
			<div class="small-12 large-12 columns">
				<h1 class="center">Fiche de '.$Krea.'</h1>
				<hr/>
				
			</div>
				
		';
		echo $html;
	}


};
?>