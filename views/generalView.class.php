<?php
/* Vue général */

class generalView{

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
			      		<h1><a href="#">KreaturWorld</a></h1>
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
			<nav class="top-bar" data-topbar role="navigation">

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
					          	<li><a href="#">Kreaturs</a></li>
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
}
?>