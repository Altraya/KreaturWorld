<?php
/*
*	PlayerManager.class.php : Permet de gerer les joueurs
*
*	Modele des joueurs
*	Permet d'add, de delete, de modifier, d'avoir la liste des joueurs.
*	
*	Author : Karakayn
*/

require_once('Player.class.php');

class PlayerManager{
	
	
	
	private $_db;

	public function __construct($db){
		$this->setDb($db);
	}

	public function setDb(PDO $db){
		$this->_db = $db;
	}

	//Add a player in database
	public function add(Player $player){
		
		$sql = "INSERT INTO player (pseudo, pwd, mail, birthdate, sex, avatarUrl, inscriptionDate)
			VALUES (:pseudo, :pwd, :mail, :birthdate, :sex, :avatarUrl, :inscriptionDate)";
		$req = $this->_db->prepare($sql);                     
		$req->bindParam(':pseudo', $player->getPseudo(), PDO::PARAM_STR);
		$req->bindParam(':pwd', $player->getPwd(), PDO::PARAM_STR);
		$req->bindParam(':mail', $player->getMail(), PDO::PARAM_STR);
		$req->bindParam(':birthdate', $player->getBirthdate(), PDO::PARAM_STR);
		$req->bindParam(':sex', $player->getSex(), PDO::PARAM_STR);
		$req->bindParam(':avatarUrl', $player->getAvatar(), PDO::PARAM_STR);
		$req->bindParam(':inscriptionDate', $player->getInscriptionDate(), PDO::PARAM_STR);		
		$req->execute();
		$req->closeCursor();

	}
/*
	//Permet de delete un joueur donné en paramètre, de la bdd.
	public function remove(Joueur $joueur){
		$sql = "DELETE FROM Joueur WHERE id = :id ";
		$req = $this->_db->prepare($sql);
		$req->bindParam(':id', $joueur->getId(), PDO::PARAM_INT);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$req->closeCursor();
	}

*/
	//get a player by his name/pseudo
	public function getPlayer($pseudo){
		$pseudo = (String) $pseudo;
		$player = array();
		$req = $this->_db->query('SELECT id, pseudo, pwd, mail, birthdate, sex, avatarUrl, inscriptionDate FROM player WHERE pseudo = \''.$pseudo.'\' ');
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
			$players = new Player($donnees);
		}
		$req->closeCursor();
		return $players;
	}
/*
	//Permet de lister tous les joueurs en bdd
	public function getList(){

		$joueur = array();

		$query = $this->_db->query('SELECT id, pseudo, mdp, mail, dateDeNaissance, sexe, avatar, dateInscription FROM Joueur ORDER BY nom');

		while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
			$joueurs[] = new Joueur($donnees);
		}
		$query->closeCursor();

		return $joueurs;
	}

	//Permet d'éditer les informations d'un joueur
	//Ne change pas dateInscription, il ne changera jamais \o
	public function update(Joueur $joueur){
		$sql = "UPDATE Joueur 
			SET pseudo = :pseudo,
            mdp = :mdp,
            mail = :mail,
            dateDeNaissance = :dateDeNaissance,
            sexe = :sexe,
            avatar = :avatar
            WHERE id = :id";
		$req = $this->_db->prepare($sql);                     
		$req->bindParam(':pseudo', $joueur->getPseudo(), PDO::PARAM_STR);
		$req->bindParam(':mdp', $joueur->getMdp(), PDO::PARAM_STR);
		$req->bindParam(':mail', $joueur->getMail(), PDO::PARAM_STR);
		$req->bindParam(':dateDeNaissance', $joueur->getDateDeNaissance(), PDO::PARAM_STR);
		$req->bindParam(':sexe', $joueur->getSexe(), PDO::PARAM_STR);
		$req->bindParam(':avatar', $joueur->getAvatar(), PDO::PARAM_LOB);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$req->closeCursor();
	}*/

	//Return the id, pseudo and password of one player : if it's not null the player exist.
	public function verifConnexion($pseudo, $pass){
		$sql = "SELECT id, pseudo, pwd FROM player WHERE pseudo = :pseudo AND pwd = :pass";
		$req = $this->_db->prepare($sql);
		$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
		$req->bindParam(':pass', $pass, PDO::PARAM_STR);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$resultat = $req->fetch();
		$req->closeCursor();
		
		return $resultat;
	}
}
?>