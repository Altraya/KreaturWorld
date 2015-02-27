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
		$req->execute() or die(print_r($req->errorInfo()));
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


	//Permet de récupérer un joueur en fonction de son pseudo (return un tableau)
	public function getJoueur($pseudo){
		$pseudo = (String) $pseudo;
		$joueur = array();
		$req = $this->_db->query('SELECT id, pseudo, mdp, mail, dateDeNaissance, sexe, avatar, dateInscription FROM Joueur WHERE pseudo = \''.$pseudo.'\' ');
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
			$joueurs = new Joueur($donnees);
		}
		$req->closeCursor();
		return $joueurs;
	}

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
	}

	//Vérifie si il existe un joueur avec le pseudo et le mot de passe, retourne un tableau avec son id en plus
	public function verifConnexion($pseudo, $pass){

		$sql = "SELECT id, pseudo, mdp FROM Joueur WHERE pseudo = :pseudo AND mdp = :pass";
		$req = $this->_db->prepare($sql);
		$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
		$req->bindParam(':pass', $pass, PDO::PARAM_STR);
		$req->execute() or die(print_r($this->_db->errorInfo()));
		$resultat = $req->fetch();
		$req->closeCursor();
		/*
		$req = $this->_db->prepare('SELECT id FROM Joueur WHERE pseudo = :pseudo AND mdp = :pass');
		$req->execute(array(
		    'pseudo' => $pseudo,
		    'pass' => $pass));
		$resultat = $req->fetch();
		Marche aussi mais je prefere le bind param
		*/
		/*return $resultat;
	}*/
}
?>