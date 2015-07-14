<?php
/* Hilrad marche view */

class HilradView{

	public function __construct(){
	}

	//title and description of the Hilrad marche
	public function intro(){
		$html = "";
		$html.= '
		<div class="row description">
			<div class="small-10 large-10 columns">
				<h1>L\'antre d\'Hilrad</h1>
				<hr/>
				<center><p>Ahah ! Vous êtes impatient ? Venez mes amis dans l\'antre d\'Hilrad la sorcière ! J\'ai tout ce qu\'il vous faut !.</p></center>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/chaudron.png" alt="Chaudron"/>
			</div>
		
		';

		echo($html);
	}

	public function noArticles(){
		$html = "";
		$html .= '
		
			<div class="small-12 large-12 columns">
				<div class="panel center">
					<p> Il n\'y a actuellement aucun article de disponible ! Revenez plus tard !</p>
				</div>
			</div>
	
		';
		echo($html);
	}

}
?>