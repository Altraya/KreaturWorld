<?php
/*
*	Joueur.class.php : Gere un joueur
*
*	Author : Karakayn
*/
class Joueur{

	private $_id;				//id du joueur
	private $_pseudo;			//son pseudo
	private $_mdp;				//son mot de passe (crypté)
	private $_dateDeNaissance;	//sa date de naissance
	private $_sexe;				//son sexe
	private $_avatar;			//son avatar
	private $_mail;				//son mail
	private $_dateInscription;	//la date de son inscription
	
	
	/*Constructeur*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}

	/***************************
		Accesseur de la classe
	****************************/

	public function getId(){
		return $this->_id;
	}

	public function getPseudo(){
		return $this->_pseudo;
	}

	public function getMdp(){
		return $this->_mdp;
	}

	public function getDateDeNaissance(){
		return $this->_dateDeNaissance;
	}

	public function getSexe(){
		return $this->_sexe;
	}

	public function getAvatar(){
		return $this->_avatar;
	}

	public function getMail(){
		return $this->_mail;
	}

	public function getDateInscription(){
		return $this->_dateInscription;
	}

	/************************/

	public function setId($id){
		return $this->_id = $id;
	}

	public function setPseudo($pseudo){
		return $this->_pseudo = htmlspecialchars($pseudo);
	}

	public function setMdp($mdp){
		return $this->_mdp = sha1(htmlspecialchars($mdp));
	}

	public function setDateDeNaissance($date){
		return $this->_dateDeNaissance = htmlspecialchars($date);
	}

	public function setSexe($sexe){
		return $this->_sexe = htmlspecialchars($sexe);
	}

	public function setAvatar($avatar){
		return $this->_avatar = $avatar;
	}

	public function setMail($mail){
		return $this->_mail = htmlspecialchars($mail);
	}

	public function setDateInscription($dateInscription){
		return $this->_dateInscription = htmlspecialchars($dateInscription);
	}

	/************************/

	public function hydrate($donnees)
	{
		foreach($donnees as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);

			// Si le setter correspondant existe.
			if(method_exists($this, $method))
			{
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}

	public function toString(){
		echo('Pseudo = '.$this->getPseudo().', mdp = '.$this->getMdp().', Date de naissance = '.$this->getDateDeNaissance().', sexe = '.$this->getSexe().', mail = '.$this->getMail().', date d\'inscription = '.$this->getDateInscription().' ');
	}
}
?>