<?php

/**
* 	VueAntre.class.php : Vue
*
*	Author : Karakayn
*/
class VueAntre{

	/*Constructeur*/
	public function __construct(){
	}

	//Message precisant qu'il faut s'inscrire ou se connecter pour avoir accès à l'antre.
	public function messageNonConnecte(){
		$html = '
			Vous trouverez prochainement dans cette antre les créatures qui vous seront alliés, <a href="inscription.php">inscrivez vous</a> ou <a href="connexion.php">connectez vous</a> pour les voirs !
			';
		echo utf8_decode($html);
	}

	public function corpsAntre(){
		$html = '

			<h1>L\'antre</h1>
			<hr/><br/>
			Bienvenue dans l\'antre, vous trouverez ici l\'intégralité de vos Kreaturs, qui n\'attendent que de partir à la conquête d\'Altraya <br/><br/>");
			';
		echo utf8_decode($html);
	}


};
?>