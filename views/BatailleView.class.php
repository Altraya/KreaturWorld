<?php
/* Battles view */

class BatailleView{

	public function __construct(){
	}

	//title and description of the battles
	public function intro(){
		$html = "";
		$html.= '
		<div class="row">
			<div class="small-12 large-12 columns">
				<h1>Batailles en cours.</h1>
				<hr/>
			</div>
		</div>
		';

		echo($html);
	}

	public function noKreaturOnleaving(){
		$html = "";
		$html .= '
		<div class="row">
			<div class="small-12 large-12 columns">
				<div class="panel">
					<p>Vous n\'avez pas actuellement de Kreaturs en déplacement</p>
				</div>
			</div>
		</div>
		';
		echo($html);
	}

}
?>