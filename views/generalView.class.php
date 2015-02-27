<?php
/* Vue général */

class GeneralView{

	public function __construct(){
	}

	public function header($pageTitle){
		$html = "";
		$html.= '
		<!doctype html>
		<html lang="fr">
			<head>
				<meta charset="utf-8">
				<title>'.$pageTitle.'</title>
				<link rel="stylesheet" href="css/foundation.css">
				<link rel="stylesheet" href="css/normalize.css">
				<script src="js/vendor/modernizr.js"></script>

				<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
				<![endif]-->
			</head>
		<body>';

		echo($html);
	}

	//pin up the topBar of the site
	public function topBar(){
		$html = "";
		$html.='
			<nav class="top-bar" data-topbar role="navigation">
			  	<ul class="title-area">
			    	<li class="name">
			      		<h1><a href="index.php">KreaturWorld</a></h1>
			    	</li>
			     	<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			    	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  	</ul>

			  	<section class="top-bar-section">
			    <!-- Right Nav Section -->
			    	<ul class="right">			   
			      		<li class="active"><a href="#">Deconnexion</a></li>
			   	 	</ul>
			  	</section>
			</nav>
		';
		echo($html);
	}

	public function menuBar(){
		$html = "";
		$html.='
			<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">

			  	<section class="top-bar-section">
			    <!-- Left Nav Section -->
			    	<ul class="left">	

			    		<li class="has-dropdown">
					        <a href="#">Joueur</a>
					        <ul class="dropdown">
					          	<li><a href="#">Bureau</a></li>
					          	<li><a href="#">Guilde</a></li>
					          	<li><a href="#">Quest</a></li>
					          	<li><a href="#">Faction</a></li>
					        </ul>
			      		</li>

			    		<li class="has-dropdown">
					        <a href="#">Antre</a>
					        <ul class="dropdown">
					          	<li><a href="antre.php">Kreaturs</a></li>
					          	<li><a href="#">Actions</a></li>
					          	<li><a href="#">Cimetière</a></li>
					        </ul>
			      		</li>

						<li class="has-dropdown">
					        <a href="#">Communauté</a>
					        <ul class="dropdown">
					          	<li><a href="#">News</a></li>
					          	<li><a href="#">Forum</a></li>
					          	<li><a href="#">Classement</a></li>
					        </ul>
			      		</li>

						<li class="has-dropdown">
					        <a href="#">Bataille</a>
					        <ul class="dropdown">
					          	<li><a href="#">En cours</a></li>
					          	<li><a href="#">MAP</a></li>
					        </ul>
			      		</li>

			      		<li class="has-dropdown">
					        <a href="#">Boutique</a>
					        <ul class="dropdown">
					          	<li><a href="#">Marché</a></li>
					          	<li><a href="#">Antre d\'Hilrad</a></li>
					        </ul>
			      		</li>
			   	 	</ul>
			  	</section>
			</nav>
		';
		echo($html);
	}

	public function closeBody(){
		echo'</body>';
	}

	public function closeHTML(){
		echo'</html>';
	}


	//Close body and html and script for topbar
	public function endPage(){
		$html = '
				
			<script src="js/vendor/jquery.js"></script>
			<script src="js/vendor/fastclick.js"></script>
			<script src="js/foundation.min.js"></script>
			<script>$(document).foundation();</script>

  			</body>
			</html>
		';
		echo($html);		
	}

	public function section(){
		echo"<section>";
	}

	//End of the section part
	public function endSection(){
		echo("</section>");		
	}

	//Footer
	public function footer(){
		$html = '
		<footer>
			<p>
			
				&copy; Karakayn 2015
			
			</p>
		</footer>
		';
		echo $html;
	}

	public function paragraph(){
		echo '<p>';
	}

	public function endParagraph(){
		echo'</p>';
	}

	public function notConnected(){
		echo'
			<p> Vous n\'êtes pas connecté vous ne pouvez donc pas accéder à cette partie. <br/>
				<a href="inscription.php">Inscrivez vous</a> ou <a href="connexion.php">connectez vous</a> pour y accéder
			</p>
		';
	}
}
?>