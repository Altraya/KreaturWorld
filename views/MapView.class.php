<?php
/* Map view */

class MAPView{

	public function __construct(){
	}

	//title and description of the map
	public function intro(){
		$html = "";
		$html.= '
		<div class="row description">
			<div class="small-12 large-12 columns">
				<h1>La carte d\'Altraya</h1>
				<hr/>
			</div>
		
		';

		echo($html);
	}

	public function noKreaturOnleaving(){
		$html = "";
		$html .= '
		
			<div class="small-12 large-12 columns">
				<div class="panel center">
					<p>Vous n\'avez pas actuellement de Kreaturs en déplacement</p>
				</div>
			</div>
	
		';
		echo($html);
	}

	public function canvas(){
		$html = "";
		$html.= '

			<div class="small-12 large-12 columns">
				<canvas id="map" onLoad="drawCase()" width="900" height="400"></canvas>
			</div>
		
		<script src="js/map.js" type="text/javascript"></script>
		';
		echo($html);
	}

}
?>