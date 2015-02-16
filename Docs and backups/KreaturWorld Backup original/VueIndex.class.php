<?php

/**
* 	VueIndex.class.php : Vue pour l'index'.
*
*	Author : Karakayn
*/
class VueIndex{
	
	public function __construct(){
	}


	//Affiche le corps de l'index
	public function	afficherCorpsIndex() {

		$html = '
		<section>
			<article>
				<h1>Accueil</h1>
				<hr/>
				<p>
					Que voulez vous faire ? <br/>
					Acheter une Kreatur ? <br/>
					Vendre une Kreatur ? <br/>
					<a href="antre.php">Voir vos Kreaturs ? </a><br/>
					Abandonner une Kreatur ? <br/>
					<a href="histoire.php">L\'histoire d\'Altraya</a><br/>
				</p>
			</article>
		</section>
			';
		echo utf8_decode($html);
		
	}
};
?>