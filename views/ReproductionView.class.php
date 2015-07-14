<?php
/* ReproductionView view */

class ReproductionView{

	public function __construct(){
	}

	//title and description of the map
	public function intro(){
		$html = "";
		$html.= '
		<div class="row description">
			<div class="small-10 large-10 columns">
				<h1>Reproduction</h1>
				<hr/>
				<p class="center">Selectionnez deux Kreaturs pour les faire se reproduire. La reproduction n\'est disponible que tous les 50 ans pour une Kreatur.</p>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/icone male-femelle.png" alt="Icone male-femelle"/>				
			</div>
	

		';

		echo($html);
	}

	public function noReproduction(){
		$html = "";
		$html .= '
		
			<div class="small-12 large-12 columns">
				<div class="panel center">
					<p>Vous ne disposez pas de suffisament de Kreatur pour accéder à la reproduction.</p>
				</div>
			</div>
	
		';
		echo($html);
	}

	//error when kreaturs have not the same species
	public function errorNotSameSpecies()
	{
		$html = "";
		$html .= '
			<div class="panel center">
				Erreur : Vous devez choisir deux individus de la même espèce pour les faire s\'accoupler !
			</div>
		';
		echo($html);
	}

	//error when kreaturs have the same sex
	public function errorSameSex()
	{
		$html = "";
		$html .= '
			<div class="panel center">
				Erreur : Vous devez choisir un individu mâle et femelle pour pouvoir les faire se reproduire !
			</div>
		';
		echo($html);
	}

	//error message => when age of kreaturs < 250 years
	public function errorAge()
	{
		$html = "";
		$html .= '
			<div class="panel center">
				Erreur : Une de vos kreaturs n\'a pas l\'age requis ! Elles doivent avoir au moins 250 ans pour pouvoir se reproduire !
			</div>
		';
		echo($html);
	}

	//Success message when reproduction is successfull
	public function babyWasBorn($babyKreatur)
	{
		$html = "";
		$html .= '
			<div class="panel center">
				Félicitation ! '.$babyKreatur->getName().' est né, il vous attend dans l\'antre !
			</div>
		';
		echo($html);
	}

}
?>