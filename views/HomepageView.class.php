<?php
/* Vue page Accueil */
class HomepageView{
    
    public function __construct(){
    }
    
    /*Show the header */
    public function header(){
        $html = '';
        $html.= '
        <!doctype html>
        <html>
            <head>
	           <title>Accueil Kreatur World</title>
	           <link rel="stylesheet" type="text/css" href="css/foundation.css">
	           <link rel="stylesheet" type="text/css" href="css/normalize.css">
	           <link rel="stylesheet" type="text/css" href="css/style.css">
	           <script type="text/javascript" src="js/foundation.min.js"></script>
            </head>
            <body>';
            echo($html);
    }
    
    /* Show the content of the homepage */
    public function content(){
        $html = '';
        $html.= '
  <img src="img/titre.png" alt="logo" id="logo" >
	<div class="row">
		<div class="small-4 large-4 columns"></div>
  		<div class="small-4 large-4 columns"></div>
	  		<div class="small-4 large-4 columns">
	  			<div id="FormCo">
					<h2 align="center">Connectez-vous</h2>
					<form action="connexion.php" method="post">
						<div class="small-12 columns">
							Pseudo : <input type="text" name="fPseudo" style="background-color: #3a3434;color: #cbcbcb;">
						</div>
						<div class="small-12 columns">
							Mot de passe : <input type="Password" name="fPassword" style="background-color: #3a3434;color: #cbcbcb;">
						</div>
						<input style="display:block;margin-left:auto;margin-right:auto;" class="button secondary" type="submit" value="Connexion">
					</form>
				</div>
			</div>
		
	</div>

	<div class="row">
		<div class="small-4 large-4 columns"></div>
  		<div class="small-4 large-4 columns"></div>
	  		<div class="small-4 large-4 columns">
				<div id="FormInscri">
					<h2 align="center">Inscrivez-vous</h2>
                    
                        <div class="small-12 columns">
							<img id="krea" src="kreaturs/DragonJaune.png"
						</div>
					<form action="inscription.php" method="post">
						
						<div class="small-12 columns">
							Nom Kreatur : <input type="text" name="fNomKrea" style="background-color: #3a3434;color: #cbcbcb;">
						</div>
                        <div class="small-12 columns">
                            <label>Kreatur:</label>
                            <select id="kreaturName">
                                <option value="Dragon">Dragon</option>
                                <option value="Leviathan">Leviathan</option>
                                <option value="Hydre">Hydre</option>
                            </select>
                        <div class="small-12 columns">
                            <label>Sexe:</label>
                                <input type="radio" name="sex" value="male"> Male   
                                <input type="radio" name="sex" value="femelle"> Femelle 
                        </div>

                        </div>
                        <div class="small-12 columns" style="padding-bottom:13px">
                            <label>Couleur:</label>
                            <select id="color">
                                <option value="Bleu">Bleu</option>
                                <option value="Cyan">Cyan</option>
                                <option value="Jaune">Jaune</option>
                                <option value="Rouge">Rouge</option>
                                <option value="Rose">Rose</option>
                                <option value="Vert">Vert</option>
                                <option value="Violet">Violet</option>
                            </select>
                        </div>
    
						<input style="display:block;margin-left:auto;margin-right:auto;margin-top:auto;" class="button secondary" type="submit" value="Inscription">
					</form>
				</div>
			</div>
		
	</div>';
        echo($html);
    }
}
?>