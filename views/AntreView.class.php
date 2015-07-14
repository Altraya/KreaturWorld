<?php

/**
* 	AntreView.class.php : Specific view for the "antre"
*
*	Author : Karakayn
*/
class AntreView{

	/*Constructeur*/
	public function __construct(){
	}


	//title and welcome message
	public function welcome(){
		$html = '
		<div class="row description">
			<div class="small-10 large-10 columns">
				<h1>L\'antre</h1>
				<hr/>
				Bienvenue dans l\'antre, vous trouverez ici l\'intégralité de vos Kreaturs, qui n\'attendent que de partir à la conquête d\'Altraya <br/><br/>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/grotte.png" alt="Antre"/>
			</div>
				
		';
		echo $html;
	}


};
?>