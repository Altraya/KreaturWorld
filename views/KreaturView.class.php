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
		
			<div class="small-12 large-12 columns">';
		$html.= '<table class="min">';
		foreach ($tabKreatur as $kreaturs => $kreatur) {
			$html .= '
					<tr>
					   <td>'. $kreatur->getName() .'</td>
					   <td>'. $kreatur->getSpecies() .'</td>
					   <td>'. $kreatur->getColor() .'</td>
					   <td>'. $kreatur->getAge() .'</td>
					   <td>'. $kreatur->getSex() .'</td>
					   <td><a href="reproduction.php"><img src="img/icone male-femelle-mini.png" alt="Reproduction"/></td>
					   <td><a href="exploration.php"><img src="img/ile volante-mini.jpg" alt="Ile volante"/></td>
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

	//Display informations about kreatur and check for reproduction
	public function kreaturForReproduction($tabKreatur){
		$html = "";

		$html.='		
		<form data-abide id="reproductionForm" action="reproduction.php" method="post">
			
				<div class="small-12 large-12 columns">';
			$html.= '<table class="min">';
			foreach ($tabKreatur as $kreaturs => $kreatur) {
				$html .= '
						<tr>
						   <td>'. $kreatur->getName() .'</td>
						   <td>'. $kreatur->getSpecies() .'</td>
						   <td>'. $kreatur->getColor() .'</td>
						   <td>'. $kreatur->getAge() .'</td>
						   <td>'. $kreatur->getSex() .'</td>
						   <td><input type="checkbox" name="kreatur[]" value="'.$kreatur->getId().'"></td>
						</tr>
						';
			}
			$html .= '</table>';
			$html .= '

				</div>
		
			';
			$html.='
		
				<div class="large-12 columns">
					<button name="buttonAccouplement" form="reproductionForm" class="button secondary expand" type="submit">Accouplement</button>
				</div>
						
			';
			$html .= '

		</form>
		';
		echo($html);
	}


	public function showPicture($species, $color){
		switch ($species) {
			case 'Dragon':
				switch ($color) {
					case 'Cyan':
						$src = 'img/kreaturs/DragonCyan.png';
						break;
					case 'Rouge':
						$src = 'img/kreaturs/DragonRouge.png';
						break;
					case 'Bleu':
						$src = 'img/kreaturs/DragonBleu.png';
						break;
					case 'Vert':
						$src = 'img/kreaturs/DragonVert.png';
					break;
					case 'Jaune':
						$src = 'img/kreaturs/DragonJaune.png';
					break;
					case 'Rose':
						$src = 'img/kreaturs/DragonRose.png';
						break;
					default:
						//Couleur non autorisé
						$src = 'http://www.metaroid.com/images/data/icone-pioupiou.jpg';
						break;
				}
				
			break;

			case 'Leviathan':
				switch ($color) {
					case 'Cyan':
						$src = 'img/kreaturs/LeviathanCyan.png';
						break;
					case 'Rouge':
						$src = 'img/kreaturs/LeviathanRouge.png';
						break;
					case 'Bleu':
						$src = 'img/kreaturs/LeviathanBleu.png';
						break;
					case 'Vert':
						$src = 'img/kreaturs/LeviathanVert.png';
					break;
					case 'Jaune':
						$src = 'img/kreaturs/LeviathanJaune.png';
					break;
					case 'Rose':
						$src = 'img/kreaturs/LeviathanRose.png';
						break;
					default:
						$src = 'http://www.metaroid.com/images/data/icone-pioupiou.jpg';
						break;
				}
			break;

			case 'Hydre':
				switch ($color) {
					case 'Cyan':
						$src = 'img/kreaturs/HydreCyan.png';
						break;
					case 'Rouge':
						$src = 'img/kreaturs/HydreRouge.png';
						break;
					case 'Bleu':
						$src = 'img/kreaturs/HydreBleu.png';
						break;
					case 'Vert':
						$src = 'img/kreaturs/HydreVert.png';
					break;
					case 'Jaune':
						$src = 'img/kreaturs/HydreJaune.png';
					break;
					case 'Rose':
						$src = 'img/kreaturs/HydreRose.png';
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
		$html="";

		$html = '<div class="row" data-equalizer-mq="large-up">';
			foreach ($tabKreatur as $kreaturs => $kreatur) {

				$picture = $this->showPicture($kreatur->getSpecies(), $kreatur->getColor());
				
				$html .= '<a href="fiche.php?kreatur='.$kreatur->getId().' ">';
					$html .= '<div class="large-4 columns panel change" data-equalizer-watch>';
						$html .= '<div class="large-12 columns">';
							$html .= '<div class="large-12 columns nerf">';
								$html .='<img src="'.$picture.'">';
							$html .='</div>';

							$html .= '<div class="large-12 columns center">';
								$html .= '
										<p> Kreatur : '.$kreatur->getName() .' <br/>
											Espece : '.$kreatur->getSpecies().' <br/>
											Couleur : '.$kreatur->getColor().' <br/>
											Age : '.$kreatur->getAge().' ans <br/>
											Sexe : '.$kreatur->getSex().' <br/>
											Propriétaire : '.$kreatur->getOwner().'
										</p>';		

							$html .= '</div>';	
						$html .= '</div>';	
					$html .= '</div>';	
				$html .= '</a>';	
			}
		$html .= '</div>';
		
		echo($html);
	}

		//show the tab with picture and kreatur's informations
	public function displayFichePublic($kreatur){
		$html="";

				$picture = $this->showPicture($kreatur->getSpecies(), $kreatur->getColor());


			//Left div
			$html .= '<div class="large-6 columns margin2PourcentTop no-padding white">';
				//Pictures
				$html .= '<div class="large-12 columns center border">';
					$html .='<img src="'.$picture.'">';
				$html .='</div>';

				//Stuff
				$html .= '<div class="large-12 columns center border no-padding">';
					$html .= '<div class="large-1 columns center border no-padding case">';
						$html .='<img src="img/IconeEquipement/casqueBarre.png">';
					$html .='</div>';

					$html .= '<div class="large-1 columns center border no-padding case">';
						$html .='<img src="img/kreaturs/HydreRose.png">';
					$html .='</div>';

					$html .= '<div class="large-1 columns center border no-padding case">';
						$html .='<img src="img/kreaturs/HydreRose.png">';
					$html .='</div>';

					$html .= '<div class="large-1 columns center border no-padding case">';
						$html .='<img src="img/kreaturs/HydreRose.png">';
					$html .='</div>';

					$html .= '<div class="large-1 columns center border no-padding case">';
						$html .='<img src="img/kreaturs/HydreRose.png">';
					$html .='</div>';

					$html .= '<div class="large-1 columns center border no-padding case">';
						$html .='<img src="img/kreaturs/HydreRose.png">';
					$html .='</div>';
				$html .='</div>';

				//statistics
				$html .= '<div class="large-12 columns border">';
					$html .= '<div class="large-12 columns no-padding">';
						$html .= '<div class="large-2 columns no-padding">';
							$html .= 'Vie :';
						$html .='</div>';

						$html .= '<div class="progress large-10 columns success">';
							$html.='<span class="meter" style="width: [1 - 100]%"></span>';
						$html .='</div>';
					$html .= '</div>';

					$html .= '<div class="large-12 columns no-padding">';
						$html .= '<div class="large-2 columns no-padding">';
							$html .= 'Rage :';
						$html .='</div>';

						$html .= '<div class="progress large-10 columns alert">';
							$html.='<span class="meter" style="width: [1 - 100]%"></span>';
						$html .='</div>';
					$html .= '</div>';

					$html.='</hr>';

					$html .= '<div class="large-12 columns no-padding">';
						$html .= '<div class="large-3 columns no-padding">';
							$html .= 'Force :';
						$html .='</div>';

						$html .= '<div class="large-9 columns ">';
							$html.='&nbsp;';
						$html .='</div>';
					$html .= '</div>';

					$html .= '<div class="large-12 columns no-padding">';
						$html .= '<div class="large-3 columns no-padding">';
							$html .= 'Agilité :';
						$html .='</div>';

						$html .= '<div class="large-9 columns">';
							$html.='&nbsp;';
						$html .='</div>';
					$html .= '</div>';

					$html .= '<div class="large-12 columns no-padding">';
						$html .= '<div class="large-3 columns no-padding">';
							$html .= 'Endurance :';
						$html .='</div>';

						$html .= '<div class="large-9 columns">';
							$html.='&nbsp;';
						$html .='</div>';
					$html .= '</div>';

					$html .= '<div class="large-12 columns no-padding">';
						$html .= '<div class="large-3 columns no-padding">';
							$html .= 'Intelligence :';
						$html .='</div>';

						$html .= '<div class="large-9 columns">';
							$html.='&nbsp;';
						$html .='</div>';
					$html .= '</div>';
				$html .= '</div>';

					
			$html .= '</div>';	

	
			//Right div
			$html .= '<div class="large-6 columns margin2PourcentTop transparent no-padding-right">';
			
				$html .= '<div class="large-12 columns border white heightTier">';
					$html .= '<h2 class="center">Statistiques</h2>';
					$html .= '<hr/>';
					$html .= 'Kreatur : '.$kreatur->getName().' <br/>';
					$html .= 'Espece : '.$kreatur->getSpecies().' <br/>';
					$html .= 'Couleur : '.$kreatur->getColor().' <br/>';
					$html .= 'Age : '.$kreatur->getAge().' <br/>';
					$html .= 'Sexe : '.$kreatur->getSex().' <br/>';
					$html .= 'Propriétaire : '.$kreatur->getOwner().' <br/>';
				$html .='</div>';
			
				$html .= '<div class="large-12 columns border margin2PourcentTop white heightTier">';
					$html .= '<h2 class="center">Ventes </h2>';
					$html .= '<hr/>';
					
				$html .='</div>';

				$html .= '<div class="large-12 columns border margin2PourcentTop white heightTier">';
					$html .= '<h2 class="center">Objets magiques </h2>';
					$html .= '<hr/>';
					
				$html .='</div>';

				$html .= '<div class="large-12 columns border margin2PourcentTop white heightTier">';
					$html .= '<h2 class="center">Reproduction </h2>';
					$html .= '<hr/>';
					
				$html .='</div>';
					
			$html .='</div>';

		$html .= '</div>';	
		
		echo($html);
	}

	public function errorNotSameSpecies()
	{
		$html = "";
		$html .= '
			Erreur : Vous devez choisir deux individus de la même espèce pour les faire s\'accoupler !
		';
		echo($html);
	}

	public function errorSameSex()
	{
		$html = "";
		$html .= '
			Erreur : Vous devez choisir un individu mâle et femelle pour pouvoir les faire se reproduire !
		';
		echo($html);
	}

}
?>