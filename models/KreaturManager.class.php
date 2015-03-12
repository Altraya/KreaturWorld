<?php
/*
*	KreaturManager.class.php : Manage kreaturs
*
*	Add/delete/update and list kreaturs
*	
*	Author : Karakayn
*/
require_once('Kreatur.class.php');

class KreaturManager{
	
	private $_db;

	public function __construct($db){
		$this->setDb($db);
	}

	public function setDb(PDO $db){
		$this->_db = $db;
	}
/*
	//Ajoute une kreatur donné en paramètre, dans la bdd
	public function add(Kreatur $kreatur){

		$sql = "INSERT INTO Kreatur (nom, espece, couleur, age, proprietaire, sexe)
			VALUES (:nom, :espece, :couleur, :age, :proprio, :sexe)";
		$req = $this->_db->prepare($sql);                     
		$req->bindParam(':nom', $kreatur->getNom(), PDO::PARAM_STR);
		$req->bindParam(':espece', $kreatur->getEspece(), PDO::PARAM_STR);
		$req->bindParam(':couleur', $kreatur->getCouleur(), PDO::PARAM_STR);
		$req->bindParam(':age', $kreatur->getAge(), PDO::PARAM_INT);
		$req->bindParam(':proprio', $kreatur->getProprio(), PDO::PARAM_STR);
		$req->bindParam(':sexe', $kreatur->getSexe(), PDO::PARAM_STR);
		$req->execute();
		$req->closeCursor();
	}

	//Permet de delete une kreatur donné en paramètre, de la bdd.
	public function remove(Kreatur $kreatur){
		$sql = "DELETE FROM Kreatur WHERE id = :id ";
		$req = $this->_db->prepare($sql);
		$req->bindParam(':id', $kreatur->getId(), PDO::PARAM_INT);
		$req->execute();
		$req->closeCursor();
	}


	//Permet de récupérer une kreatur en fonction de son nom
	public function getKreatur($nom){
		$nom = (String) $nom;

		$kreatur;

		$req = $this->_db->query('SELECT id, nom, espece, couleur, age, proprietaire, sexe FROM Kreatur WHERE nom = \''.$nom.'\' ');
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
			$Kreatur = new Kreatur($donnees);
		}
		$req->closeCursor();
		return $Kreatur;
	}

	//Permet de lister toute les kreaturs en bdd
	public function getList(){

		$kreatur = array();

		$query = $this->_db->query('SELECT id, nom, espece, couleur, age, proprietaire, sexe FROM Kreatur ORDER BY nom');

		while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
			$kreaturs[] = new Kreatur($donnees);
		}
		$query->closeCursor();

		return $kreaturs;
	}*/

	//List all kreaturs of one player
	/*SELECT kreatur.id, kreatur.name, species, color, age, player.pseudo, kreatur.sex FROM kreatur JOIN player ON player.id = idOwner WHERE pseudo = 'fifi' ORDER BY kreatur.name;*/
	public function getListKreatur(Player $player){

		$aKreatur = array();
		$req = $this->_db->query('SELECT kreatur.id, kreatur.name, species, color, age, player.pseudo, kreatur.sex FROM kreatur JOIN player ON player.id = idOwner WHERE pseudo = \''.$player->getPseudo().'\' ORDER BY kreatur.name');
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
			//Change the name of field pseudo for player. It need to be owner, or the function hydrates will not work on Kreatur contructor
			$aKreatur['id'] = $donnees['id'];
			$aKreatur['name'] = $donnees['name'];
			$aKreatur['species'] = $donnees['species'];
			$aKreatur['color'] = $donnees['color'];
			$aKreatur['age'] = $donnees['age'];
			$aKreatur['owner'] = $donnees['pseudo'];
			$aKreatur['sex'] = $donnees['sex'];
			$kreaturs[] = new Kreatur($aKreatur);
		}
		$req->closeCursor();
		return $kreaturs;
	}
/*
	//Permet d'éditer les informations d'une kreatur
	public function update(Kreatur $kreatur){

		$sql = "UPDATE Kreatur 
			SET nom = :nom,
            espece = :espece,
            couleur = :couleur,
            age = :age,
            proprietaire = :proprio,
            sexe = :sexe
            WHERE id = :id";
		$req = $this->_db->prepare($sql);                     
		$req->bindParam(':nom', $kreatur->getNom(), PDO::PARAM_STR);
		$req->bindParam(':espece', $kreatur->getEspece(), PDO::PARAM_STR);
		$req->bindParam(':couleur', $kreatur->getCouleur(), PDO::PARAM_STR);
		$req->bindParam(':age', $kreatur->getAge(), PDO::PARAM_INT);
		$req->bindParam(':proprio', $kreatur->getProprio(), PDO::PARAM_STR);
		$req->bindParam(':sexe', $kreatur->getSexe(), PDO::PARAM_STR);
		$req->bindParam(':id', $kreatur->getId(), PDO::PARAM_INT);
		$req->execute();
		$req->closeCursor();
	}*/
}
?>