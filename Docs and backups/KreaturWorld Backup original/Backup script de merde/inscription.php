<!--
	inscription.php : Formulaire d'inscription
	Permet de s'inscrire et d'avoir sa première Kreatur
	Author : Karakayn
-->
<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8" />
		<title>KreaturWorld - Inscription</title>
		<link rel="stylesheet" href="../world/css/Css_Page_FW.css"/>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lte IE 7]>
		<link rel="stylesheet" href="../css/Css_Page_FW_IE.css" />
		<![endif]-->
	</head>
	
	<body>
		<?php 
			require_once "header.php";
		?>
		<section>
			<article>
				<?php
				//si on a pas deja validé le formulaire l'affiche
				if ( (!isset($_POST['Envoyer1']) && !isset($_POST['Envoyer2'])) || !isset($_POST['Envoyer2'])){
				?>
				<p>Inscription :
					<br/><br/>
					<form action="inscription.php" method="post">
						Pseudo: <input type="text" name="pseudo"/>
						<br/><br/>
						Mot de passe: <input type="password" name="mdp"/>
						<br/><br/>
						Retapez votre mot de passe: <input type="password" name="mdpVerif">
						<br/><br/>
						Adresse Email: <input type="mail" name="mail"/>
						<br/><br/>
						Date de naissance: <input type="date" name="dateDeNaissance"/>
						(Sous la forme AAAA-MM-JJ, exemple 2000-12-25)
						<br/><br/>

						<input type="radio" name="sexe" value="Féminin" id="Féminin" /> <label for="Féminin">Féminin </label>
						<input type="radio" name="sexe" value="Masculin" id="Masculin" /> <label for="Masculin">Masculin </label><br/>
						<br/><br/>
						
						<input type="submit" name="Envoyer1" value="Envoyer" />
					</form>
				</p>
				<?php
				}
				//si on a pas encore repondu au 2eme formulaire, seulement au premier on cree notre joueur
				if (!isset($_POST['Envoyer2']) && isset($_POST['Envoyer1']) && $_POST['Envoyer1'] == 'Envoyer'){
					
					require_once('config.php');
					require_once('Joueur.class.php');
					require_once('JoueurManager.class.php');

					//Création du joueur
					$joueur = new Joueur($_POST);

					//Création du manager
					$Joueurmanager = new JoueurManager($db);

					//Add du joueur en bdd
					$Joueurmanager->add($joueur);

					echo('Félicitation '.$joueur->getPseudo().', vous êtes désormais inscrit, mais il vous faut une Kreatur pour debuter dans ce monde !');

				}



				//Si on est passé par le premier formulaire (qu'on c'est inscrit en tant que joueur), et qu'on a pas valider le deuxieme, on voit le deuxieme pour avoir son dragon
				if ((isset($_POST['Envoyer1']) && $_POST['Envoyer1'] == 'Envoyer') && (!isset($_POST['Envoyer2']))) {
				?>	
				<p>Choisissez votre première Kreatur :
					<br/><br/>
					<form action="inscription.php" method="post">
						Nom: <input type="text" name="nom"/>
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
				<?php
				}
				//si on a répondu aux deux formulaires
				if (isset($_POST['Envoyer2']) && $_POST['Envoyer2'] == 'Envoyer') {
					
					require_once('config.php');
					require_once('Kreatur.class.php');
					require_once('KreaturManager.class.php');

					//Création de la kreatur
					$kreatur = new Kreatur($_POST);

					//Création du manager
					$Kreaturmanager = new KreaturManager($db);

					$Kreaturmanager->add($kreatur);
					echo('Félicitation '.$kreatur->getNom().' vient de naître, vas vite t\'en occuper ! <br/> Rendez vous dans <a href="antre.php">l\'antre</a> !');
				}
				
				?>
			</article>
		</section>
	</body>
</html>