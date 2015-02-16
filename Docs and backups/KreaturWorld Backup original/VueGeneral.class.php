<?php

/**
* 	VueGeneral.class.php : Vue pour les pages en général.
* 	
*	Permet d'afficher le debut et la fin d'une page
*
*	Author : Karakayn
*/
class VueGeneral{

	/*Constructeur*/
	public function __construct(){
	}

	//Debut de la page d'inscription
	public function debutPage(){
		$html = '
			<!DOCTYPE html>
			<html>
					<head>
					<meta charset="utf-8" />
					<title>Inscription</title>
					<link rel="stylesheet" href="css/css_main.css"/>
					<!--[if lt IE 9]>
						<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
					<![endif]-->
					<!--[if lte IE 7]>
					<link rel="stylesheet" href="../css/Css_Page_FW_IE.css" />
					<![endif]-->
				</head>
				
				<body>';
						
			echo utf8_decode($html);

					require_once "header.php";
	}

	//Fin de la page d'inscription
	public function finPage(){
		$html = '
				</body>
			</html>
		';
		echo utf8_decode($html);		
	}

	//Debut d'article + section
	public function debutPageSectionArticle(){
		$html = '

		<article>
			<section>
		';
		echo utf8_decode($html);
	}

	//Fin d'article + section
	public function finPageSectionArticle(){
		$html = '

		</section>
			</article>
			
		';
		echo utf8_decode($html);
	}

	public function footer(){
		$html = '
		<footer>
			<p>
			
				&copy; Karakayn
			
			</p>
		</footer>
		';
		echo utf8_decode($html);
	}

	public function debutParagraphe(){
		echo '<p>';
	}

	public function finParagraphe(){
		echo'</p>';
	}
};
?>