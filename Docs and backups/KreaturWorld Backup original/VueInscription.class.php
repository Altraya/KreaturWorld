<?php

/**
* 	VueInscription.class.php : Vue pour l'inscription'.
* 	
*	Permet d'afficher les différents formulaires d'inscriptions
*
*	Author : Karakayn
*/
class VueInscription{
	
	public function __construct(){
	}


	//Affiche le formulaire d'inscription du joueur
	public function	afficherFormulaireInscriptionJoueur() {

		$html = '
		<p>Inscription :
			<br/><br/>
			<form action="inscription.php" method="post">
				<label for="pseudo">Pseudo: </label>
				<input type="text" name="pseudo" id="pseudo" required/>
				<br/><br/>

				<label for="mdp">Mot de passe: </label>
				<input type="password" name="mdp" id="mdp" required/>
				<br/><br/>

				<label for="mdpVerif">Retapez votre mot de passe: </label>
				<input type="password" name="mdpVerif" id="mdpverif" required/>
				<br/><br/>

				<label for="mail">Adresse Email: </label>
				<input type="mail" name="mail" id="mail" required />
				<br/><br/>

				<label for="dateDeNaissance">Date de naissance: </label>
				<input type="date" name="dateDeNaissance" id="dateDeNaissance" required/>
				<br/><br/>

				<label for="sexe">Sexe: </label>
				<input type="radio" name="sexe" value="Féminin" id="Féminin" id="sexe"/> Féminin
				<input type="radio" name="sexe" value="Masculin" id="Masculin" checked="checked"/> Masculin <br/>
				<br/><br/>				

				<input type="submit" name="Envoyer1" value="Envoyer" />
			</form>
		</p>
			';
		echo utf8_decode($html);
		
	}

	//Permet d'afficher le formulaire pour que le joueur obtienne sa premiere kreatur
	public function afficherFormulaireInscriptionKreaturDuJoueur(Joueur $joueur){

			$html = '
			<p>Choisissez votre première Kreatur :
				<br/><br/>
				<form action="inscription.php" method="post">
					<label for="nom">Nom: </label>
					<input type="text" name="nom"/>
					<br/><br/>

					<label for="espece">Espece :</label><br />
			        <select name="espece" id="espece">
			            <option value="Dragon">Dragon</option>
			            <option value="Leviathan">Leviathan</option>
			            <option value="Hydre">Hydre</option>
			        </select>
					<br/><br/>

					<label for="couleur">Couleur :</label><br />
			        <select name="couleur" id="couleur">
			            <option value="Noir">Noir</option>
			            <option value="Rouge">Rouge</option>
			            <option value="Bleu">Bleu</option>
			        </select>
					<br/><br/>

					<input type="hidden" name="age" value="0"/>
					<input type="hidden" name="proprietaire" value="<?php echo($joueur->getPseudo()) ?>"/>

					<input type="radio" name="sexe" value="Femelle" id="Femelle" /> <label for="Femelle">Femelle </label>
					<input type="radio" name="sexe" value="Male" id="Male" /> <label for="Male">Male </label><br />
					
					<input type="submit" name="Envoyer2" value="Envoyer" />
				</form>
			</p>
			';

		echo utf8_decode($html);
	}

	//Message qui s'affiche quand le joueur a réussi son inscription
	public function afficherFelicitationInscriptionJoueur($nomJoueur){
		
		echo utf8_decode('Félicitation '.$nomJoueur.', vous êtes désormais inscrit, mais il vous faut une Kreatur pour debuter dans ce monde !');

	}

	//Message qui s'affiche quand le joueur obtient sa première Kreatur à l'inscription
	public function afficherFelicitationKreaturAdopte($nomKreatur){
		echo utf8_decode('Félicitation '.$nomKreatur.' vient de naître, vas vite t\'en occuper ! <br/> Rendez vous dans <a href="antre.php">l\'antre</a> !');
	}

	public function afficherErreurMdpDifferent(){
		echo utf8_decode('Erreur : Vous devez entrer deux mots de passe identiques !');
	}

	public function afficherMailInvalide(){
		echo utf8_decode('Erreur : Vous devez entrer un email valide !');
	}
};
?>