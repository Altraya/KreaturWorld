<?php
/* Cemetery view */

class CemeteryView{

	public function __construct(){
	}

	//title and description of the map
	public function intro(){
		$html = "";
		$html.= '
		<div class="row description">
			<div class="small-10 large-10 columns">
				<h1>Cimetiere</h1>
				<hr/>
				<center><p>Vous trouverez ici toutes vos Kreaturs perdues au combat.</p></center>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/tombe.jpg" alt="Tombe"/>				
			</div>
		

		';

		echo($html);
	}

	public function noKreatur(){
		$html = "";
		$html .= '
			<div class="small-12 large-12 columns">
				<div class="panel center">
					<p> Il n\'y a actuellement aucune de vos Kreaturs au cimetière.</p>
				</div>
			</div>
		';
		echo($html);
	}

}
?>