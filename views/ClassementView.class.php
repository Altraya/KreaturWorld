<?php
/* Classement view */

class ClassementView{

	public function __construct(){
	}

	//title and description of the marche
	public function intro(){
		$html = "";
		$html.= '
		<div class="row">
			<div class="small-10 large-10 columns">
				<h1>Classement</h1>
				<hr/>
				<center><p>Vous trouverez ici les différents classement des Altraiens.</p></center>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/coupe.png" alt="Trophée en or"/>
			</div>
		</div>
		';

		echo($html);
	}

	public function noClassement(){
		$html = "";
		$html .= '
		<div class="row">
			<div class="small-12 large-12 columns">
				<div class="panel">
					<p> Il n\'y a actuellement aucun joueur à afficher dans ce classement !</p>
				</div>
			</div>
		</div>
		';
		echo($html);
	}

}
?>