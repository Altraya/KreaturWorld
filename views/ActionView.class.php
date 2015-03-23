<?php

/**
* 	ActionView.class.php : Specific view for the action part
*
*	Author : Karakayn
*/
class ActionView{

	/*Constructeur*/
	public function __construct(){
	}


	//title and welcome message
	public function intro(){
		$html = '
		<div class="row">
			<div class="small-12 large-12 columns">
				<h1>Actions</h1>
				<hr/>
				<p>Cette page vous permet diverses actions sur vos kreaturs tel que : La reproduction / les attaques / l\'exploration</p>
			</div>
		</div>

		';
		echo $html;
	}


};
?>