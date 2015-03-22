<?php

/**
* 	InscriptionView.class.php : Specific view for the inscription
*
*	Author : Karakayn
*/
class InscriptionView{

	/*Constructeur*/
	public function __construct(){
	}


	public function inscriptionForm(){
		$html = '';

		$html.='

		<form data-abide id="inscriptionForm" action="inscription.php" method="post">

			<div class="row">
		    	<div class="large-6 columns">
					<div class="pseudo-field">
						<label for="pseudo">Pseudo <small>required</small>
					  		<input name="pseudo" type="text" required pattern="alpha_numeric" placeholder="Pseudo">
						</label>
						<small class="error">Entrez un pseudo valide</small>
					</div>
				</div>


				<div class="large-6 columns">
					<div class="date-field">
						<label for="date">Date de naissance <small>required</small>
							<input name="date" type="date" required pattern="date" placeholder="Date de naissance sous la forme (JJ/MM/AAAA)" />
						</label>
						<small class="error">Entrez une date valide sur le format (JJ/MM/AAAA)</small>
					</div>
				</div>
			</div>

			<div class="row">
      			<div class="large-12 columns">
        			<label for="password">Mot de passe <small>required</small>
          				<input type="password" id="password" placeholder="Mot de passe." name="password" required>
        			</label>
        			<small class="error">Votre mot de passe doit contenir au moins 8 caractères avec une lettre majuscule, un chiffre et un caractère spécial.</small>
      			</div>

				<div class="large-12 columns">
					<label for="confirmPassword">Retapez le mot de passe <small>required</small>
					  	<input type="password" id="confirmPassword" placeholder="Mot de passe." name="confirmPassword" required data-equalto="password">
					</label>
					<small class="error">Les mots de passes doivent être identique.</small>
				</div>
    		</div>

			<div class="row">
      			<div class="large-12 columns">
					<div class="email-field">
						<label>Email <small>required</small>
							<input name="mail" type="email" required>
						</label>
						<small class="error">Une adresse mail valide est requise.</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
				<center>
					<label for="féminin"><input name="sexe" type="radio" id="féminin" value="féminin" required>Féminin</label>
					<label for="masculin"><input name="sexe" type="radio" id="masculin" value="masculin" required>Masculin</label>
				</center>
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
					<button name="buttonInscription" form="inscriptionForm" class="button secondary expand" type="submit">M\'inscrire</button>
				</div>
			</div>

		</form>
		';
		echo($html);
	}

		public function connexionForm(){
		$html = '';

		$html.='

		<form data-abide id="connexionForm" action="connexion.php" method="post">

			<div class="row">
		    	<div class="large-6 columns">
					<div class="pseudo-field">
						<label for="pseudo">Pseudo <small>required</small>
					  		<input name="pseudo" type="text" required pattern="alpha_numeric" placeholder="Pseudo">
						</label>
						<small class="error">Entrez un pseudo valide</small>
					</div>
				</div>


				<div class="large-6 columns">
        			<label for="password">Mot de passe <small>required</small>
          				<input type="password" id="password" placeholder="Mot de passe." name="password" required>
        			</label>
        			<small class="error">Entrez un mot de passe.</small>
				</div>
			</div>

			

			<div class="row">
			<hr/>
		    	<div class="large-6 columns">
					<p>
						<center><a href="#">Mot de passe oublié ?</a></center>
					</p>
				</div>


				<div class="large-6 columns">
        			<p>
						<center><a href="inscription.php">S\'inscrire.</a></center>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
					<button name="buttonConnexion" form="connexionForm" class="button secondary expand" type="submit">Connexion</button>
				</div>
			</div>

		</form>
		';
		echo($html);
	}

	public function title(){
		$html = '';

		$html.='
			<div class="row">
				<div class="small-12 large-12 columns">
					<h1>Inscription</h1>
				</div>
			</div>
		';
		echo($html);
	}

	public function titleConnexion(){
		$html = '';

		$html.='
			<div class="row">
				<div class="small-12 large-12 columns">
					<h1>Connexion</h1>
				</div>
			</div>
		';
		echo($html);
	}

	public function successMessage(){
		$html = '
				<div class="panel">
					Félicitation vous êtes désormais inscrit !
				</div>';
		echo($html);
	}

	public function errorMessage(){
		$html = '
				<div class="panel">
					Vous avez saisi un mauvais identifiant ou mot de passe.
				</div>';
		echo($html);
	}

	public function errorMessageDuplicatePlayer(){
		$html = '
				<div class="panel">
					Vous ne pouvez pas vous inscrire avec ce pseudo, car il existe déjà.
				</div>';
		echo($html);
	}

	public function successDeconnexion(){
		$html = '
				<div class="panel">
					Vous avez bien été déconnecté !
				</div>
				';
		echo($html);
	}


};
?>