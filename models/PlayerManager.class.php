<?php
/*
*	PlayerManager.class.php : Manage Players
*
*	Add/delete/update and list players.
*	
*	Author : Karakayn
*/


class PlayerManager{
	
	require_once('Player.class.php');
	
	private $_db;

	public function __construct($db){
		$this->setDb($db);
	}

	public function setDb(PDO $db){
		$this->_db = $db;
	}

	//Ajoute un player donné en paramètre, dans la bdd
	public function add(Player $player){

		$sql = "INSERT INTO player (pseudo, mdp, mail, dateDeNaissance, sexe, avatar, dateInscription)
			VALUES (:pseudo, :mdp, :mail, :dateDeNaissance, :sexe, :avatar, NOW())";
		$req = $this->_db->prepare($sql);                     
		$req->bindParam(':pseudo', $player->getPseudo(), PDO::PARAM_STR);
		$req->bindParam(':mdp', $player->getMdp(), PDO::PARAM_STR);
		$req->bindParam(':mail', $player->getMail(), PDO::PARAM_STR);
		$req->bindParam(':dateDeNaissance', $player->getDateDeNaissance(), PDO::PARAM_STR);
		$req->bindParam(':sexe', $player->getSexe(), PDO::PARAM_STR);
		$req->bindParam(':avatar', $player->getAvatar(), PDO::PARAM_LOB);
		$req->execute() or die(print_r($req->errorInfo()));
		$req->closeCursor();
	}

	//Permet de delete un Player donné en paramètre, de la bdd.
	public function remove(Player $player){
		$sql = "DELETE FROM Player WHERE id = :id ";
		$req = $this->_db->prepare($sql);
		$req->bindParam(':id', $player->getId(), PDO::PARAM_INT);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$req->closeCursor();
	}


	//Permet de récupérer un Player en fonction de son pseudo (return un tableau)
	public function getPlayer($pseudo){
		$pseudo = (String) $pseudo;
		$Player = array();
		$req = $this->_db->query('SELECT id, pseudo, mdp, mail, dateDeNaissance, sexe, avatar, dateInscription FROM Player WHERE pseudo = \''.$pseudo.'\' ');
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
			$Players = new Player($donnees);
		}
		$req->closeCursor();
		return $Players;
	}

	//Permet de lister tous les Players en bdd
	public function getList(){

		$Player = array();

		$query = $this->_db->query('SELECT id, pseudo, mdp, mail, dateDeNaissance, sexe, avatar, dateInscription FROM Player ORDER BY nom');

		while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
			$Players[] = new Player($donnees);
		}
		$query->closeCursor();

		return $Players;
	}

	//Permet d'éditer les informations d'un Player
	//Ne change pas dateInscription, il ne changera jamais \o
	public function update(Player $Player){
		$sql = "UPDATE Player 
			SET pseudo = :pseudo,
            mdp = :mdp,
            mail = :mail,
            dateDeNaissance = :dateDeNaissance,
            sexe = :sexe,
            avatar = :avatar
            WHERE id = :id";
		$req = $this->_db->prepare($sql);                     
		$req->bindParam(':pseudo', $Player->getPseudo(), PDO::PARAM_STR);
		$req->bindParam(':mdp', $Player->getMdp(), PDO::PARAM_STR);
		$req->bindParam(':mail', $Player->getMail(), PDO::PARAM_STR);
		$req->bindParam(':dateDeNaissance', $Player->getDateDeNaissance(), PDO::PARAM_STR);
		$req->bindParam(':sexe', $Player->getSexe(), PDO::PARAM_STR);
		$req->bindParam(':avatar', $Player->getAvatar(), PDO::PARAM_LOB);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$req->closeCursor();
	}

	//Vérifie si il existe un Player avec le pseudo et le mot de passe, retourne un tableau avec son id en plus
	public function verifConnexion($pseudo, $pass){

		$sql = "SELECT id, pseudo, mdp FROM Player WHERE pseudo = :pseudo AND mdp = :pass";
		$req = $this->_db->prepare($sql);
		$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
		$req->bindParam(':pass', $pass, PDO::PARAM_STR);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$resultat = $req->fetch();
		$req->closeCursor();
		/*
		$req = $this->_db->prepare('SELECT id FROM Player WHERE pseudo = :pseudo AND mdp = :pass');
		$req->execute(array(
		    'pseudo' => $pseudo,
		    'pass' => $pass));
		$resultat = $req->fetch();
		Marche aussi mais je prefere le bind param
		*/
		return $resultat;
	}
}
?>