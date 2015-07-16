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

	public function header($pageTitle)
	{
		session_start();
		$html = "";
		$html.= '
		<!doctype html>
		<html lang="fr">
			<head>
				<meta charset="utf-8">
				<title>'.$pageTitle.'</title>
				<link rel="stylesheet" href="css/foundation.css">
				<link rel="stylesheet" href="css/normalize.css">
				<link rel="stylesheet" href="css/homePage.css">				
				<script src="js/vendor/jquery.js"></script>
				<script src="js/vendor/modernizr.js"></script>

			</head>
		<body>';

		echo($html);
	}

	public function inscriptionForm(){
		$html = '';

		$html.='

		<form data-abide id="inscriptionForm" action="inscription.php" method="post">

		
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
	

	
  			<div class="large-12 columns">
				<div class="email-field">
					<label>Email <small>required</small>
						<input name="mail" type="email" required>
					</label>
					<small class="error">Une adresse mail valide est requise.</small>
				</div>
			</div>
	

	
			<div class="large-12 columns">
			<center>
				<label for="féminin"><input name="sexe" type="radio" id="féminin" value="féminin" required>Féminin</label>
				<label for="masculin"><input name="sexe" type="radio" id="masculin" value="masculin" required>Masculin</label>
			</center>
			</div>
		

	
			<div class="large-12 columns">
				<button name="buttonInscription" form="inscriptionForm" class="button secondary expand" type="submit">M\'inscrire</button>
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

	public function homePageContent()
	{

        $html = '';
        $html.= '

        <div class="container">     
            <div class="row">
                <div <div class="small-12 columns">             
                    <img src="img/titre.png" alt="logo" id="logo" >
                </div>
            </div>
            <div class="row right">
                <div class="small-4 columns"></div>
                <div class="small-4 columns"></div>
                <div class="small-4 columns">
                
                    <form action="connexion.php" role="form" method="post">   
                        
                        <div class="form-group" id="FormCo">    

                            <div class="text-center">
                                <h2 class="grey">Connectez-vous</h2>
                            </div>

                            <div class="small-12 columns">
                                <label for="inputPseudoConnexion" class="col-md-12 control-label">Pseudo :</label>
                                <input type="text" class="form-control" id="inputPseudoConnexion" name="pseudo">
                            </div>
                            
                            <div class="small-12 columns">
                                <label for="inputPasswordConnexion" class="col-md-12 control-label">Mot de passe :</label>
                                <input type="Password" class="form-control" id="inputPasswordConnexion" name="password">
                            </div>

                            <span class="input-group-btn">
                                <div class="text-center">
                                    <button class="btn btn-default" type="submit" name="buttonConnexion">Connexion</button>
                                </div>
                            </span>
                        </div>      
                    </form>

                    
                    <form action="inscription.php" role="form" method="post">

                        <div class="form-group" id="FormInscri">

                            <div class="text-center">
                                <h2 class="grey">Inscrivez-vous</h2>
                            </div>  

                            <div class="small-12 columns">
                                <img id="krea" src="./img/kreaturs/DragonJaune.png"
                            </div>
                            
                            <div class="small-12 columns">
                                <label for="inputKreaturName" class="col-md-12 control-label">Nom Kreatur :</label>
                                <input type="text" class="form-control" id="inputKreaturName" name="fNomKrea">
                            </div>

                            <div class="small-12 columns space">
                                <label for="kreaturName">Kreatur:</label>
                                <select class="form-control" id="kreaturName" name="kreaturSpecies">
                                    <option value="Dragon">Dragon</option>
                                    <option value="Leviathan">Leviathan</option>
                                    <option value="Hydre">Hydre</option>
                                </select>
                            </div>
                       

                            <div class="small-12 columns space">
                                <label for="color">Couleur:</label>
                                <select class="form-control" id="color" name="color">
                                    <option value="Bleu">Bleu</option>
                                    <option value="Cyan">Cyan</option>
                                    <option value="Jaune">Jaune</option>
                                    <option value="Rouge">Rouge</option>
                                    <option value="Rose">Rose</option>
                                    <option value="Vert">Vert</option>
                                    <option value="Violet">Violet</option>
                                </select>
                            </div>

                            <div class="small-12 columns">
                                <div class="text-center">
                                    <input type="radio" name="sex" value="male"><label class="radio-inline">Male</label>
                                    <input type="radio" name="sex" value="femelle"><label class="radio-inline">Femelle</label>
                                </div>
                            </div>

                            <span class="input-group-btn">
                                <div class="text-center">
                                    <button class="btn btn-default" type="submit" name="Inscription">Inscription</button>
                                </div>
                            </span>

                        </div>                  
                    </form>
                    
                </div>  
            </div>
        </div>
        <script type="text/javascript" src="js/changeKreaOption.js"></script>

        ';
        echo($html);
    
	}

	public function title(){
		$html = '';

		$html.='
			<div class="row description">
				<div class="small-12 large-12 columns">
					<h1>Inscription</h1>
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
				<div class="panel center margin2PourcentTop">
					Félicitation vous êtes désormais inscrit !
				</div>';
		echo($html);
	}

	public function errorMessage(){
		$html = ' 
				<div class="panel center margin2PourcentTop">
					Vous avez saisi un mauvais identifiant ou mot de passe.
				</div>';
		echo($html);
	}

	public function errorMessageDuplicatePlayer(){
		$html = '
				<div class="panel center margin2PourcentTop">
					Vous ne pouvez pas vous inscrire avec ce pseudo, car il existe déjà.
				</div>';
		echo($html);
	}

	public function successDeconnexion(){
		$html = '
				<div class="panel center margin2PourcentTop">
					Vous avez bien été déconnecté !
				</div>
				';
		echo($html);
	}

	public function errorChooseYourKreatur(){
		$html = '
				<div class="panel center margin2PourcentTop">
					Vous devez choisir une Kreatur pour pouvoir continuer votre inscription !<br/>
					Vous allez être redirigé dans 5 secondes.
				</div>';
		echo($html);
	}

};
?>