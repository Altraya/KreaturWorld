<?php

/**
* 	VueKreatur.class.php : Vue pour les kreaturs.
* 	
*	Permet de gérer la conversion d’une kreatur en un tableau HTML
*
*	Author : Karakayn
*/
class VueKreatur{
	
	public function __construct(){
	}

	//Permet d'afficher dans un tableau html les informations des kreaturs. (Et un bouton edit et delete a cote)
	public function	afficherKreaturDansTableau($kreaturs) {

		$html = '<table>';
		foreach ($kreaturs as $kreatur)
		{
			$html .= '
			<tr>
			   <td>'. $kreatur->getId() .'</td>
			   <td>'. $kreatur->getNom() .'</td>
			   <td>'. $kreatur->getEspece() .'</td>
			   <td>'. $kreatur->getCouleur() .'</td>
			   <td>'. $kreatur->getAge() .'</td>
			   <td>'. $kreatur->getProprio() .'</td>
			   <td>'. $kreatur->getSexe() .'</td>
			   <td><a href="modifier.php"><img src="http://www.cesbio.ups-tlse.fr/data_all/images/16x16/edit.png" alt="Bouton edit"/>Edit</td>
			   <td><a href="supprimer.php"><img src="http://www.sportrelax-vicemil.cz/en/css/DeleteIcon.gif" alt="Bouton delete"/>Delete</td>
			</tr>
			';
		}
		$html .= '</table>';
		echo $html;
		
	}

	public function afficherKreatur($kreaturs){

		$html = '';
		foreach ($kreaturs as $kreatur)
		{
			$html .= '<div class="CaseDragon">';
			//Permet d'afficher une image en fonction de l'espece et de la couleur de la kreatur

			//PONEY : Pas les bonnes images. Test en cours.
			if($kreatur->getEspece() == 'Dragon' && $kreatur->getCouleur() == 'Noir'){
				$html .= '<img src="http://www.karakayn.com/KreaturWorld/images/drake_noir.png">';
			}
			if($kreatur->getEspece() === 'Dragon' && $kreatur->getCouleur() === 'Rouge'){
				$html .= '<img src="http://www.karakayn.com/KreaturWorld/images/drake_rouge.png">';
			}
			if($kreatur->getEspece() === 'Dragon' && $kreatur->getCouleur() === 'Bleu'){
				$html .= '<img src="http://www.karakayn.com/KreaturWorld/images/drake_bleu.png">';
			}
			if($kreatur->getEspece() === 'Leviathan' && $kreatur->getCouleur() === 'Bleu'){
				$html .= '<img src="http://i10.servimg.com/u/f10/10/07/21/67/leviat10.jpg">';
			}
			if ($kreatur->getEspece() === 'Leviathan' && $kreatur->getCouleur() === 'Rouge') {
				$html .= '<img src="http://www.pokemontrash.com/heartgold-soulsilver/images/leviator_rouge/leviator_rouge_fanart.PNG">';
			}
			if ($kreatur->getEspece() === 'Leviathan' && $kreatur->getCouleur() === 'Noir') {
				$html .= '<img src="http://auto.img.v4.skyrock.net/9729/74579729/pics/3075730683_1_3_iieT0KGE.jpg">';
			}


			$html .= '<p> Kreatur : '.$kreatur->getNom() .' <br/>
						Espece : '.$kreatur->getEspece().' <br/>
						Couleur : '.$kreatur->getCouleur().' <br/>
						Age : '.$kreatur->getAge().' ans <br/>
						Sexe : '.$kreatur->getSexe().' <br/>
						Propriétaire : '.$kreatur->getProprio().'
					</p>';

			$html .= '</div>';
		}
		

		echo $html;
	}
}
?>