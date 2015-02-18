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
	public function	kreaturOnTable($kreatur) {

		$html = '<table>';
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
		$html .= '</table>';
		echo $html;
		
	}

	public function displayKreatur($kreatur, $urlPicture){

		$html = '';
			$html .= '<div class="CaseDragon">';

			$html .= '<p> Kreatur : '.$kreatur->getName() .' <br/>
						Espece : '.$kreatur->getSpecies().' <br/>
						Couleur : '.$kreatur->getColor().' <br/>
						Age : '.$kreatur->getAge().' ans <br/>
						Sexe : '.$kreatur->getSex().' <br/>
						Propriétaire : '.$kreatur->getOwner().'
					</p>';

			$html .= '</div>';	
		
		echo $html;
	}

}
?>