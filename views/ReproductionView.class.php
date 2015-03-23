<?php
/* ReproductionView view */

class ReproductionView{

	public function __construct(){
	}

	//title and description of the map
	public function intro(){
		$html = "";
		$html.= '
		<div class="row">
			<div class="small-10 large-10 columns">
				<h1>Reproduction</h1>
				<hr/>
				<center><p>Selectionnez deux Kreaturs pour les faire se reproduire. La reproduction n\'est disponible que tous les 50ans pour une Kreatur.</p></center>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/icone male-femelle.png" alt="Icone male-femelle"/>				
			</div>
		</div>

		';

		echo($html);
	}

	public function noReproduction(){
		$html = "";
		$html .= '
		<div class="row">
			<div class="small-12 large-12 columns">
				<div class="panel">
					<p>Vous ne disposez pas de suffisament de Kreatur pour accéder à la reproduction.</p>
				</div>
			</div>
		</div>
		';
		echo($html);
	}

}
?>