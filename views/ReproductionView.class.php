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


	public function errorNotSameSpecies()
	{
		$html = "";
		$html .= '
			<div class="panel">
				Erreur : Vous devez choisir deux individus de la même espèce pour les faire s\'accoupler !
			</div>
		';
		echo($html);
	}

	public function errorSameSex()
	{
		$html = "";
		$html .= '
			<div class="panel">
				Erreur : Vous devez choisir un individu mâle et femelle pour pouvoir les faire se reproduire !
			</div>
		';
		echo($html);
	}

	//Success message when reproduction is successfull
	public function babyWasBorn($babyKreatur)
	{
		$html = "";
		$html .= '
			<div class="panel">
				Félicitation ! '.$babyKreatur->getName().' est né, il vous attend dans l\'antre !
			</div>
		';
		echo($html);
	}
}
?>