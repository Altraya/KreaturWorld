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

			<h1>L\'antre</h1>
			<hr/>
			Bienvenue dans l\'antre, vous trouverez ici l\'intégralité de vos Kreaturs, qui n\'attendent que de partir à la conquête d\'Altraya <br/><br/>
			';
		echo $html;
	}


};
?>