<?php
/* marche view */

class MarcheView{

	public function __construct(){
	}

	//title and description of the marche
	public function intro(){
		$html = "";
		$html.= '
		<div class="row">
			<div class="small-10 large-10 columns">
				<h1>Le marché</h1>
				<hr/>
				<center><p>Vous trouverez ici tous les articles dont vous avez besoin pour vous occuper de vos kreaturs.</p></center>
			</div>
			<div class="small-2 large-2 columns">
				<img src="img/coffreOr.png" alt="Coffre en or"/>
			</div>
		</div>
		';

		echo($html);
	}

	public function noArticles(){
		$html = "";
		$html .= '
		<div class="row">
			<div class="small-12 large-12 columns">
				<div class="panel">
					<p> Il n\'y a actuellement aucun article de disponible ! Revenez plus tard !</p>
				</div>
			</div>
		</div>
		';
		echo($html);
	}

}
?>