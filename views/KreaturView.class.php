<?php

/**
* 	KreaturView.class.php : View for kreaturs.
* 	
*	Manage the display of kreaturs' informations
*
*	Author : Karakayn
*/

class KreaturView{

	public function __construct(){
	}

	//Display in a html table all information about Kreaturs + edit and delete button
	public function	kreaturOnTable($tabKreatur) {
		$html = "";

		$html.='		
		<div class="row">
			<div class="small-12 large-12 columns">';
		$html.= '<table>';
		foreach ($tabKreatur as $kreaturs => $kreatur) {
			$html .= '
					<tr>
					   <td>'. $kreatur->getId() .'</td>
					   <td>'. $kreatur->getName() .'</td>
					   <td>'. $kreatur->getSpecies() .'</td>
					   <td>'. $kreatur->getColor() .'</td>
					   <td>'. $kreatur->getAge() .'</td>
					   <td>'. $kreatur->getOwner() .'</td>
					   <td>'. $kreatur->getSex() .'</td>
					   <td><a href="modifier.php"><img src="http://www.cesbio.ups-tlse.fr/data_all/images/16x16/edit.png" alt="Bouton edit"/>Edit</td>
					   <td><a href="supprimer.php"><img src="http://www.sportrelax-vicemil.cz/en/css/DeleteIcon.gif" alt="Bouton delete"/>Delete</td>
					</tr>
					';
		}
		$html .= '</table>';

		$html .= '
			</div>
		</div>
		';
		echo($html);
		
	}

	public function showPicture($species, $color){
		switch ($species) {
			case 'Dragon':
				switch ($color) {
					case 'Noir':
						$src = 'http://www.karakayn.com/KreaturWorld/images/drake_noir.png';
						break;
					case 'Rouge':
						$src = 'http://www.karakayn.com/KreaturWorld/images/drake_rouge.png';
						break;
					case 'Bleu':
						$src = 'http://www.karakayn.com/KreaturWorld/images/drake_bleu.png';
						break;
					default:
						//Couleur non autorisé
						$src = 'http://www.metaroid.com/images/data/icone-pioupiou.jpg';
						break;
				}
				
				break;
			case 'Leviathan':
				switch ($color) {
					case 'Noir':
						$src = 'http://auto.img.v4.skyrock.net/9729/74579729/pics/3075730683_1_3_iieT0KGE.jpg';
						break;
					case 'Rouge':
						$src = 'http://www.pokemontrash.com/heartgold-soulsilver/images/leviator_rouge/leviator_rouge_fanart.PNG';
						break;
					case 'Bleu':
						$src = 'http://i10.servimg.com/u/f10/10/07/21/67/leviat10.jpg';
						break;
					default:
						$src = 'http://www.metaroid.com/images/data/icone-pioupiou.jpg';
						break;
				}
				break;
			default:
				$src = 'http://www.metaroid.com/images/data/icone-pioupiou.jpg';
				break;
		}
		return $src;
	}

	//show the tab with picture and kreatur's informations
	public function displayKreatur($tabKreatur){

		$html = '<div class="row" data-equalizer>';
			foreach ($tabKreatur as $kreaturs => $kreatur) {
				$picture = $this->showPicture($kreatur->getSpecies(), $kreatur->getColor());

				$html .= '<div class="large-4 medium-4 small-4 columns panel" data-equalizer-watch>';
				$html .='<img src="'.$picture.'">';
				$html .= '<p> Kreatur : '.$kreatur->getName() .' <br/>
							Espece : '.$kreatur->getSpecies().' <br/>
							Couleur : '.$kreatur->getColor().' <br/>
							Age : '.$kreatur->getAge().' ans <br/>
							Sexe : '.$kreatur->getSex().' <br/>
							Propriétaire : '.$kreatur->getOwner().'
						</p>';

				$html .= '</div>';	
			}
		$html .= '</div>';
		
		echo $html;
	}

}
?>