<!--
	Config.php : Connexion à la base de donnée via l'utilisateur crée spécialement sur cette base
	Author : Karakayn
-->

<?php		
	try
	{

		$db = new PDO('mysql:host=localhost;dbname=KreaturWorld','KreaturWorld','kreaturproject');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	} 
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>